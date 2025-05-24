<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\Level;
use App\Models\Payment;
use Illuminate\Support\Str;
use Midtrans\Config;

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
    //     Config::$serverKey = config('midtrans.server_key');
    //     Config::$clientKey = config('midtrans.client_key');
    //     Config::$isProduction = config('midtrans.is_production', false);
    //     Config::$isSanitized = config('midtrans.is_sanitized', true);
    //     Config::$is3ds = config('midtrans.is_3ds', true);
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
        // dd($serverKey, $clientKey, $isProduction, $isSanitized, $is3ds);

        Config::$serverKey = config('midtrans.server_key');
        Config::$clientKey = config('midtrans.client_key');
        Config::$isProduction = config('midtrans.is_production', false);
        Config::$isSanitized = config('midtrans.is_sanitized', true);
        Config::$is3ds = config('midtrans.is_3ds', true);
        
        $request->validate([
            'amount' => 'required|numeric|min:10000',
        ]);

        // Generate unique order ID
        $orderId = 'ORDER-' . time() . '-' . Str::random(5);

        // Create payment record
        $payment = Payment::create([
            'user_id' => Auth::id(),
            'order_id' => $orderId,
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
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        // Debug: Log parameters
        \Log::info('Midtrans Parameters:', $params);
        \Log::info('Midtrans Config:', [
            'server_key' => config('midtrans.server_key') ? 'Set' : 'Not Set',
            'client_key' => config('midtrans.client_key') ? 'Set' : 'Not Set',
            'is_production' => config('midtrans.is_production'),
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
        return redirect()->route('payments.index')->with('success', 'Pembayaran sedang diproses');
    }

    public function notification(Request $request)
    {
        $notif = new \Midtrans\Notification();

        $orderId = $notif->order_id;
        $status = $notif->transaction_status;
        $fraudStatus = $notif->fraud_status;
        $paymentType = $notif->payment_type;

        $payment = Payment::where('order_id', $orderId)->firstOrFail();

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

        return response()->json(['status' => 'success']);
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
