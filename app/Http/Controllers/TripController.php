<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Support\Facades\Schema;
use Midtrans\Config;
use Midtrans\Snap;

class TripController extends Controller
{
    // ===============================
    // LIST TRIP
    // ===============================
    public function index()
    {
        $trips = Trip::orderBy('tanggal', 'asc')->get();
        return view('trip', compact('trips'));

        $trips = Trip::all(); // ini sudah cukup kalau model bener
        return view('trip.index', compact('trips'));

    }

    

    // ===============================
    // DETAIL TRIP (TANPA MIDTRANS)
    // ===============================
    public function detail($id)
    {
        $trip = Trip::findOrFail($id);

        if (Schema::hasColumn('trips', 'views')) {
            $trip->increment('views');
        }

        return view('trip.detail', compact('trip'));
    }

    // ===============================
    // HALAMAN PEMBAYARAN (MIDTRANS DI SINI)
    // ===============================
    public function pay($id)
    {
        $trip = Trip::findOrFail($id);

        // konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // data transaksi
        $params = [
            'transaction_details' => [
                'order_id' => 'TRIP-' . $trip->id . '-' . time(),
                'gross_amount' => $trip->harga,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('trip.pay', compact('trip', 'snapToken'));
    }
}
