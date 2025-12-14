<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Trip</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="trip-page">
<div class="container">
    <h2>Trip</h2>

    <form>
        <div class="form-group">
            <label>Nama Trip</label>
            <input type="text" name="nama_trip">
        </div>

        <div class="form-group">
            <label>Tanggal Trip</label>
            <input type="date" name="tanggal_trip">
        </div>

        <div class="form-group">
            <label>Jenis Trip</label>
            <input type="text" name="jenis_trip">
        </div>

        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="lokasi">
        </div>

        <div class="form-group">
            <label>Meeting Point</label>
            <input type="text" name="meeting_point">
        </div>

        <div class="form-group">
            <label>Durasi</label>
            <input type="text" name="durasi">
        </div>

        <div class="form-group">
            <label>Foto lampiran</label>
            <input type="file" name="foto">
        </div>

        <div class="form-group">
            <label>Detail paket</label>
            <textarea name="detail_paket"></textarea>
        </div>

        <div class="form-action">
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>

</body>
</html>
