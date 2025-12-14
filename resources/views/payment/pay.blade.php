<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran Trip</title>

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

    {{-- CSS kamu --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="order-form">
    <div class="order-container">

        <h2>Pembayaran Trip</h2>
        <p class="order-subtitle">
            Silakan selesaikan pembayaran untuk melanjutkan pemesanan
        </p>

        <div class="form-group">
    <label>Nama Pemesan</label>
    <input type="text" value="{{ $order->nama }}" readonly>
</div>

<div class="form-group">
    <label>Email</label>
    <input type="text" value="{{ $order->email }}" readonly>
</div>

<div class="form-group">
    <label>No Telp</label>
    <input type="text" value="{{ $order->no_telp }}" readonly>
</div>

<div class="form-group">
    <label>Open Trip</label>
    <input type="text" value="{{ $order->trip->nama_trip }}" readonly>
</div>

<div class="form-group">
    <label>Tanggal</label>
    <input type="text" value="{{ $order->tanggal }}" readonly>
</div>

<div class="form-group">
    <label>Paket</label>
    <input type="text" value="{{ $order->paket }}" readonly>
</div>


        <div class="form-group">
            <label>Total Bayar</label>
            <input type="text"
                   value="Rp {{ number_format($order->total_harga, 0, ',', '.') }}"
                   readonly>
        </div>

        <div class="form-action">
            <button id="pay-button" class="btn-pay">
                Bayar Sekarang
            </button>
        </div>

        <p style="margin-top:15px; font-size:13px; color:#666; text-align:center;">
            Pembayaran aman & terenkripsi melalui <strong>Midtrans</strong>
        </p>

    </div>
</div>

{{-- MIDTRANS SNAP --}}
<script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.client_key') }}">
</script>

<script>
document.getElementById('pay-button').addEventListener('click', function () {
    snap.pay('{{ $snapToken }}', {
        onSuccess: function () {
            alert('Pembayaran berhasil');
            window.location.href = "/order/{{ $order->id }}";
        },
        onPending: function () {
            alert('Menunggu pembayaran');
        },
        onError: function () {
            alert('Pembayaran gagal');
        }
    });
});
</script>

</body>
</html>

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
