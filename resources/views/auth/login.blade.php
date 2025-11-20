<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lasica Trip</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="login-page">
    <div class="login-container">
        <img src="{{ asset('images/logo.png') }}" alt="Lasica Logo" class="login-logo">
        <form method="POST" action="{{ route('login') }}">
    @csrf
    <label>Email atau Username</label>
    <input type="text" name="email" placeholder="Masukkan Email atau Username" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan Password" required>

    <p class="small">Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a></p>
    <button type="submit" class="btn-login">Login</button>
</form>

    </div>
</body>
</html>
