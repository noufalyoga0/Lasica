<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Lasica Trip Adventure</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .gallery-container {
            width: 90%;
            margin: auto;
            text-align: center;
            margin-top: 40px;
        }

        .gallery-text {
            max-width: 800px;
            margin: 0 auto 40px auto;
            font-size: 15px;
            color: #444;
            line-height: 1.6;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 60px;
        }

        .gallery-item img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
            transition: transform .3s;
        }

        .gallery-item img:hover {
            transform: scale(1.03);
        }
    </style>

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

        @for ($i = 1; $i <= 1; $i++)
            <div class="gallery-item">
                <img src="{{ asset('images/merbabu.png') }}" alt="Foto Galeri">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('images/lawu.png') }}" alt="Foto Galeri">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('images/sumbing.jpg') }}" alt="Foto Galeri">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('images/sindoro2.png') }}" alt="Foto Galeri">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('images/sumbing.jpg') }}" alt="Foto Galeri">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('images/gallery1.png') }}" alt="Foto Galeri">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('images/gallery2.png') }}" alt="Foto Galeri">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('images/gallery3.png') }}" alt="Foto Galeri">
            </div>
        @endfor

    </div>
</div>

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
