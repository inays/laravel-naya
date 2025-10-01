{{-- ==========================
File: resources/views/profile.blade.php
========================== --}}
@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1>Halaman Profile</h1>

    <div class="profile-card">
        <img src="{{ asset('image/profile.jpg') }}" alt="Foto Profil" class="profile-img">

        <div class="profile-info">
            <p><strong>Nama:</strong> Naiiyaah</p>
            <p><strong>Status:</strong> Mahasiswa Belajar Laravel</p>
            <p><strong>Deskripsi:</strong> Saya sedang belajar framework Laravel untuk membuat website dinamis dan modern. 
            Harapannya, dengan mempelajari Laravel, saya bisa membuat aplikasi web yang lebih terstruktur dan mudah dikelola.</p>
        </div>
    </div>
@endsection
