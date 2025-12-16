@extends('admin.layouts.app')

@section('title', 'Tambah Trip')

@section('content')
<h2>Tambah Trip</h2>

<form method="POST" 
      action="{{ route('admin.trips.store') }}" 
      enctype="multipart/form-data">
    @csrf

    <div>
        <label>Nama Trip</label><br>
        <input type="text" name="nama_trip" required>
    </div>

    <div>
        <label>Lokasi</label><br>
        <input type="text" name="lokasi" required>
    </div>

    <div>
        <label>Harga</label><br>
        <input type="number" name="harga" required>
    </div>

    <div>
        <label>Tanggal Trip</label><br>
        <input type="date" name="tanggal" required>
    </div>

    <div>
        <label>Durasi (hari)</label><br>
        <input type="number" name="durasi_hari" min="1" required>
    </div>

    <div>
        <label>Gambar Trip</label><br>
        <input type="file" name="image" accept="image/*" required>
    </div>

    <br>
    <button type="submit">Simpan</button>
</form>
@endsection
