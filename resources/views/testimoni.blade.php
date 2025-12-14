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

        /* ====== CARD TESTIMONI ====== */
        .review-card {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            background: #00000;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .review-card img {
            width: 150px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }

        .review-content {
            flex: 1;
            text-align: left;
        }

        .review-name {
            font-weight: 600;
            font-size: 17px;
        }

        .review-rating {
            color: #f1c40f;
            margin: 3px 0;
        }

        .review-date {
            font-size: 12px;
            color: gray;
            margin-bottom: 5px;
        }

        .review-text {
            font-size: 13px;
            color: #333;
        }

        .delete-btn {
            background: #e74c3c;
            color: white;
            padding: 7px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background: #c0392b;
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

<div class="review-wrapper">

    <h2>Ulasan</h2>
{{-- === DATA DINAMIS DARI DATABASE === --}}
@php $hasData = false; @endphp

@foreach($reviews as $review)
    @php $hasData = true; @endphp
    <div class="review-card">
        <img
    src="{{ Str::startsWith($review->user->avatar, 'http')
        ? $review->user->avatar
        : asset('storage/' . $review->user->avatar) }}"
    alt="Foto User"
>

<div class="review-content">
    <div class="review-name">
        {{ $review->user->username }}
    </div>


            <div class="review-rating">
                {{ str_repeat('★', $review->rating) }}
            </div>

            <div class="review-date">
                {{ $review->created_at->format('d M Y') }}
            </div>

            <div class="review-text">
                {{ $review->ulasan }}
            </div>
        </div>
    </div>
@endforeach

@if(!$hasData)
    <p style="text-align:center; color:gray;">
        Belum ada ulasan.
    </p>
@endif
{{-- === END DATA DINAMIS === --}}

</div>

<!-- TOMBOL TAMBAH -->
<div class="add-btn-wrapper">
    <a href="{{ route('testimoni.create') }}" class="add-btn">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"
             stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
        Tambah Ulasan
    </a>
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
