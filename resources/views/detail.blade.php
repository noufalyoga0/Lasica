<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung Sindoro - Detail Trip</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #eefaff;
        }

        header {
            width: 100%;
            background: #00bfff;
            padding: 15px 45px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav {
            display: flex;
            gap: 35px;
        }

        header nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .profile-icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
        }

        .image-section {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            display: flex;
            gap: 20px;
        }

        .main-image {
            flex: 2;
        }

        .main-image img {
            width: 100%;
            height: 360px;
            object-fit: cover;
            border-radius: 15px;
            border: 4px solid #00bfff;
        }

        .side-images {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .side-images img {
            width: 100%;
            height: 170px;
            border-radius: 12px;
            object-fit: cover;
        }

        /* ===== TRIP HEADER STYLE (PERBAIKAN UTAMA) ===== */
        .trip-header-box {
            width: 90%;
            max-width: 1200px;
            margin: 25px auto;
            background: #e9f7fc;
            padding: 22px;
            border-radius: 18px;
        }

        .trip-badge {
            background: #ffe590;
            padding: 6px 14px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
        }

        .trip-rating {
            margin-left: 10px;
            font-size: 14px;
            color: #333;
            font-weight: 500;
        }

        .trip-header-box h2 {
            margin-top: 10px;
            font-size: 27px;
            font-weight: 700;
        }

        .trip-divider {
            width: 100%;
            height: 1.5px;
            background: #c5e7f3;
            margin: 12px 0;
        }

        .schedule-title {
            font-weight: 600;
        }

        .schedule-list {
            display: flex;
            gap: 15px;
            margin-top: 8px;
        }

        .schedule-pill {
            background: #fff;
            padding: 6px 14px;
            font-size: 14px;
            border-radius: 10px;
            border: 1px solid #cceffa;
            font-weight: 600;
        }

        .title-box {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 22px;
            border-radius: 18px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .tag {
            background: #ffe590;
            padding: 6px 12px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
        }

        .title-box h1 {
            margin-top: 10px;
            font-size: 26px;
            font-weight: 700;
        }

        .trip-info {
            display: flex;
            gap: 25px;
            margin-top: 10px;
            color: #444;
            font-size: 14px;
        }

        .info-grid {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .info-card {
            background: white;
            text-align: center;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.07);
        }

        .info-card img {
            width: 45px;
            margin-bottom: 10px;
        }

        .package-box {
            width: 90%;
            max-width: 1200px;
            margin: 25px auto;
            background: #fff;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .pkg-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .pkg-lists {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px 40px;
        }

        ul {
            list-style: none;
        }

        ul li {
            margin: 5px 0;
        }

        ul li::before {
            content: "✔ ";
            color: green;
            margin-right: 6px;
        }

        .not-included li::before {
            content: "✖ ";
            color: red;
        }

        .btn-wrapper {
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
            text-align: right;
        }

        .btn {
            background: #00bfff;
            color: white;
            padding: 13px 38px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            display: inline-block;
        }

        .btn:hover {
            background: #009ace;
        }

        footer {
            width: 100%;
            background: #00bfff;
            padding: 20px;
            text-align: center;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>


    <!-- HEADER -->
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

    <!-- IMAGE SECTION -->
    <div class="image-section">
        <div class="main-image">
            <img src="{{ asset('images/sindoro.png') }}">
        </div>

        <div class="side-images">
            <img src="{{ asset('images/sindoro.png') }}">
            <img src="{{ asset('images/sindoro.png') }}">
            <img src="{{ asset('images/sindoro.png') }}">
            <img src="{{ asset('images/sindoro.png') }}">
        </div>
    </div>

    <!-- TRIP HEADER -->
    <div class="title-box">
    <span class="tag">Open Trip</span>
    <span class="trip-rating">⭐ 5.0 (1000 ulasan)</span>

    <h1>Gunung Sindoro via Kledung</h1>

    <div class="trip-divider"></div>

    <div class="schedule-box">
        <span class="schedule-title">📅 Jadwal Terdekat</span>

        <div class="schedule-list">
            <span class="schedule-pill">18 - 19 Okt 2025</span>
            <span class="schedule-pill">25 - 26 Okt 2025</span>
        </div>
    </div>
</div>

    <!-- 4 ICON GRID -->
    <div class="info-grid">
        <div class="info-card">
            <img src="{{ asset('icon/location.png') }}">
            <p>Lokasi Kledung</p>
        </div>
        <div class="info-card">
            <img src="{{ asset('icon/meeting.png') }}">
            <p>Meeting Point Kledung</p>
        </div>
        <div class="info-card">
            <img src="{{ asset('icon/duration.png') }}">
            <p>Durasi 2D1N</p>
        </div>
        <div class="info-card">
            <img src="{{ asset('icon/people.png') }}">
            <p>Grup 12–15</p>
        </div>
    </div>

    <!-- PAKET A -->
    <div class="package-box">
        <h2 class="pkg-title">Paket A (600.000)</h2>

        <div class="pkg-lists">
            <ul>
                <li>Transportasi PP</li>
                <li>Simaksi</li>
                <li>Asuransi</li>
            </ul>
        </div>
    </div>

    <!-- PAKET B -->
    <div class="package-box">
        <h2 class="pkg-title">Paket B (920.000)</h2>

        <div class="pkg-lists">
            <ul>
                <li>Transport PP</li>
                <li>Simaksi</li>
                <li>Asuransi</li>
                <li>Guide</li>
                <li>Porter Tenda</li>
                <li>Porter Makan</li>
                <li>Tenda</li>
                <li>Kompor & Peralatan</li>
            </ul>

            <ul>
                <li>Rumah Singgah</li>
                <li>Makan sebelum pendakian</li>
                <li>Makan selama pendakian 4x</li>
                <li>Logistik</li>
                <li>P3K</li>
                <li>HT</li>
                <li>Alat Sholat</li>
                <li>E-Sertifikat</li>
            </ul>
        </div>
    </div>

    <!-- HARGA TIDAK TERMASUK -->
    <div class="package-box">
        <h2 class="pkg-title">Harga Tidak Termasuk:</h2>

        <ul class="not-included">
            <li>Porter pribadi</li>
            <li>Perlengkapan pribadi</li>
            <li>Cemilan & air pribadi</li>
        </ul>
    </div>

    <!-- BUTTON -->
    <div class="btn-wrapper">
        <a href="#" class="btn">Book Now</a>
    </div>

    <footer>
        © 2025 Lasica Trip Adventure — All Rights Reserved.
    </footer>

</body>
</html>
