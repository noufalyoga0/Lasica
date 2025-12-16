@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<h2>Dashboard</h2>

<div class="dashboard-cards">
    <div class="dashboard-card">
        <h4>Total Orders</h4>
        <p>{{ $totalOrders }}</p>
    </div>

    <div class="dashboard-card">
        <h4>Pending Orders</h4>
        <p>{{ $pendingOrders }}</p>
    </div>

    <div class="dashboard-card">
        <h4>Total Revenue</h4>
        <p>Rp {{ number_format($totalRevenue) }}</p>
    </div>
</div>
@endsection
