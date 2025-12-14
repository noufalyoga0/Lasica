<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lasica Trip Adventure</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="nav-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Lasica Logo">
        </div>
<ul class="nav-links">
    <a href="{{ route('home') }}" class="active">Home</a>
    <a href="{{ route('trip') }}" class="active">Trip</a>
    <a href="{{ route('galeri') }}" class="active">Galeri</a>
    <a href="{{ route('testimoni') }}" class="active">Testimoni</a>
    <a href="{{ route('aboutus') }}" class="active">About Us</a>
</ul>
        @guest
    <button class="login-btn" onclick="window.location.href='{{ route('login') }}'">Login</button>
@endguest

@auth
    <a href="{{ route('profile') }}">
        <img
            src="{{ auth()->user()->avatar
                ? (Str::startsWith(auth()->user()->avatar, 'http')
                    ? auth()->user()->avatar
                    : asset('storage/' . auth()->user()->avatar))
                : asset('images/default-avatar.png') }}"
            style="width:35px;height:35px;border-radius:50%;object-fit:cover;"
        >
    </a>
@endauth
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome To Lasica!</h1>
            <p>Teman Petualanganmu Menuju Alam Indonesia yang Luar Biasa</p>
        </div>
    </section>

    <!-- Trip Section -->
    <section class="trips">
    <h2>Trip Yang Tersedia</h2>

    <div class="trip-list">
        @foreach($trips as $trip)
        <div class="trip-card">

            <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->nama_trip }}">

            <span class="label">Open Trip</span>

            <div class="info">
                <div class="date-badge">
                    📅 {{ \Carbon\Carbon::parse($trip->tanggal)->translatedFormat('d M Y') }}
                </div>

                <div class="duration-badge">
                    ⏱️ {{ $trip->durasi_hari }} Hari
                </div>

                <h3>{{ $trip->nama_trip }}</h3>

                <p>⭐ {{ number_format($trip->rating, 1) }} ({{ number_format($trip->total_ulasan) }} Ulasan)</p>
                <p>📍 {{ $trip->lokasi }}</p>
                <p>🔥 {{ number_format($trip->total_dipesan) }}x dipesan</p>
                <p>👁️ {{ number_format($trip->views) }}x dilihat</p>

                <p class="price">
                    Rp {{ number_format($trip->harga, 0, ',', '.') }}
                </p>

                <a href="{{ route('trip.detail', $trip->id) }}" class="btn-detail">
                    Detail >
                </a>
            </div>

        </div>
        @endforeach
    </div>
</section>


    <!-- Sering Dipesan -->
    <section class="trips">
    <h2>Sering Dipesan</h2>

    <div class="trip-list">
        @foreach($seringDipesan as $trip)
        <div class="trip-card">

            <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->nama_trip }}">

            <span class="label">Open Trip</span>

            <div class="info">
                <div class="date-badge">
                    📅 {{ \Carbon\Carbon::parse($trip->tanggal)->translatedFormat('d M Y') }}
                </div>

                <div class="duration-badge">
                    ⏱️ {{ $trip->durasi_hari }} Hari
                </div>

                <h3>{{ $trip->nama_trip }}</h3>

                <p>⭐ {{ number_format($trip->rating, 1) }} ({{ number_format($trip->total_ulasan) }} Ulasan)</p>
                <p>📍 {{ $trip->lokasi }}</p>
                <p>🔥 {{ number_format($trip->total_dipesan) }}x dipesan</p>
                <p>👁️ {{ number_format($trip->views) }}x dilihat</p>

                <p class="price">
                    Rp {{ number_format($trip->harga, 0, ',', '.') }}
                </p>

                <a href="{{ route('trip.detail', $trip->id) }}" class="btn-detail">
                    Detail >
                </a>
            </div>

        </div>
        @endforeach
    </div>
</section>


    <!-- Review Section -->
    <section class="review">
        <h2>Ulasan</h2>
        <div class="review-box">
            <img src="{{ asset('images/fotoreview.png') }}" alt="Anisa Rahmawati">
            <div class="review-info">
                <h3>Anisa Rahmawati</h3>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <small>📅 17 Mei 2024</small>
                <p>Tripnya sangat mantap sekali, saya puas!!!</p>
            </div>
        </div>
    </section>

    <!-- Why Section -->
    <section class="why">
        <h2>Mengapa harus Lasica?</h2>
        <div class="why-list">
            <div class="why-box" style="font-size: 70px;">
                ⏱️ <p>Hemat Waktu</p>
            </div>
            <div class="why-box" style="font-size: 70px;">
                💸 <p>Terjangkau</p>
            </div>
            <div class="why-box" style="font-size: 70px;">
                👍 <p>Mudah</p>
            </div>
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
