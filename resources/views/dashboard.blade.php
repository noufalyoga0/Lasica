<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lasica Trip Adventure</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="hhttps://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="nav-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Lasica Logo">
        </div>
<ul class="nav-links">
    <li><a href="{{ route('home') }}" class="active">Home</a></li>
    <li><a href="{{ route('trip') }}" class="active">Trip</a></li>
    <li><a href="{{ route('galeri') }}" class="active">Galeri</a></li>
    <li><a href="{{ route('testimoni') }}" class="active">Testimoni</a></li>
    <li><a href="{{ route('aboutus') }}" class="active">About Us</a></li>
</ul>
        @guest
    <button class="login-btn" onclick="window.location.href='{{ route('login') }}'">Login</button>
@endguest

@auth
    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button type="submit" class="login-btn">Logout</button>
    </form>
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

            <div class="trip-card">
                <img src="{{ asset('images/sindoro.png') }}" alt="Gunung Sindoro">
                <span class="label">Open Trip</span>
                <div class="info">
                    <div class="date-badge">📅 7 Oct 2025</div>
                    <div class="duration-badge">⏱️ 2 Hari</div>
                    <h3>Gunung Sindoro 2D1N</h3>
                    <p>⭐ 5 (1022 Ulasan)</p>
                    <p>📍 Jawa Tengah</p>
                    <p>🔥 1rb x dipesan</p>
                    <p>👁️ 2rb x dilihat</p>
                    <p class="price">Rp 600.000</p>
                    <a href="#" class="btn-detail">Detail ></a>
                </div>
            </div>

            <div class="trip-card">
                <img src="{{ asset('images/lawu.png') }}" alt="Gunung Lawu">
                <span class="label">Open Trip</span>
                <div class="info">
                    <div class="date-badge">📅 7 Oct 2025</div>
                    <div class="duration-badge">⏱️ 1 Hari</div>
                    <h3>Tektok Gunung Lawu</h3>
                    <p>⭐ 5 (2100 Ulasan)</p>
                    <p>📍 Jawa Tengah</p>
                    <p>🔥 2rb x dipesan</p>
                    <p>👁️ 4rb x dilihat</p>
                    <p class="price">Rp 250.000</p>
                    <a href="#" class="btn-detail">Detail ></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sering Dipesan -->
    <section class="trips">
        <h2>Sering Dipesan</h2>
        <div class="trip-list">

            <div class="trip-card">
                <img src="{{ asset('images/merbabu.png') }}" alt="Gunung Merbabu">
                <span class="label">Open Trip</span>
                <div class="info">
                    <div class="date-badge">📅 7 Oct 2025</div>
                    <div class="duration-badge">⏱️ 2 Hari</div>
                    <h3>Gunung Merbabu</h3>
                    <p>⭐ 5 (5341 Ulasan)</p>
                    <p>📍 Jawa Tengah</p>
                    <p>🔥 5rb x dipesan</p>
                    <p>👁️ 7rb x dilihat</p>
                    <p class="price">Rp 600.000</p>
                    <a href="#" class="btn-detail">Detail ></a>
                </div>
            </div>

            <div class="trip-card">
                <img src="{{ asset('images/sindoro2.png') }}" alt="Gunung Sindoro">
                <span class="label">Open Trip</span>
                <div class="info">
                    <div class="date-badge">📅 7 Oct 2025</div>
                    <div class="duration-badge">⏱️ 2 Hari</div>
                    <h3>Gunung Sindoro 2D1N</h3>
                    <p>⭐ 5 (1022 Ulasan)</p>
                    <p>📍 Jawa Tengah</p>
                    <p>🔥 1rb x dipesan</p>
                    <p>👁️ 2rb x dilihat</p>
                    <p class="price">Rp 600.000</p>
                    <a href="#" class="btn-detail">Detail ></a>
                </div>
            </div>
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
