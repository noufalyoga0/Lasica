<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::latest()->get();
        return view('admin.trips.index', compact('trips'));
    }

    public function create()
    {
        return view('admin.trips.create');
    }

    public function edit(Trip $trip)
{
    return view('admin.trips.edit', compact('trip'));
}

public function update(Request $request, Trip $trip)
{
    $request->validate([
        'nama_trip'    => 'required',
        'lokasi'       => 'required',
        'harga'        => 'required|numeric',
        'tanggal'      => 'required|date',
        'durasi_hari'  => 'required|integer|min:1',
        'image'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $data = $request->only([
        'nama_trip',
        'lokasi',
        'harga',
        'tanggal',
        'durasi_hari',
    ]);

    // jika upload gambar baru
    if ($request->hasFile('image')) {
        if ($trip->image && Storage::disk('public')->exists($trip->image)) {
            Storage::disk('public')->delete($trip->image);
        }

        $data['image'] = $request->file('image')->store('trips', 'public');
    }

    $trip->update($data);

    return redirect()
        ->route('admin.trips.index')
        ->with('success', 'Trip berhasil diperbarui');
    }

    public function destroy(Trip $trip)
{
    if ($trip->image && Storage::disk('public')->exists($trip->image)) {
        Storage::disk('public')->delete($trip->image);
    }

    $trip->delete();

    return redirect()
        ->route('admin.trips.index')
        ->with('success', 'Trip berhasil dihapus');
}



    public function store(Request $request)
    {
        $request->validate([
            'nama_trip' => 'required',
            'lokasi'    => 'required',
            'harga'     => 'required|numeric',
            'tanggal'   => 'required|date',
            'durasi_hari'  => 'required|integer|min:1',
            'image'        => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')->store('trips', 'public');

        Trip::create([
            'nama_trip' => $request->nama_trip,
            'lokasi'    => $request->lokasi,
            'harga'     => $request->harga,
            'tanggal'   => $request->tanggal,
            'durasi_hari' => $request->durasi_hari,
            'image'       => $imagePath,
        ]);

        return redirect()
            ->route('admin.trips.index')
            ->with('success', 'Trip berhasil ditambahkan');
    }
}
