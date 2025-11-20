<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Lasica Trip Adventure</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- NAVBAR (SAMA DENGAN HALAMAN LAIN) -->
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
                <button type="submit" class="btn-logout" style="background:#e74c3c; color:white; padding:8px 16px; border:none; border-radius:5px; cursor:pointer;">
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


<!-- ================= HERO SECTION ================= -->
<div class="about-hero">
    <img src="{{ asset('images/about/hero.jpg') }}" class="about-hero-img" alt="About Image">

    <div class="about-hero-text">
        <h1>TENTANG L Y</h1>
        <p>"Nikmati Keindahan Alam Indonesia Tanpa Repot"</p>
    </div>
</div>


<!-- ================= TENTANG KAMI ================= -->
<section class="about-section">
    <h2 class="section-title">TENTANG KAMI</h2>

    <div class="about-container">
        <div class="about-left">
            <p>
                Lasica adalah platform digital yang dirancang untuk memfasilitasi hubungan antara pendaki pemula 
                dan penyedia layanan open trip dengan lebih mudah dan efisien.
            </p>

            <p>
                Konsep utama dari website ini adalah menyediakan daftar katalog paket pendakian lengkap 
                yang menampilkan lokasi, harga, fasilitas, jadwal, rating, dan informasi penting lainnya.
            </p>
        </div>

        <div class="about-right">
            <img src="{{ asset('images/about/about1.jpg') }}" alt="About Image">
        </div>
    </div>
</section>


<!-- ================= VISI & MISI ================= -->
<section class="visimisi-section">
    <h2 class="section-title">VISI & MISI</h2>

    <div class="visimisi-grid">

        <div class="visimisi-card">
            <h3>Visi</h3>
            <p>Menjadi platform open trip paling terpercaya di Indonesia.</p>
        </div>

        <div class="visimisi-card">
            <p>🌄 Menghadirkan pengalaman pendakian yang aman dan seru.</p>
        </div>

        <div class="visimisi-card">
            <p>🔥 Membantu pendaki menemukan paket terbaik sesuai kebutuhan.</p>
        </div>

        <div class="visimisi-card">
            <p>🧭 Mendukung wisata berkelanjutan dan menjaga kelestarian alam.</p>
        </div>

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
    <div class="footer-right">
        🔗 Instagram | 🎵 TikTok | 💬 WhatsApp
    </div>
</footer>

</body>
</html>
