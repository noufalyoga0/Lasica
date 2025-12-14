<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Lasica Trip Adventure</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- NAVBAR (COPY DARI HOME) -->
<nav>
    <div class="nav-logo">
        <img src="{{ asset('images/logo.png') }}" alt="Lasica Logo">
    </div>

    <ul class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('trip') }}" >Trip</a>
        <a href="{{ route('galeri') }}">Galeri</a>
        <a href="{{ route('testimoni') }}">Testimoni</a>
        <a href="{{ route('aboutus') }}">About Us</a>
    </ul>

    <div class="nav-actions" style="display: flex; align-items: center; gap: 15px;">

       @auth
<a href="{{ route('profile') }}" class="nav-avatar">
    <img
        src="{{ auth()->user()->avatar
            ? (Str::startsWith(auth()->user()->avatar, 'http')
                ? auth()->user()->avatar
                : asset('storage/' . auth()->user()->avatar))
            : asset('images/default-avatar.png') }}"
        alt="Profile"
    >
</a>
@endauth



        @guest
            <button class="login-btn" onclick="window.location.href='{{ route('login') }}'">
                Login
            </button>
        @endguest

    </div>
</nav>


    <!-- Hero -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome To Lasica!</h1>
            <p>Teman Petualanganmu Menuju Alam Indonesia yang Luar Biasa</p>
        </div>
    </section>


    <!-- Trip Tersedia -->
    <section class="trips">
    <h2>Trip Tersedia</h2>

    <div class="trip-list">
        @foreach($trips as $trip)
<div class="trip-card">

    <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->nama_trip }}">

    {{-- LABEL --}}
    <span class="label">
        {{ $trip->tipe_trip === 'private' ? 'Private Trip' : 'Open Trip' }}
    </span>

    <div class="info">
        <div class="date-badge">
            📅 {{ \Carbon\Carbon::parse($trip->tanggal)->translatedFormat('d M Y') }}
        </div>

        <div class="duration-badge">
            ⏱ {{ $trip->durasi_hari }} Hari
        </div>

        <h3>{{ $trip->nama_trip }}</h3>

        <p>📍 {{ $trip->lokasi }}</p>

        {{-- ================= OPEN TRIP ================= --}}
        @if($trip->tipe_trip === 'open')
            <p>
                ⭐ {{ number_format($trip->rating, 1) }}
                ({{ number_format($trip->total_ulasan) }} Ulasan)
            </p>

            <p>🔥 {{ $trip->total_dipesan }}x dipesan</p>
            <p>👁 {{ $trip->views }}x dilihat</p>

            <p class="price">
                Rp {{ number_format($trip->harga, 0, ',', '.') }}
            </p>

            <a href="{{ route('trip.detail', $trip->id) }}" class="btn-detail">
                Detail >
            </a>
        @endif

        {{-- ================= PRIVATE TRIP ================= --}}
        @if($trip->tipe_trip === 'private')
            <p class="trip-desc">
                <strong>Min. pemesanan {{ $trip->min_pax }} pax</strong><br>
                Hubungi admin untuk pemesanan private trip.
            </p>

            <p class="price">
                Rp {{ number_format($trip->harga, 0, ',', '.') }}/pax
            </p>

            <a href="https://wa.me/6285731500985" class="btn-detail">
                Pesan
            </a>
        @endif
    </div>
</div>
@endforeach

    </div>
</section>

@if($seringDipesan->count())
<section class="trips">
    <h2>Sering Dipesan</h2>

    <div class="trip-list">
        @foreach($seringDipesan as $trip)
            @include('components.trip-card', ['trip' => $trip])
        @endforeach
    </div>
</section>
@endif


<section class="trips">
    <h2>Jadwal Trip Terdekat</h2>

    <div class="trip-list">
        @foreach($jadwalTerdekat as $trip)
            @include('components.trip-card', ['trip' => $trip])
        @endforeach
    </div>
</section>



    <!-- Gallery -->
    <section class="gallery">
        <h2>Gallery</h2>
        <div class="gallery-grid">
    @foreach ($galeris as $galeri)
        <div class="gallery-item">
            <img
                src="{{ asset('storage/' . $galeri->image) }}"
                alt="{{ $galeri->title }}"
            >
        </div>
    @endforeach
</div>

</section>

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
