@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="profile-container">
    <h1 class="title">Profil Saya</h1>

    <div class="profile-card">
        <img src="{{ asset('image/profile.jpg') }}" alt="Foto Profil" class="profile-img">

        <div class="profile-info">
            <h2>Rizka Okta</h2>
            <p class="status">Mahasiswa S1 Teknologi Informasi<br>
                Fakultas Teknik dan Ilmu Komputer<br>
                Universitas Muhammadiyah Semarang
            </p>
            <p class="desc">
                Saya mahasiswa S1 Teknologi Informasi yang tertarik dengan pengembangan web modern. 
                Dengan mempelajari Laravel, saya berharap dapat membuat aplikasi web yang terstruktur, efisien, dan menarik.
            </p>

            <h3>Keahlian</h3>
            <div class="skills">
                <div class="skill">
                    <span>HTML & CSS</span>
                    <div class="progress"><div class="bar" style="width: 90%;"></div></div>
                </div>
                <div class="skill">
                    <span>Laravel</span>
                    <div class="progress"><div class="bar" style="width: 75%;"></div></div>
                </div>
                <div class="skill">
                    <span>JavaScript</span>
                    <div class="progress"><div class="bar" style="width: 70%;"></div></div>
                </div>
            </div>

            <h3>Hubungi Saya</h3>
            <div class="social-links">
                <a href="#" class="social facebook">Facebook</a>
                <a href="#" class="social instagram">Instagram</a>
                <a href="#" class="social github">GitHub</a>
            </div>
        </div>
    </div>
</div>
@endsection
