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
        $levels = Level::where('id', $id)->first();
        return view('payments.create', [
            'level' => $levels,
        ]);
    }

    public function store(Request $request)
    {
        // dd(config('midtrans.server_key'));
        $user = user::with('userProfile')->where('id', Auth::id())->first();

        if (!$user->userProfile) {
            return back()->with('userProfileNull', 'Data user belum lengkap.');
        }

        $request->validate([
            'amount' => 'required|numeric|min:10000',
        ]);

        // Generate unique order ID
        $orderId = 'ORDER-' . time() . '-' . Str::random(5);

        // Create payment record
        $payment = Payment::create([
            'user_id' => Auth::id(),
            'order_id' => $orderId,
            'level_id' => $request->level_id,
            'amount' => $request->amount,
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
                    'phone' => $user->userProfile->no_wa,
                    'city' => $user->userProfile->kabupaten,
                    'country_code' => 'IDN',
                ]
            ],
        ];

        // Debug: Log parameters
        \Log::info('Midtrans Parameters:', $params);
        \Log::info('Midtrans Config:', [
            'server_key' => env('MIDTRANS_SERVER_KEY') ? 'Set' : 'Not Set',
            'client_key' => env('MIDTRANS_CLIENT_KEY') ? 'Set' : 'Not Set',
            'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
        ]);

        try {
            // Get Snap Token
            $snapToken = Snap::getSnapToken($params);

            // Debug: Log snap token
            \Log::info('Snap Token Generated:', ['token' => $snapToken]);

            // Save token to payment record
            $payment->update(['snap_token' => $snapToken]);

            return view('payments.checkout', compact('snapToken', 'payment'));
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

}
