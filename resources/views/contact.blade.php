{{-- ==========================
File: resources/views/contact.blade.php
========================== --}}
@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Halaman Contact</h1>
    <p>Jika ingin menghubungi saya, silakan gunakan informasi di bawah ini:</p>

    <ul>
        <li>Email: <a href="mailto:contoh@email.com">contoh@email.com</a></li>
        <li>Instagram: <a href="https://instagram.com/username" target="_blank">@username</a></li>
        <li>WhatsApp: 0812-3456-7890</li>
    </ul>
@endsection
