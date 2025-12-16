@extends('admin.layouts.app')

@section('title', 'Detail Order')

@section('content')
<h2>Detail Order</h2>

<p><strong>Nama:</strong> {{ $order->nama }}</p>
<p><strong>Trip:</strong> {{ $order->trip->nama_trip }}</p>
<p><strong>Total:</strong> Rp {{ number_format($order->total_harga) }}</p>
<p><strong>Status Order:</strong> {{ ucfirst($order->status) }}</p>

<hr>

<form method="POST" action="{{ route('admin.orders.updateStatus', $order->id) }}">
    @csrf
    @method('PUT')

    <select name="status">
        <option value="pending" {{ $order->status=='pending'?'selected':'' }}>Pending</option>
        <option value="completed" {{ $order->status=='completed'?'selected':'' }}>Completed</option>
        <option value="canceled" {{ $order->status=='canceled'?'selected':'' }}>Canceled</option>
    </select>

    <button class="btn">Update Order</button>
</form>


@endsection
