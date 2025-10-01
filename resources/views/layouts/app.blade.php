<!-- ==========================
File: resources/views/layouts/app.blade.php
========================== -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/berita">Berita</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>© 2025 Belajar Laravel</p>
    </footer>
</body>
</html>
