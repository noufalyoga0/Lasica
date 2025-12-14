<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use Midtrans\Snap;

class MidtransController extends Controller
{
    public function test()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . rand(),
                'gross_amount' => 600000,
            ],
            'customer_details' => [
                'first_name' => 'Noufal',
                'email' => 'noufal@test.com',
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('midtrans-test', compact('snapToken'));
    }
}
