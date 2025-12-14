<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Galeri;

class HomeController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->take(6)->get();

        $trips = Trip::latest()->get();

        $seringDipesan = Trip::where('total_dipesan', '>', 0)
            ->orderBy('total_dipesan', 'desc')
            ->take(4)
            ->get();

        $jadwalTerdekat = Trip::whereDate('tanggal', '>=', now())
            ->orderBy('tanggal', 'asc')
            ->take(4)
            ->get();

        return view('home', compact(
            'galeris',
            'trips',
            'seringDipesan',
            'jadwalTerdekat'
        ));
    }
}
