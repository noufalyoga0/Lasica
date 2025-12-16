@extends('admin.layouts.app')

@section('title', 'Detail Payment')

@section('content')
<h2>Detail Payment</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Payment ID</th>
        <td>{{ $payment->id }}</td>
    </tr>
    <tr>
        <th>Order ID</th>
        <td>#{{ $payment->order->id }}</td>
    </tr>
    <tr>
        <th>User</th>
        <td>{{ $payment->order->user->name }}</td>
    </tr>
    <tr>
        <th>Trip</th>
        <td>{{ $payment->order->trip->nama_trip ?? '-' }}</td>
    </tr>
    <tr>
        <th>Amount</th>
        <td>Rp {{ number_format($payment->amount) }}</td>
    </tr>
    <tr>
        <th>Status Payment</th>
        <td>
            <strong>{{ strtoupper($payment->status) }}</strong>
        </td>
    </tr>
</table>

<br>

<a href="{{ route('admin.payments.index') }}">← Kembali</a>
@endsection
