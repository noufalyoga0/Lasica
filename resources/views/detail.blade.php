<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung Sindoro - Detail Trip</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Tambahkan CSS global navbar -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- ==================== -->
<!--   NAVBAR BARU (HOME) -->
<!-- ==================== -->

<nav>
    <div class="nav-logo">
        <img src="{{ asset('images/logo.png') }}" alt="Lasica Logo">
    </div>

    <ul class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('trip') }}" class="active">Trip</a>
        <a href="{{ route('galeri') }}">Galeri</a>
        <a href="{{ route('testimoni') }}">Testimoni</a>
        <a href="{{ route('aboutus') }}">About Us</a>
    </ul>

    <div class="nav-actions" style="display: flex; align-items: center; gap: 15px;">

        @auth
            <img src="{{ asset('images/user.png') }}" 
                 alt="User" 
                 class="user-icon"
                 style="width: 35px; height: 35px; border-radius: 50%;">

            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" 
                        class="btn-logout"
                        style="
                            background:#e74c3c; 
                            color:white; 
                            padding:8px 16px; 
                            border:none; 
                            border-radius:5px; 
                            cursor:pointer;
                            font-family: 'Poppins', sans-serif;
                            font-size: 14px;
                            font-weight: 500;">
                    Logout
                </button>
            </form>
        @endauth

        @guest
            <button class="login-btn" onclick="window.location.href='{{ route('login') }}'">
                Login
            </button>
        @endguest

    </div>
</nav>


<!-- ========================= -->
<!--   KONTEN ASLI TIDAK DIUBAH -->
<!-- ========================= -->

<div class="image-section">
    <div class="main-image">
        <img src="{{ asset('images/sindoro.png') }}">
    </div>

    <div class="side-images">
        <img src="{{ asset('images/sindoro.png') }}">
        <img src="{{ asset('images/sindoro.png') }}">
        <img src="{{ asset('images/sindoro.png') }}">
        <img src="{{ asset('images/sindoro.png') }}">
    </div>
</div>

<div class="title-box">
    <span class="tag">Open Trip</span>
    <span class="trip-rating">⭐ 5.0 (1000 ulasan)</span>

    <h1>Gunung Sindoro via Kledung</h1>

    <div class="trip-divider"></div>

    <span class="schedule-title">📅 Jadwal Terdekat</span>

    <div class="schedule-list">
        <span class="schedule-pill">18 - 19 Okt 2025</span>
        <span class="schedule-pill">25 - 26 Okt 2025</span>
    </div>
</div>

<div class="info-grid">
    <div class="info-card">
        <img src="{{ asset('icon/location.png') }}">
        <p>Lokasi Kledung</p>
    </div>
    <div class="info-card">
        <img src="{{ asset('icon/meeting.png') }}">
        <p>Meeting Point Kledung</p>
    </div>
    <div class="info-card">
        <img src="{{ asset('icon/duration.png') }}">
        <p>Durasi 2D1N</p>
    </div>
    <div class="info-card">
        <img src="{{ asset('icon/people.png') }}">
        <p>Grup 12–15</p>
    </div>
</div>

<div class="package-box">
    <h2 class="pkg-title">Paket A (600.000)</h2>

    <div class="pkg-lists">
        <ul>
            <li>Transportasi PP</li>
            <li>Simaksi</li>
            <li>Asuransi</li>
        </ul>
    </div>
</div>

<div class="package-box">
    <h2 class="pkg-title">Paket B (920.000)</h2>

    <div class="pkg-lists">
        <ul>
            <li>Transport PP</li>
            <li>Simaksi</li>
            <li>Asuransi</li>
            <li>Guide</li>
            <li>Porter Tenda</li>
            <li>Porter Makan</li>
            <li>Tenda</li>
            <li>Kompor & Peralatan</li>
        </ul>

        <ul>
            <li>Rumah Singgah</li>
            <li>Makan sebelum pendakian</li>
            <li>Makan selama pendakian 4x</li>
            <li>Logistik</li>
            <li>P3K</li>
            <li>HT</li>
            <li>Alat Sholat</li>
            <li>E-Sertifikat</li>
        </ul>
    </div>
</div>

<div class="package-box">
    <h2 class="pkg-title">Harga Tidak Termasuk:</h2>

    <ul class="not-included">
        <li>Porter pribadi</li>
        <li>Perlengkapan pribadi</li>
        <li>Cemilan & air pribadi</li>
    </ul>
</div>

<div class="btn-wrapper">
    <a href="#" class="btn">Book Now</a>
</div>

<footer>
    © 2025 Lasica Trip Adventure — All Rights Reserved.
</footer>

</body>
</html>
