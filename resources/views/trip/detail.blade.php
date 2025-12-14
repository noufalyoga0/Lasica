<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $trip->nama_trip }} - Detail Trip</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

{{-- ================= NAVBAR ================= --}}
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

    <div class="nav-actions" style="display:flex;align-items:center;gap:15px;">
        @auth
            <a href="{{ route('profile') }}" class="nav-avatar">
                <img src="{{ auth()->user()->avatar
                    ? asset('storage/' . auth()->user()->avatar)
                    : asset('images/default-avatar.png') }}">
            </a>
        @endauth

        @guest
            <button class="login-btn" onclick="window.location.href='{{ route('login') }}'">
                Login
            </button>
        @endguest
    </div>
</nav>

{{-- ================= IMAGE ================= --}}
<div class="image-section">
    <div class="main-image">
        <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->nama_trip }}">
    </div>

    <div class="side-images">
        @for ($i = 0; $i < 4; $i++)
            <img src="{{ asset('storage/' . $trip->image) }}">
        @endfor
    </div>
</div>

{{-- ================= TITLE ================= --}}
<div class="title-box">
    <span class="tag">{{ ucfirst($trip->jenis_trip ?? 'Open Trip') }}</span>

    <span class="trip-rating">
        ⭐ {{ number_format($trip->rating, 1) }}
        ({{ $trip->total_ulasan }} ulasan)
    </span>

    <h1>{{ $trip->nama_trip }}</h1>

    <div class="trip-divider"></div>

    <span class="schedule-title">📅 Jadwal Terdekat</span>
    <div class="schedule-list">
        <span class="schedule-pill">
            {{ \Carbon\Carbon::parse($trip->tanggal)->translatedFormat('d M Y') }}
        </span>
    </div>
</div>

{{-- ================= INFO GRID ================= --}}
<div class="info-grid">
    <div class="info-card">
        <img src="{{ asset('icon/location.png') }}">
        <p>{{ $trip->lokasi }}</p>
    </div>

    <div class="info-card">
        <img src="{{ asset('icon/meeting.png') }}">
        <p>{{ $trip->meeting_point ?? 'Meeting Point' }}</p>
    </div>

    <div class="info-card">
        <img src="{{ asset('icon/duration.png') }}">
        <p>Durasi {{ $trip->durasi_hari }} Hari</p>
    </div>

    <div class="info-card">
        <img src="{{ asset('icon/people.png') }}">
        <p>Grup {{ $trip->kuota_min }}–{{ $trip->kuota_max }}</p>
    </div>
</div>


{{-- ===================== --}}
{{-- PAKET PERJALANAN --}}
{{-- ===================== --}}

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


{{-- ================= BOOK ================= --}}
<div class="btn-wrapper">
    @auth
        <a href="{{ route('order.create', $trip->id) }}" class="btn">
    Book Now
</a>
    @endauth

    @guest
        <a href="{{ route('login') }}" class="btn">
            Login untuk Booking
        </a>
    @endguest
</div>

<!-- Footer -->
    <footer>
        <div class="footer-left">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <div>
                <strong>Lasica Trip Adventure</strong><br>
                Bogor, Jawa Barat, ID
            </div>
        </div>
        <div class="footer-right">
            🔗 Instagram | 🎵 TikTok | 💬 WhatsApp
        </div>
    </footer>

</body>
</html>

