<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Panel')</title>

    {{-- GOOGLE FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- STYLE UTAMA --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- ICON (OPTIONAL, TAPI BAGUS) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @stack('styles')
</head>
<body>

<div class="admin-wrapper">

    {{-- ===== SIDEBAR ===== --}}
    <aside class="admin-sidebar">
        @include('admin.layouts.sidebar')
    </aside>

    {{-- ===== MAIN CONTENT ===== --}}
    <main class="admin-content">

        {{-- TOP BAR --}}
        <div class="admin-topbar">
            <h2>@yield('page-title')</h2>

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="admin-logout">Logout</button>
            </form>
        </div>

        {{-- PAGE CONTENT --}}
        <div class="admin-page">
            @yield('content')
        </div>

    </main>

</div>

@stack('scripts')
</body>
</html>
