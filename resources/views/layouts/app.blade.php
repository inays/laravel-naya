<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo"><i class="fa-solid fa-code"></i> MyLaravelSite</div>

            <ul class="nav-links">
                <li><a href="/home"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="/berita"><i class="fa-regular fa-newspaper"></i> Berita</a></li>
                <li><a href="/profile"><i class="fa-solid fa-user"></i> Profile</a></li>
                <li><a href="/contact"><i class="fa-solid fa-envelope"></i> Contact</a></li>
            </ul>

            <button id="mode-toggle" class="toggle-btn">🌙</button>
        </nav>
    </header>

    <main class="container fade-in">
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Belajar Laravel | Dibuat dengan ❤️ oleh Kamu</p>
    </footer>

    <script>
        const toggle = document.getElementById('mode-toggle');
        const body = document.body;

        if(localStorage.getItem('theme') === 'dark'){
            body.classList.add('dark');
            toggle.textContent = '☀️';
        }

        toggle.addEventListener('click', () => {
            body.classList.toggle('dark');
            if(body.classList.contains('dark')){
                localStorage.setItem('theme', 'dark');
                toggle.textContent = '☀️';
            } else {
                localStorage.setItem('theme', 'light');
                toggle.textContent = '🌙';

                .section {
    margin-bottom: 3rem;
}

.section h2 {
    font-size: 1.8rem;
    margin-bottom: 1rem;
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.card img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 1rem;
}

button {
    background: #4b6cb7;
    border: none;
    color: white;
    padding: 0.6rem 1.2rem;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #182848;
}

            }
        });
    </script>
</body>
</html>
