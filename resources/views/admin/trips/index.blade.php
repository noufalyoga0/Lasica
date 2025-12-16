@extends('admin.layouts.app')

@section('title', 'Manage Trips')

@section('content')
<h1>Manage Trips</h1>

<a href="{{ route('admin.trips.create') }}">
    + Tambah Trip
</a>
<br><br>

@if(session('success'))
    <div style="color:green; margin-bottom:10px">
        {{ session('success') }}
    </div>
@endif

<table class="admin-table">
    <thead>
        <thead>
<tr>
    <th>No</th>
    <th>Nama Trip</th>
    <th>Lokasi</th>
    <th>Harga</th>
    <th>Tanggal</th>
    <th>Durasi</th>
    <th>Gambar</th>
    <th>Aksi</th>
</tr>
</thead>

 <tbody>
@foreach ($trips as $trip)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $trip->nama_trip }}</td>
        <td>{{ $trip->lokasi }}</td>
        <td>Rp {{ number_format($trip->harga) }}</td>
        <td>{{ $trip->tanggal }}</td>
        <td>{{ $trip->durasi_hari }} hari</td>
        <td>
            @if ($trip->image)
                <img src="{{ asset('storage/' . $trip->image) }}" width="80">
            @else
                -
            @endif
        </td>
        <td>
    <a href="{{ route('admin.trips.edit', $trip) }}">Edit</a>

    <form action="{{ route('admin.trips.destroy', $trip) }}"
          method="POST"
          style="display:inline"
          onsubmit="return confirm('Yakin hapus trip ini?')">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
</td>
    </tr>
@endforeach
</tbody>
</table>
@endsection
