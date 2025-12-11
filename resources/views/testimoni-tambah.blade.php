<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni - Lasica Trip Adventure</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="ttps://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        /* ====== CONTAINER UTAMA ====== */
        .review-wrapper {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
        }

        .review-wrapper h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 22px;
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
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('trip') }}">Trip</a></li>
        <li><a href="{{ route('galeri') }}" class="active">Galeri</a></li>
        <li><a href="{{ route('testimoni') }}" class="active">Testimoni</a></li>
        <li><a href="{{ route('aboutus') }}">About Us</a></li>
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

<div class="review-wrapper">

    <h2>Ulasan</h2>

    
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
