<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    /**
     * HALAMAN PEMBAYARAN (AMAN REFRESH)
     */
    public function pay(Order $order)
    {
        // CONFIG MIDTRANS
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        /**
         * BUAT SNAP TOKEN SEKALI SAJA
         */
        if (!$order->snap_token) {

            // ORDER ID MIDTRANS HARUS UNIK
            $order->midtrans_order_id = 'ORDER-' . $order->id . '-' . time();

            $order->snap_token = Snap::getSnapToken([
                'transaction_details' => [
                    'order_id' => $order->midtrans_order_id,
                    'gross_amount' => $order->total_harga,
                ],
                'customer_details' => [
                    'first_name' => $order->nama,
                    'email' => $order->email,
                ],
            ]);

            $order->save();
        }

        return view('payment.pay', [
            'snapToken' => $order->snap_token,
            'order'     => $order,
        ]);
    }

    /**
     * CALLBACK MIDTRANS
     */
    public function callback(Request $request)
    {
        // VALIDASI SIGNATURE
        $serverKey = config('services.midtrans.server_key');
        $signatureKey = hash(
            'sha512',
            $request->order_id .
            $request->status_code .
            $request->gross_amount .
            $serverKey
        );

        if ($signatureKey !== $request->signature_key) {
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        // CARI ORDER BERDASARKAN MIDTRANS ORDER ID
        $order = Order::where('midtrans_order_id', $request->order_id)->first();

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // UPDATE STATUS ORDER
        if (in_array($request->transaction_status, ['capture', 'settlement'])) {
            $order->status = 'paid';
        } elseif ($request->transaction_status === 'pending') {
            $order->status = 'pending';
        } else {
            $order->status = 'failed';
        }

        $order->save();

        return response()->json(['message' => 'OK']);
    }
}
