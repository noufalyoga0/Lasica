<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Trip;
use Illuminate\Http\Request;
use App\Models\Payment;

class OrderController extends Controller
{
    public function create(Trip $trip)
    {
        return view('order.create', compact('trip'));
    }

    
    public function store(Request $request, Trip $trip)
{
    $request->validate([
        'nama' => 'required|string',
        'email' => 'required|email',
        'no_telp' => 'required|string',
        'tanggal' => 'required|date',
        'paket' => 'required|string'
    ]);

    // 🔥 AMBIL LANGSUNG DARI DB trips
    if ($request->paket === 'A') {
    $hargaPaket = 600000;
} elseif ($request->paket === 'B') {
    $hargaPaket = 920000;
} else {
    abort(400, 'Paket tidak valid');
}


    $order = Order::create([
        'user_id' => auth()->id(),
        'trip_id' => $trip->id,
        'nama' => $request->nama,
        'email' => $request->email,
        'no_telp' => $request->no_telp,
        'tanggal' => $request->tanggal,
        'paket' => $request->paket,
        'total_harga' => $hargaPaket,
        'status' => 'pending'
    ]);

    Payment::create([
        'order_id' => $order->id,
        'user_id' => auth()->id(),
        'trip_id' => $trip->id,
        'amount' => $order->total_harga,
        'status' => 'pending'
    ]);

    return redirect()->route('payment.pay', $order->id);
}
};