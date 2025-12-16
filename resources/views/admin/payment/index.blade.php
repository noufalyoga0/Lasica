@extends('admin.layouts.app')

@section('title', 'Payments')

@section('content')
<h2>Daftar Payments</h2>

<table class="admin-table">
    <tr>
        <th>ID</th>
        <th>Order</th>
        <th>User</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @foreach ($payments as $payment)
    <tr>
        <td>{{ $payment->id }}</td>
        <td>#{{ $payment->order_id }}</td>
        <td>{{ $payment->order->user->name ?? '-' }}</td>
        <td>Rp {{ number_format($payment->amount) }}</td>
        <td>{{ strtoupper($payment->status) }}</td>
        <td>
            <a href="{{ route('admin.payments.show', $payment->id) }}">
                Detail
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
