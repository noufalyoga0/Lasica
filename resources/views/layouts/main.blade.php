<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lasica Trip Adventure')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    {{-- Navbar --}}
    <nav style="background: #004466; padding: 10px;">
        <a href="{{ route('home') }}" style="color:white; margin-right:10px;">Home</a>
        <a href="{{ route('trip.open') }}" style="color:white; margin-right:10px;">Open Trip</a>
        <a href="{{ route('trip.private') }}" style="color:white; margin-right:10px;">Private Trip</a>
        <a href="{{ route('galeri') }}" style="color:white; margin-right:10px;">Galeri</a>
        <a href="{{ route('about') }}" style="color:white; margin-right:10px;">About Us</a>
        <a href="{{ route('profile') }}" style="color:white;">Profil</a>
    </nav>

    {{-- Konten halaman --}}
    <main style="padding: 20px;">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer style="background:#003355; color:white; text-align:center; padding:10px; margin-top:50px;">
        <p>© 2025 Lasica Trip Adventure. All Rights Reserved.</p>
    </footer>

</body>
</html>
