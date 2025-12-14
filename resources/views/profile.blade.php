<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

{{-- ================= NAVBAR ================= --}}
<nav>
    <div class="nav-logo">
        <img src="{{ asset('images/logo.png') }}" alt="Lasica Logo">
    </div>

    <ul class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('trip') }}">Trip</a>
        <a href="{{ route('galeri') }}">Galeri</a>
        <a href="{{ route('testimoni') }}">Testimoni</a>
        <a href="{{ route('aboutus') }}">About Us</a>
    </ul>

    <div class="nav-actions">
        <a href="{{ route('profile') }}" class="nav-avatar">
            <img
                src="{{ auth()->user()->avatar
                    ? asset('storage/' . auth()->user()->avatar)
                    : asset('images/default-avatar.png') }}"
                alt="Profile">
        </a>
    </div>
</nav>


{{-- ================= GREETING ================= --}}
<div class="profile-greeting">
    Hi, {{ auth()->user()->name }}!
</div>

<div class="profile-wrapper">
    <div class="profile-card">

        <h3>Profil Pengguna</h3>

        {{-- FORM EDIT PROFILE --}}
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="profile-top">
                <img id="avatarPreview"
                     src="{{ auth()->user()->avatar
                        ? asset('storage/' . auth()->user()->avatar)
                        : asset('images/user.png') }}"
                     class="profile-photo">

                <div>
                    <label class="upload-btn">
                        Upload Foto
                        <input type="file" name="avatar" hidden onchange="previewAvatar(event)">
                    </label>
                    <small>Disarankan foto berukuran 1:1</small>
                </div>
            </div>

            <div class="profile-form">
                <label>Nama Lengkap</label>
                <input type="text" name="name" value="{{ auth()->user()->name }}">

                <label>Username</label>
                <input type="text" value="{{ auth()->user()->username }}" readonly>

                <label>Email</label>
                <input type="email" value="{{ auth()->user()->email }}" readonly>

                <label>No Telepon</label>
                <input type="text" name="phone" value="{{ auth()->user()->phone ?? '' }}">
            </div>

            <div class="profile-actions">
    <button type="submit" class="btn-save">
        Simpan Perubahan
    </button>
</div>
</form>

<div class="profile-actions">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn-logout"
                onclick="return confirm('Yakin ingin logout?')">
            Logout
        </button>
    </form>
</div>


    </div>
</div>

{{-- ================= FOOTER ================= --}}
<footer>
    <div class="footer-left">
        <img src="{{ asset('images/logo.png') }}">
        <div>
            <strong>Lasica Trip Adventure</strong><br>
            Bogor, Jawa Barat, ID
        </div>
    </div>

    <small>© 2025 Lasica Trip Adventure. All Rights Reserved.</small>
</footer>

<script>
function previewAvatar(event) {
    const img = document.getElementById('avatarPreview');
    img.src = URL.createObjectURL(event.target.files[0]);
}
</script>

</body>
</html>
