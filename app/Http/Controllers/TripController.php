<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    // 🔹 Data Trip Dummy (sementara)
    private $tripData = [
        [
            'id' => 1,
            'title' => 'Gunung Sindoro 2024',
            'duration' => '2H1M',
            'price' => 1000000,
            'image' => 'images/sindoro.jpg',
            'rating' => 4.9,
            'type' => 'Private Trip'
        ],
        [
            'id' => 2,
            'title' => 'Trip Gunung Merbabu 2024',
            'duration' => '2H1M',
            'price' => 950000,
            'image' => 'images/merbabu.jpg',
            'rating' => 4.8,
            'type' => 'Private Trip'
        ],
        [
            'id' => 3,
            'title' => 'Trip Gunung Prau 2024',
            'duration' => '2H1M',
            'price' => 850000,
            'image' => 'images/prau.jpg',
            'rating' => 4.9,
            'type' => 'Private Trip'
        ],
    ];

    /**
     * 🔸 Halaman list trip
     */
    public function index()
    {
        // Convert array ke object biar enak dipakai di blade
        $trips = collect($this->tripData)->map(function ($t) {
            return (object) $t;
        });

        return view('trip', compact('trips'));
    }

    /**
     * 🔸 Halaman detail trip
     */
    public function detail($id)
    {
        // Cari trip berdasarkan ID
        $trip = collect($this->tripData)->firstWhere('id', $id);

        // Jika tidak ditemukan → 404
        if (!$trip) {
            abort(404, "Trip tidak ditemukan.");
        }

        // Convert ke object
        $trip = (object) $trip;

        return view('trip-detail', compact('trip'));
    }
}
