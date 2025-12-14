<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Lasica Trip Adventure</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


</head>
<body>

<!-- NAVBAR (SAMA DENGAN HOME & TRIP) -->
<nav>
    <div class="nav-logo">
        <img src="{{ asset('images/logo.png') }}" alt="Lasica Logo">
    </div>

    <ul class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('trip') }}">Trip</a>
        <a href="{{ route('galeri') }}" class="active">Galeri</a>
        <a href="{{ route('testimoni') }}" class="active">Testimoni</a>
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

<!-- CONTENT -->
<div class="gallery-container">

    <h2 style="margin-bottom: 10px;">Galeri Foto Lasica</h2>

    <p class="gallery-text">
        Kami percaya dokumentasi merupakan hal yang mahal untuk dikenang atas perjalanan
        yang memiliki cerita tersendiri. Lasica membantu mengabadikan foto maupun video untuk
        mengenang segala cerita perjalanan di berbagai tempat. Booking segera perjalanan Anda bersama kami,
        dan jadilah bagian dalam perjalanan kami.
    </p>

    <!-- Grid Foto -->
    <div class="gallery-grid">

    @forelse ($galeris as $galeri)
    <div class="gallery-item">
        <img
            src="{{ asset('storage/' . $galeri->image) }}"
            alt="{{ $galeri->title ?? 'Foto Galeri' }}"
        >

        <h4 style="margin-top:10px;">
            {{ $galeri->title }}
        </h4>

        <p style="font-size:14px;color:#555;">
            {{ $galeri->description }}
        </p>
    </div>
@empty

        <p style="grid-column: 1 / -1; text-align:center;">
            Belum ada foto di galeri.
        </p>
    @endforelse

</div>
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
