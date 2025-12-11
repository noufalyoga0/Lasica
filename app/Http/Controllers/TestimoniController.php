<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index() {
        $reviews = Review::all();
        return view('testimoni', compact('reviews'));
    }

    public function create() {
    // Bisa kirim data ke view jika perlu
    return view('testimoni-tambah');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'nama' => 'required|string|max:255',
        'komentar' => 'required|string',
        'rating' => 'required|integer|min:1|max:5',
        'foto' => 'nullable|image|max:2048'
    ]);

    if($request->hasFile('foto')){
        $data['foto'] = $request->file('foto')->store('review', 'public');
    }

    Review::create($data);

    return redirect()->route('testimoni')->with('success', 'Review berhasil ditambahkan!');
}
}