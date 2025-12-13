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
    <a href="{{ route('profile') }}">
        <img
            src="{{ Str::startsWith(auth()->user()->avatar, 'http')
                ? auth()->user()->avatar
                : asset('storage/' . auth()->user()->avatar) }}"
            class="user-icon"
            style="width:35px;height:35px;border-radius:50%;object-fit:cover;"
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
        <h2>Trip Yang Tersedia</h2>
        <div class="trip-list">
            <div class="trip-card">
                <img src="{{ asset('images/sindoro.png') }}" alt="Gunung Sindoro">
                <span class="label">Open Trip</span>
                <div class="info">
                    <div class="date-badge">📅 7 Okt 2025</div>
                    <div class="duration-badge">⏱️ 2 Hari</div>
                    <h3>Gunung Sindoro 2D1N</h3>
                    <p>⭐ 5 (1.022 Ulasan)</p>
                    <p>📍 Jawa Tengah</p>
                    <p>🔥 1rb x dipesan</p>
                    <p>👁️ 2rb x dilihat</p>
                    <p class="price">Rp 600.000</p>
                    <a href="{{ route('trip.detail', 1) }}" class="btn-detail">Detail ></a>
                </div>
            </div>

            <div class="trip-card">
                <img src="{{ asset('images/lawu.png') }}" alt="Gunung Lawu">
                <span class="label">Open Trip</span>
                <div class="info">
                    <div class="date-badge">📅 7 Okt 2025</div>
                    <div class="duration-badge">⏱️ 1 Hari</div>
                    <h3>Tektok Gunung Lawu</h3>
                    <p>⭐ 5 (2.100 Ulasan)</p>
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
                    <div class="date-badge">📅 7 Okt 2025</div>
                    <div class="duration-badge">⏱️ 2 Hari</div>
                    <h3>Gunung Merbabu</h3>
                    <p>⭐ 5 (5.341 Ulasan)</p>
                    <p>📍 Jawa Tengah</p>
                    <p>🔥 5rb x dipesan</p>
                    <p>👁️ 7rb x dilihat</p>
                    <p class="price">Rp 600.000</p>
                    <a href="#" class="btn-detail">Detail ></a>
                </div>
            </div>

            <div class="trip-card">
                <img src="{{ asset('images/sindoro2.png') }}" alt="Gunung Sindoro 2">
                <span class="label">Open Trip</span>
                <div class="info">
                    <div class="date-badge">📅 7 Okt 2025</div>
                    <div class="duration-badge">⏱️ 2 Hari</div>
                    <h3>Gunung Sindoro 2D1N</h3>
                    <p>⭐ 5 (1.022 Ulasan)</p>
                    <p>📍 Jawa Tengah</p>
                    <p>🔥 1rb x dipesan</p>
                    <p>👁️ 2rb x dilihat</p>
                    <p class="price">Rp 600.000</p>
                    <a href="#" class="btn-detail">Detail ></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Jadwal Trip Terdekat -->
    <section class="trips">
        <h2>Jadwal Trip Terdekat</h2>
        <div class="trip-list">
            <div class="trip-card">
                <img src="{{ asset('images/prau.png') }}" alt="Gunung Prau">
                <span class="label">Open Trip</span>
                <div class="info">
                    <div class="date-badge">📅 7 Okt 2025</div>
                    <div class="duration-badge">⏱️ 2 Hari</div>
                    <h3>Gunung Prau 2D1N</h3>
                    <p>⭐ 5 (1.000 Ulasan)</p>
                    <p>📍 Jawa Tengah</p>
                    <p>🔥 1rb x dipesan</p>
                    <p>👁️ 2rb x dilihat</p>
                    <p class="price">Rp 500.000</p>
                    <a href="#" class="btn-detail">Detail ></a>
                </div>
            </div>

            <div class="trip-card">
                <img src="{{ asset('images/sumbing.jpg') }}" alt="Gunung Sumbing">
                <span class="label">Open Trip</span>
                <div class="info">
                    <div class="date-badge">📅 9 Okt 2025</div>
                    <div class="duration-badge">⏱️ 2 Hari</div>
                    <h3>Gunung Sumbing</h3>
                    <p>⭐ 5 (900 Ulasan)</p>
                    <p>📍 Jawa Tengah</p>
                    <p>🔥 1rb x dipesan</p>
                    <p>👁️ 1.5rb x dilihat</p>
                    <p class="price">Rp 550.000</p>
                    <a href="#" class="btn-detail">Detail ></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="gallery">
        <h2>Gallery</h2>
        <div class="gallery-list">
            <img src="{{ asset('images/gallery1.png') }}" alt="Gallery 1">
            <img src="{{ asset('images/gallery2.png') }}" alt="Gallery 2">
            <img src="{{ asset('images/gallery3.png') }}" alt="Gallery 3">
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
