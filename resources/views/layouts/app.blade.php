<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyLaravelSite')</title>

    <!-- CSS Utama -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap (opsional untuk tampilan form yang rapi) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- HEADER / NAVBAR -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <i class="fa-solid fa-code"></i> MyLaravelSite
            </div>

            <ul class="nav-links">
                <li><a href="/home"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="/berita"><i class="fa-regular fa-newspaper"></i> Berita</a></li>
                <li><a href="/my-profile"><i class="fa-solid fa-user"></i> Profile</a></li>
                <li><a href="/contact"><i class="fa-solid fa-envelope"></i> Contact</a></li>
                <li><a href="/datamahasiswa">Mahasiswa</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}" class="text-success"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> Register</a></li>
                        @endif
                    @endauth
                @endif

            </ul>

            <button id="mode-toggle" class="toggle-btn">🌙</button>
        </nav>
    </header>

    <!-- KONTEN UTAMA -->
    <main class="container mt-4 fade-in">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="text-center py-4 mt-5 border-top">
        <p>&copy; 2025 Belajar Laravel | Dibuat dengan ❤️ oleh Kamu</p>
    </footer>

    <!-- JS MODE TOGGLE -->
    <script>
        const toggle = document.getElementById('mode-toggle');
        const body = document.body;

        // Cek mode sebelumnya
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark');
            toggle.textContent = '☀️';
        }

        toggle.addEventListener('click', () => {
            body.classList.toggle('dark');
            if (body.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
                toggle.textContent = '☀️';
            } else {
                localStorage.setItem('theme', 'light');
                toggle.textContent = '🌙';
            }
        });
    </script>
</body>
</html>
