@extends('admin.layouts.app')

@section('title', 'Orders')

@section('content')
<h2>Data Orders</h2>

<table class="admin-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Trip</th>
            <th>Total</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->nama }}</td>
                <td>{{ $order->trip->nama_trip ?? '-' }}</td>
                <td>Rp {{ number_format($order->total_harga) }}</td>
                <td>{{ ucfirst($order->status) }}</td>
                <td>
                    <a href="{{ route('admin.orders.show', $order->id) }}">
                        Detail
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada order</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
