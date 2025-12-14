<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Review;

class DashboardController extends Controller
{
    public function index()
    {
        $trips = Trip::latest()->get();

        $seringDipesan = Trip::orderBy('total_dipesan', 'desc')
            ->take(4)
            ->get();

        // ✅ ambil 3 ulasan terbaru
        $reviews = Review::with('user')
            ->latest()
            ->limit(3)
            ->get();

        // ✅ INI YANG BENAR
        return view('dashboard', compact(
            'trips',
            'seringDipesan',
            'reviews'
        ));
    }
}
