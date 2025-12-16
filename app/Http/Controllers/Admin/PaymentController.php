<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::latest()->get();
        return view('admin.payment.index', compact('payments'));
    }

    public function show($id)
{
    $payment = Payment::with(['order.trip', 'order.user'])->findOrFail($id);
    return view('admin.payment.show', compact('payment'));
}

    public function updateStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:pending,paid,failed'
    ]);

    $payment = Payment::findOrFail($id);
    $payment->status = $request->status;
    $payment->save();

    // SINKRON KE ORDER
    if ($payment->order) {
        if ($request->status === 'paid') {
            $payment->order->status = 'paid';
        } elseif ($request->status === 'failed') {
            $payment->order->status = 'failed';
        } else {
            $payment->order->status = 'pending';
        }

        $payment->order->save();
    }

    return redirect()
        ->route('admin.payments.show', $payment->id)
        ->with('success', 'Status payment berhasil diupdate');
}
}