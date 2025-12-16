<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
{
    return view('admin.dashboard', [
        'totalOrders' => Order::count(),
        'pendingOrders' => Order::where('status', 'pending')->count(),
        'completedOrders' => Order::where('status', 'completed')->count(),
        'totalRevenue' => Payment::where('status', 'paid')->sum('amount'),

        // grafik
        'ordersPerMonth' => Order::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as total')
        )->groupBy('month')->get()
    ]);
}
};
