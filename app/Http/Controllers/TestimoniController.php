<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $reviews = Review::with('user')
        ->latest()
        ->paginate(6); // atau bebas: 4, 8, 10

    return view('testimoni', compact('reviews'));
    }

    public function create()
    {
        return view('testimoni.create');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'ulasan' => 'required|string',
    ]);

    $data['user_id'] = auth()->id();

    Review::create($data);

    return redirect()->route('testimoni')
        ->with('success', 'Review berhasil ditambahkan!');
}
}
