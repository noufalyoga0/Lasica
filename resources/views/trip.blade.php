<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip - Lasica Trip Adventure</title>
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
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('trip') }}" class="active">Trip</a></li>
        <li><a href="#">Galeri</a></li>
        <li><a href="#">About Us</a></li>
    </ul>

    <div class="nav-actions" style="display: flex; align-items: center; gap: 15px;">

        @auth
            <img src="{{ asset('images/user.png') }}" 
                 alt="User" 
                 class="user-icon"
                 style="width: 35px; height: 35px; border-radius: 50%;">

            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" class="btn-logout"
                        style="background:#e74c3c; color:white; padding:8px 16px; border:none;
                               border-radius:5px; cursor:pointer; font-size:14px; font-weight:500;">
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

<!-- TITLE SECTION -->
<section class="trips" style="margin-top: 40px;">
    <h2>Semua Trip</h2>
</section>

<!-- LIST TRIP -->
<section class="trip-list">

    <!-- CARD 1 -->
    <div class="trip-card">
        <img src="{{ asset('images/sindoro.png') }}" alt="Trip 1">

        <span class="label">Open Trip</span>

        <!-- POSISI TANGGAL & HARI DISAMAKAN DENGAN HOME (DI DALAM .info) -->
        <div class="info">
            <div class="date-badge">📅 7 Okt 2025</div>
            <div class="duration-badge">⏱️ 2 Hari</div>

            <h3>Paket Camping Gunung</h3>
            <p>⭐ 5 (1.022 Ulasan)</p>
            <p>📍 Jawa Tengah</p>
            <p>🔥 1rb x dipesan</p>
            <p>👁️ 2rb x dilihat</p>

            <p class="price">Rp 600.000</p>
            <a href="#" class="btn-detail">Detail ></a>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="trip-card">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">

        <span class="label">Open Trip</span>

        <!-- POSISI TANGGAL & HARI DISAMAKAN DENGAN HOME -->
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

    <!-- CARD 2 -->
    <div class="trip-card">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">

        <span class="label">Open Trip</span>

        <!-- POSISI TANGGAL & HARI DISAMAKAN DENGAN HOME -->
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

    <!-- CARD 2 -->
    <div class="trip-card">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">

        <span class="label">Open Trip</span>

        <!-- POSISI TANGGAL & HARI DISAMAKAN DENGAN HOME -->
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

</section>

<br><br><br>

<!-- FOOTER (COPY DARI HOME) -->
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