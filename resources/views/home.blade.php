@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="home-container">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Selamat Datang di Website Laravel Saya 👋</h1>
            <p>Website ini dibuat dengan Laravel sebagai latihan membuat aplikasi web yang modern, interaktif, dan responsif.</p>
            <a href="/profile" class="btn-primary">Lihat Profil Saya</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('image/profile.jpg') }}" alt="Hero Image">
        </div>
    </section>

    <!-- Tentang Saya -->
    <section class="about">
        <h2>Tentang Saya</h2>
        <p>Saya adalah mahasiswa S1 Teknologi Informasi yang sedang belajar Laravel untuk mengembangkan website yang lebih menarik dan profesional. Melalui project ini, saya belajar banyak tentang struktur MVC, Blade Template, dan routing di Laravel.</p>
    </section>

    <!-- Fitur Utama -->
    <section class="features">
        <h2>Fitur Utama Website</h2>
        <div class="feature-list">
            <div class="feature-card">
                <i class="fas fa-user"></i>
                <h3>Profil Pengguna</h3>
                <p>Menampilkan biodata, foto, dan deskripsi diri secara interaktif dan menarik.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-newspaper"></i>
                <h3>Berita Terbaru</h3>
                <p>Berbagai informasi dan artikel seputar dunia teknologi, kampus, dan pemrograman.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-envelope"></i>
                <h3>Kontak Saya</h3>
                <p>Kamu bisa langsung kirim pesan melalui form kontak yang sudah disediakan.</p>
            </div>
        </div>
    </section>

    <!-- Highlight Berita -->
    <section class="latest-news">
        <h2>Berita Terbaru</h2>
        <div class="news-grid">
            <div class="news-card">
                <img src="https://source.unsplash.com/600x400/?technology" alt="Tech News">
                <h3>Perkembangan AI di Dunia Pendidikan</h3>
                <p>Kecerdasan buatan kini banyak digunakan untuk membantu sistem pembelajaran di universitas modern.</p>
                <a href="/berita" class="btn-secondary">Baca Selengkapnya</a>
            </div>
            <div class="news-card">
                <img src="https://source.unsplash.com/600x400/?programming" alt="Programming News">
                <h3>Belajar Laravel untuk Pemula</h3>
                <p>Laravel menjadi framework PHP favorit karena kemudahan dan strukturnya yang rapi.</p>
                <a href="/berita" class="btn-secondary">Baca Selengkapnya</a>
            </div>
        </div>
    </section>
</div>
@endsection
