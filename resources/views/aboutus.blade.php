<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Lasica Trip Adventure</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* HERO */
        .about-hero {
            position: relative;
            width: 100%;
            height: 320px;
            overflow: hidden;
            border-radius: 20px;
            margin: 100px auto 40px;
            max-width: 95%;
        }
        .about-hero-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(70%);
        }
        .about-hero-text {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }
        .about-hero-text h1 {
            font-size: 38px;
            margin-bottom: 5px;
        }
        .about-hero-text p {
            font-size: 18px;
            opacity: 0.9;
        }

        /* ABOUT SECTION */
        .about-section {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }
        .section-title {
            text-align: left;
            font-size: 28px;
            margin-bottom: 25px;
        }
        .about-container {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
        }
        .about-left {
            flex: 1.2;
            font-size: 17px;
            line-height: 1.7;
        }
        .about-right img {
            width: 320px;
            border-radius: 12px;
        }

        /* VISI MISI */
        .visimisi-section {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }
        .visimisi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .visimisi-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            font-size: 16px;
            line-height: 1.6;
        }
        .visimisi-card h3 {
            margin-bottom: 10px;
            font-size: 22px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav>
    <div class="nav-logo">
        <img src="{{ asset('images/logo.png') }}" alt="Lasica Logo">
    </div>

    <ul class="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('trip') }}">Trip</a></li>
        <li><a href="{{ route('galeri') }}">Galeri</a></li>
        <li><a href="{{ route('aboutus') }}" class="active">About Us</a></li>
    </ul>

    <div class="nav-actions" style="display: flex; align-items: center; gap: 15px;">
        @auth
            <img src="{{ asset('images/user.png') }}" class="user-icon" alt="User" style="width: 35px; border-radius: 50%;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout" style="background:#e74c3c; color:white; padding:8px 16px; border:none; border-radius:5px; cursor:pointer;">Logout</button>
            </form>
        @endauth
        @guest
            <button class="login-btn" onclick="window.location.href='{{ route('login') }}'">Login</button>
        @endguest
    </div>
</nav>


<!-- HERO -->
<div class="about-hero">
    <img src="{{ asset('images/hero-bg.png') }}" class="about-hero-img" alt="About Image">
    <div class="about-hero-text">
        <h1>Tentang Lasica</h1>
        <p>"Nikmati Keindahan Alam Indonesia Tanpa Repot"</p>
    </div>
</div>


<!-- ABOUT SECTION -->
<section class="about-section">
    <h2 class="section-title">Tentang Kami</h2>

    <div class="about-container">
        <div class="about-left">
            <p>Lasica adalah platform digital yang dirancang untuk memfasilitasi hubungan antara pendaki pemula dan penyedia layanan open trip menjadi mudah dan efisien.</p>
            <p>Konsep utama dari website ini adalah untuk menyediakan daftar katalog paket pendakian lengkap yang menampilkan lokasi, harga, fasilitas, jadwal, rating, dan informasi penting lainnya.</p>
        </div>

        <div class="about-right">
            <img src="{{ asset('images/gallery1.png') }}" alt="About Image">
        </div>
    </div>
</section>


<!-- VISI MISI -->
<section class="visimisi-section">
    <h2 class="section-title">Visi & Misi</h2>

    <div class="visimisi-grid">
        <div class="visimisi-card">
            <h3>Visi</h3>
            <p>Menjadi platform petualangan paling terpercaya dan menyenangkan di Indonesia.</p>
        </div>

        <div class="visimisi-card"><p>🌄 Menghadirkan pengalaman mendaki yang aman dan seru.</p></div>
        <div class="visimisi-card"><p>🔥 Membantu pendaki menemukan pilihan terbaik, nyaman, dan terjangkau.</p></div>
        <div class="visimisi-card"><p>🧭 Mendukung wisata berkelanjutan serta menjaga kelestarian alam.</p></div>
    </div>
</section>


<!-- FOOTER -->
<footer>
    <div class="footer-left">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <div>
            <strong>Lasica Trip Adventure</strong><br>
            Bogor, Jawa Barat, Indonesia
        </div>
    </div>
    <div class="footer-right">🔗 Instagram | 🎵 TikTok | 💬 WhatsApp</div>
</footer>

</body>
</html>
