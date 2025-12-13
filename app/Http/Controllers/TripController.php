<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    // DATA TANPA DATABASE
    private $trips = [
        1 => [
            'title' => 'Trip Ke Pantai',
            'price' => 'Rp 250.000',
            'image' => '/images/pantai.jpg',
            'description' => 'Trip seru ke pantai dengan pemandangan yang indah.',
        ],
        2 => [
            'title' => 'Trip Ke Gunung',
            'price' => 'Rp 300.000',
            'image' => '/images/gunung.jpg',
            'description' => 'Pendakian dengan guide profesional.',
        ],
        3 => [
            'title' => 'Trip Ke Air Terjun',
            'price' => 'Rp 200.000',
            'image' => '/images/airterjun.jpg',
            'description' => 'Nikmati keindahan air terjun yang eksotis.',
        ],
    ];

    public function index()
    {
        $trips = $this->trips;
        return view('trip', compact('trips'));
    }

    public function detail($id)
    {
        if (!isset($this->trips[$id])) {
            abort(404);
        }

        $trip = $this->trips[$id];
        return view('detail', compact('trip'));
    }
}
