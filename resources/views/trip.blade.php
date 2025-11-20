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
        <li><a href="{{ route('galeri') }}">Galeri</a></li>
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

<!-- TITLE SECTION -->
<section class="trips" style="margin-top: 40px;">
    <h2>Semua Trip</h2>
</section>

<!-- FILTER CARD -->
<div class="trip-filter">
    <button class="filter-btn active" onclick="setFilter('open')">Open Trip</button>
    <button class="filter-btn" onclick="setFilter('private')">Private Trip</button>
</div>

<!-- LIST TRIP -->
<section class="trip-list">

    <!-- CARD 1 (OPEN TRIP) -->
    <div class="trip-card category-open">
        <img src="{{ asset('images/sindoro.png') }}" alt="Trip 1">
        <span class="label">Open Trip</span>

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

    <!-- CARD 2 (OPEN TRIP) -->
    <div class="trip-card category-open">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">
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

    <!-- CARD 3 (OPEN TRIP) -->
    <div class="trip-card category-open">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">
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

    <!-- CARD 4 (OPEN TRIP) -->
    <div class="trip-card category-open">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">
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

    <!-- CARD 4 (OPEN TRIP) -->
    <div class="trip-card category-open">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">
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

    <!-- CARD 4 (OPEN TRIP) -->
    <div class="trip-card category-open">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">
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

    <!-- CARD 4 (OPEN TRIP) -->
    <div class="trip-card category-open">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">
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

    <!-- CARD 4 (OPEN TRIP) -->
    <div class="trip-card category-open">
        <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">
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

    <!-- PRIVATE TRIP CARD 1 -->
<div class="trip-card category-private" style="display:none;">
    <img src="{{ asset('images/sindoro.png') }}" alt="Trip 1">
    <span class="label" style="background:#ff9800;">Private Trip</span>

    <div class="info">
        <div class="date-badge">📅 9 Okt 2025</div>
        <div class="duration-badge">⏱️ 2 Hari</div>

        <h3>Gunung Sindoro 2DIN</h3>
        <p>📍 Desa Kledung</p>
        <p><strong>Min. pemesanan 5 pax</strong><br>Untuk pemesanan dan detail trip, silakan hubungi nomor yang tertera.</p>

        <p class="price">Rp 1.000.000/pax</p>
        <a href="#" class="btn-detail">Pesan ></a>
    </div>
</div>

<!-- PRIVATE TRIP CARD 2 -->
<div class="trip-card category-private" style="display:none;">
    <img src="{{ asset('images/lawu.png') }}" alt="Trip 2">
    <span class="label" style="background:#ff9800;">Private Trip</span>

    <div class="info">
        <div class="date-badge">📅 10 Okt 2025</div>
        <div class="duration-badge">⏱️ 1 Hari</div>

        <h3>Tektok Gunung Lawu</h3>
        <p>📍 Jawa Tengah</p>
        <p><strong>Min. pemesanan 7 pax</strong><br>Untuk pemesanan dan detail trip silakan hubungi nomor yang tertera.</p>

        <p class="price">Rp 350.000/pax</p>
        <a href="#" class="btn-detail">Pesan ></a>
    </div>
</div>



<!-- PRIVATE TRIP CARD 3 -->
<div class="trip-card category-private" style="display:none;">
    <img src="{{ asset('images/prau.png') }}" alt="Trip 4">
    <span class="label" style="background:#ff9800;">Private Trip</span>

    <div class="info">
        <div class="date-badge">📅 12 Okt 2025</div>
        <div class="duration-badge">⏱️ 2 Hari</div>

        <h3>Trip Gunung Prau Start Dieng 2DIN</h3>
        <p>📍 Jawa Tengah</p>
        <p><strong>Min. pemesanan 5 pax</strong><br>Untuk pemesanan dan detail trip silakan hubungi nomor yang tertera.</p>

        <p class="price">Rp 1.000.000/pax</p>
        <a href="#" class="btn-detail">Pesan ></a>
    </div>
</div>

<!-- PRIVATE TRIP CARD 4 -->
<div class="trip-card category-private" style="display:none;">
    <img src="{{ asset('images/prau.png') }}" alt="Trip 4">
    <span class="label" style="background:#ff9800;">Private Trip</span>

    <div class="info">
        <div class="date-badge">📅 12 Okt 2025</div>
        <div class="duration-badge">⏱️ 2 Hari</div>

        <h3>Trip Gunung Prau Start Dieng 2DIN</h3>
        <p>📍 Jawa Tengah</p>
        <p><strong>Min. pemesanan 5 pax</strong><br>Untuk pemesanan dan detail trip silakan hubungi nomor yang tertera.</p>

        <p class="price">Rp 1.000.000/pax</p>
        <a href="#" class="btn-detail">Pesan ></a>
    </div>
</div>

<!-- PRIVATE TRIP CARD 4 -->
<div class="trip-card category-private" style="display:none;">
    <img src="{{ asset('images/prau.png') }}" alt="Trip 4">
    <span class="label" style="background:#ff9800;">Private Trip</span>

    <div class="info">
        <div class="date-badge">📅 12 Okt 2025</div>
        <div class="duration-badge">⏱️ 2 Hari</div>

        <h3>Trip Gunung Prau Start Dieng 2DIN</h3>
        <p>📍 Jawa Tengah</p>
        <p><strong>Min. pemesanan 5 pax</strong><br>Untuk pemesanan dan detail trip silakan hubungi nomor yang tertera.</p>

        <p class="price">Rp 1.000.000/pax</p>
        <a href="#" class="btn-detail">Pesan ></a>
    </div>
</div>

<!-- PRIVATE TRIP CARD 4 -->
<div class="trip-card category-private" style="display:none;">
    <img src="{{ asset('images/prau.png') }}" alt="Trip 4">
    <span class="label" style="background:#ff9800;">Private Trip</span>

    <div class="info">
        <div class="date-badge">📅 12 Okt 2025</div>
        <div class="duration-badge">⏱️ 2 Hari</div>

        <h3>Trip Gunung Prau Start Dieng 2DIN</h3>
        <p>📍 Jawa Tengah</p>
        <p><strong>Min. pemesanan 5 pax</strong><br>Untuk pemesanan dan detail trip silakan hubungi nomor yang tertera.</p>

        <p class="price">Rp 1.000.000/pax</p>
        <a href="#" class="btn-detail">Pesan ></a>
    </div>
</div>

<!-- PRIVATE TRIP CARD 4 -->
<div class="trip-card category-private" style="display:none;">
    <img src="{{ asset('images/prau.png') }}" alt="Trip 4">
    <span class="label" style="background:#ff9800;">Private Trip</span>

    <div class="info">
        <div class="date-badge">📅 12 Okt 2025</div>
        <div class="duration-badge">⏱️ 2 Hari</div>

        <h3>Trip Gunung Prau Start Dieng 2DIN</h3>
        <p>📍 Jawa Tengah</p>
        <p><strong>Min. pemesanan 5 pax</strong><br>Untuk pemesanan dan detail trip silakan hubungi nomor yang tertera.</p>

        <p class="price">Rp 1.000.000/pax</p>
        <a href="#" class="btn-detail">Pesan ></a>
    </div>
</div>

<!-- PRIVATE TRIP CARD 4 -->
<div class="trip-card category-private" style="display:none;">
    <img src="{{ asset('images/prau.png') }}" alt="Trip 4">
    <span class="label" style="background:#ff9800;">Private Trip</span>

    <div class="info">
        <div class="date-badge">📅 12 Okt 2025</div>
        <div class="duration-badge">⏱️ 2 Hari</div>

        <h3>Trip Gunung Prau Start Dieng 2DIN</h3>
        <p>📍 Jawa Tengah</p>
        <p><strong>Min. pemesanan 5 pax</strong><br>Untuk pemesanan dan detail trip silakan hubungi nomor yang tertera.</p>

        <p class="price">Rp 1.000.000/pax</p>
        <a href="#" class="btn-detail">Pesan ></a>
    </div>
</div>

</section>

<br><br><br>

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

<!-- SCRIPT FILTER -->
<script>
function setFilter(type) {

    const btns = document.querySelectorAll('.filter-btn');
    btns.forEach(btn => btn.classList.remove('active'));

    if (type === 'open') {
        btns[0].classList.add('active');
    } else {
        btns[1].classList.add('active');
    }

    const openCards = document.querySelectorAll('.category-open');
    const privateCards = document.querySelectorAll('.category-private');

    if (type === 'open') {
        openCards.forEach(el => {
            el.style.display = 'flex';   // ← PENTING
        });
        privateCards.forEach(el => {
            el.style.display = 'none';
        });
    } else {
        openCards.forEach(el => {
            el.style.display = 'none';
        });
        privateCards.forEach(el => {
            el.style.display = 'flex';   // ← PENTING
        });
    }
}
</script>

</body>
</html>  