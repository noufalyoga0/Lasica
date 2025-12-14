<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Lasica Trip</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="register-page">
    <div class="register-container">
        <img src="{{ asset('images/logo.png') }}" alt="Lasica Logo" class="login-logo">

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label>Nama lengkap</label>
            <input type="text" name="name" placeholder="Masukkan Nama" required>
        
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan Email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan Password" required>

            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>

            <button type="submit" class="btn-login">Daftar</button>
        </form>
    </div>
</body>
</html>
