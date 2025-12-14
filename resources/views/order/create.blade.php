<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

<section class="order-form">
    <div class="order-container">
        <h2>Form Pemesanan</h2>
        <p class="order-subtitle">Lengkapi data di bawah untuk melanjutkan pemesanan</p>

        <form method="POST" action="{{ route('order.store', $trip->id) }}">
            @csrf

            <div class="form-group">
                <label>Open Trip</label>
                <input type="text" value="{{ $trip->nama_trip }}" readonly>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Tanggal</label>
                    <select name="tanggal" required>
                        <option value="{{ $trip->tanggal }}">
                            {{ \Carbon\Carbon::parse($trip->tanggal)->translatedFormat('d M Y') }}
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Paket</label>
                    <select name="paket" required>
                        <option value="">-- Pilih Paket --</option>
                        <option value="A">Paket A</option>
                        <option value="B">Paket B</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Nama lengkap sesuai KTP</label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>No Telp</label>
                    <input type="text" name="no_telp" placeholder="08xxxxxxxxxx" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="example@email.com" required>
                </div>
            </div>

            <div class="form-action">
                <button type="submit" class="btn-pay">
                    Pay Now
                </button>
            </div>
        </form>
    </div>
</section>

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
