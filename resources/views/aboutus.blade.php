<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Lasica Trip Adventure</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* HERO */
        .about-hero {
            position: relative;
            width: 95%;
            height: 320px;
            overflow: hidden;
            border-radius: 20px;
            margin: 20px auto 40px;
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

        .about-left p {
        text-align: justify;
        margin-bottom: 16px;
        }

        .about-right img {
            width: 320px;
            height: 300px;     /* atur tinggi untuk efek crop */
            object-fit: cover;
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

        .visimisi-card:first-child {
            grid-column: 1 / -1;
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
        <li><a href="{{ route('testimoni') }}" class="active">Testimoni</a></li>
        <li><a href="{{ route('aboutus') }}" class="active">About Us</a></li>
    </ul>

    <div class="nav-actions" style="display: flex; align-items: center; gap: 15px;">
        @auth
            <img src="{{ asset('images/user.png') }}" alt="User" class="user-icon"
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
            <p>Lasica adalah platform digital yang dirancang untuk membuat hubungan antara pendaki potensial dan penyedia layanan open trip lebih mudah dan sistematis.</p>
            <p>Konsep utama dari situs web ini adalah untuk menyediakan sistem informasi perjalanan pendakian yang lengkap, mulai dari katalog paket pendakian yang menampilkan tujuan, tanggal, fasilitas, harga, rating, dan foto pendukung untuk membantu pengguna memilih layanan yang mereka butuhkan. </p>
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
            <p>Menjadi platform perjalanan petualangan paling terpercaya dan menyenangkan di Indonesia.</p>
        </div>

        <div class="visimisi-card">
            <p>🌄 Menghadirkan pengalaman mendaki yang aman dan seru.</p>
        </div>

        <div class="visimisi-card">
            <p>🔥 Memberikan pelayanan cepat, nyaman, dan terjangkau.</p>
        </div>

        <div class="visimisi-card">
            <p>🧭 Mendukung wisata berkelanjutan serta menjaga kelestarian alam.</p>
        </div>

    </div>
</section>


<!-- FOOTER -->
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
