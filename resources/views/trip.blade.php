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
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('trip') }}" >Trip</a>
            <a href="{{ route('galeri') }}">Galeri</a>
            <a href="{{ route('testimoni') }}">Testimoni</a>
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

    <!-- TITLE SECTION -->
    <section class="trips" style="margin-top: 40px;">
        <h2>Semua Trip</h2>
    </section>

    <!-- FILTER CARD -->
    <div class="trip-filter">
        <button class="filter-btn active" onclick="setFilter('open')">Open Trip</button>
        <button class="filter-btn" onclick="setFilter('private')">Private Trip</button>
    </div>

<section class="trip-list">

@forelse ($trips as $trip)
<div class="trip-card category-{{ $trip->tipe_trip }} 
    {{ $trip->tipe_trip === 'private' ? 'hidden' : '' }}">

    <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->nama_trip }}">

    <span class="label">
        {{ $trip->tipe_trip === 'private' ? 'Private Trip' : 'Open Trip' }}
    </span>

    <div class="info">
        <div class="date-badge">
            📅 {{ \Carbon\Carbon::parse($trip->tanggal)->translatedFormat('d M Y') }}
        </div>

        <div class="duration-badge">
            ⏱ {{ $trip->durasi_hari }} Hari
        </div>

        <h3>{{ $trip->nama_trip }}</h3>

        <p>📍 {{ $trip->lokasi }}</p>

        {{-- KHUSUS OPEN TRIP --}}
        @if($trip->tipe_trip === 'open')
            <p>
                ⭐ {{ number_format($trip->rating, 1) }}
                ({{ number_format($trip->total_ulasan) }} Ulasan)
            </p>
            <p>🔥 {{ $trip->total_dipesan }}x dipesan</p>
            <p>👁 {{ $trip->views }}x dilihat</p>

            <p class="price">
                Rp {{ number_format($trip->harga, 0, ',', '.') }}
            </p>

            <a href="{{ route('trip.detail', $trip->id) }}" class="btn-detail">
                Detail >
            </a>
        @endif

        {{-- KHUSUS PRIVATE TRIP --}}
        @if($trip->tipe_trip === 'private')
            <p class="trip-desc">
                <strong>Min. pemesanan {{ $trip->min_pax }} pax</strong><br>
                Klik pesan untuk hubungi wa admin untuk pemesanan private trip.
            </p>

            <p class="price">
                Rp {{ number_format($trip->harga, 0, ',', '.') }}/pax
            </p>

            <a href="https://wa.me/6285731500985" class="btn-detail">
                Pesan
            </a>
        @endif
    </div>

</div>
@empty
<p style="text-align:center;margin-top:40px;">
    Belum ada trip tersedia.
</p>
@endforelse

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

    console.log('open:', openCards.length);
    console.log('private:', privateCards.length);

    if (type === 'open') {
        openCards.forEach(card => card.classList.remove('hidden'));
        privateCards.forEach(card => card.classList.add('hidden'));
    } else {
        openCards.forEach(card => card.classList.add('hidden'));
        privateCards.forEach(card => card.classList.remove('hidden'));
    }
}

// default
document.addEventListener('DOMContentLoaded', function () {
    setFilter('open');
});
</script>
    </body>
    </html>  