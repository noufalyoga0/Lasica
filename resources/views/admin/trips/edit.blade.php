@extends('admin.layouts.app')

@section('title', 'Edit Trip')

@section('content')
<h2>Edit Trip</h2>

<form method="POST" action="{{ route('admin.trips.update', $trip) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Trip</label><br>
        <input type="text" name="nama_trip" value="{{ old('nama_trip', $trip->nama_trip) }}" required>
    </div>

    <div>
        <label>Lokasi</label><br>
        <input type="text" name="lokasi" value="{{ old('lokasi', $trip->lokasi) }}" required>
    </div>

    <div>
        <label>Harga</label><br>
        <input type="number" name="harga" value="{{ old('harga', $trip->harga) }}" required>
    </div>

    <div>
        <label>Tanggal</label><br>
        <input type="date" name="tanggal" value="{{ old('tanggal', $trip->tanggal) }}" required>
    </div>

    <div>
        <label>Durasi (hari)</label><br>
        <input type="number" name="durasi_hari" value="{{ old('durasi_hari', $trip->durasi_hari) }}" required>
    </div>

    <div>
        <label>Gambar Baru (opsional)</label><br>
        <input type="file" name="image">
        <br>
        @if($trip->image)
            <img src="{{ asset('storage/'.$trip->image) }}" width="120">
        @endif
    </div>

    <br>
    <button type="submit">Update</button>
</form>
@endsection
