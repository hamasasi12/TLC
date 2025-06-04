<?php

namespace App\Http\Controllers;

use App\Events\PaymentSuccessful;
use Midtrans\Snap;
use App\Models\User;
use App\Models\Level;
use App\Models\Payment;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payment::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('payments.index', compact('payments'));
    }

    // public function __construct()
    // {
    //     Set Midtrans configuration
    //     \Midtrans\Config::$serverKey = config('midtrans.server_key');
    //     \Midtrans\Config::$clientKey = config('midtrans.client_key');
    //     \Midtrans\Config::$isProduction = config('midtrans.is_production', false);
    //     \Midtrans\Config::$isSanitized = config('midtrans.is_sanitized', true);
    //     \Midtrans\Config::$is3ds = config('midtrans.is_3ds', true);
    // }

    public function create(string $id)
    {
        $user = auth()->user();
        $levels = Level::where('id', $id)->first();

        // Validasi apakah level ada
        if (!$levels) {
            return redirect()->back()->with('error', 'Level tidak ditemukan');
        }

        // Jika profile sudah lengkap, tampilkan halaman pembayaran
        return view('payments.create', [
            'level' => $levels,
        ]);
    }

    public function store(Request $request)
    {
        $user = User::with('userProfile')->where('id', Auth::id())->first();
    
        if (!$user->isProfileComplete()) {
            // Buat payment record terlebih dahulu
            $orderId = 'ORDER-' . time() . '-' . Str::random(5);
            $payment = Payment::create([
                'user_id' => Auth::id(),
                'order_id' => $orderId,
                'level_id' => $request->level_id,
                'amount' => $request->amount,
                'snap_token' => '...',
                'status' => 'pending',
            ]);
    
            // Store payment redirect information with proper structure
            session()->put('payment_redirect', [
                'route_name' => 'payments.checkout',
                'parameters' => ['id' => $payment->id],
                'route' => route('payments.checkout', ['id' => $payment->id]), // Fallback route
                'message' => 'Silakan lengkapi profil terlebih dahulu sebelum lanjut ke pembayaran.',
                'payment_id' => $payment->id, // Additional info for reference
                'level_id' => $request->level_id,
                'amount' => $request->amount
            ]);
            
            return redirect()->route('asesi.profile')
                ->with('warning', 'Lengkapi profil Anda terlebih dahulu untuk melanjutkan pembayaran')
                ->with('info', 'Data pembayaran telah disimpan dan akan diproses setelah profil lengkap.');
        }
        
        // Validate request
        $request->validate([
            'amount' => 'required|numeric|min:10000',
            'level_id' => 'required|exists:levels,id'
        ]);
    
        // Generate unique order ID
        $orderId = 'ORDER-' . time() . '-' . Str::random(5);
    
        // Create payment record
        $payment = Payment::create([
            'user_id' => Auth::id(),
            'order_id' => $orderId,
            'level_id' => $request->level_id,
            'amount' => $request->amount,
            'snap_token' => '...',
            'status' => 'pending',
        ]);
    
        // Set up Midtrans transaction parameters
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => (int) $request->amount,
            ],
            'customer_details' => [
                'user_id' => Auth::id(),
                'first_name' => $user->name,
                'email' => $user->email,
                'billing_address' => [
                    'first_name' => $user->name,
                    'last_name' => '',
                    'email' => $user->email,
                    'phone' => $user->userProfile->no_wa ?? '',
                    'city' => $user->userProfile->kabupaten ?? '',
                    'country_code' => 'IDN',
                ]
            ],
        ];
    
        try {
            // Get Snap Token
            $snapToken = Snap::getSnapToken($params);
            
            // Update payment record with snap token
            $payment->update(['snap_token' => $snapToken]);
    
            // Redirect to checkout page
            return redirect()->route('payments.checkout', ['id' => $payment->id]);
            
        } catch (\Exception $e) {
            \Log::error('Midtrans Error:', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
    
            return redirect()->back()->with('error', 'Error creating payment: ' . $e->getMessage());
        }
    }
    public function finish(Request $request)
    {
        // Ambil order_id dari query parameter atau session
        $orderId = $request->get('order_id') ?? session('last_order_id');

        $payment = null;
        if ($orderId) {
            $payment = Payment::where('order_id', $orderId)->first();
        }

        // Jika tidak ada payment ditemukan, bisa gunakan data dummy atau redirect
        if (!$payment) {
            // Option 1: Redirect ke halaman payments dengan pesan error
            // return redirect()->route('payments.index')->with('error', 'Data pembayaran tidak ditemukan');

            // Option 2: Gunakan data dummy untuk testing (hapus setelah production)
            $payment = (object) [
                'order_id' => $orderId ?? 'ORD-' . time(),
                'amount' => 100000,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        return view('payments.finish', compact('payment'));
    }
    
    public function notification(Request $request)
    {
        $notif = new \Midtrans\Notification();

        $orderId = $notif->order_id;
        $status = $notif->transaction_status;
        $fraudStatus = $notif->fraud_status;
        $paymentType = $notif->payment_type;

        $payment = Payment::with('user')->where('order_id', $orderId)->firstOrFail();

        if ($status == 'capture') {
            if ($fraudStatus == 'challenge') {
                $payment->status = 'pending';
            } else if ($fraudStatus == 'accept') {
                $payment->status = 'success';
            }
        } else if ($status == 'settlement') {
            $payment->status = 'success';
        } else if ($status == 'cancel' || $status == 'deny' || $status == 'expire') {
            $payment->status = 'failed';
        } else if ($status == 'pending') {
            $payment->status = 'pending';
        }

        $payment->transaction_id = $notif->transaction_id;
        $payment->payment_type = $paymentType;
        $payment->payment_time = now();
        $payment->payment_details = json_decode(json_encode($notif), true);
        $payment->save();

        if ($payment->status == 'success') {
            event(new PaymentSuccessful($payment));
            // $user = $payment->user;
            // $user->givePermissionTo('access_level_A');
        }

        return response()->json(['status' => 'success']);
    }

    public function grandLevelAAccess($payment)
    {

        try {
            $user = User::where('id', $payment->user_id)->first();
            $user->givePermissionTo('access_level_a');
            $user->revokePermissionTo('fresh_user');
        } catch (\Exception $e) {
            \Log::error('Error Granting Access Level A:', ['message' => $e->getMessage()]);
        }
    }

    public function detail($id)
    {
        $payment = Payment::findOrFail($id);

        if ($payment->user_id !== Auth::id()) {
            abort(403);
        }

        return view('payments.detail', compact('payment'));
    }

    public function checkout($id)
    {
        $payment = Payment::findOrFail($id);
        
        // Pastikan payment milik user yang login
        if ($payment->user_id !== Auth::id()) {
            abort(403);
        }
        
        // Pastikan status masih pending
        if ($payment->status !== 'pending') {
            return redirect()->route('payments.detail', $id)
                ->with('error', 'Pembayaran ini sudah diproses sebelumnya');
        }
        
        $snapToken = $payment->snap_token;
        
        return view('payments.checkout', compact('payment', 'snapToken'));
    }
}
