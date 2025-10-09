@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<h2>Berita Terkini Laravel 📰</h2>
<div class="grid">
    <div class="card">
        <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel 11">
        <h3>Laravel 11 Resmi Dirilis</h3>
        <p>Framework Laravel versi terbaru kini hadir dengan performa lebih cepat dan fitur baru untuk developer.</p>
        <button>Baca Selengkapnya</button>
    </div>
    <div class="card">
        <img src="https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406_960_720.jpg" alt="Tips Laravel">
        <h3>5 Tips Cepat Belajar Laravel</h3>
        <p>Tingkatkan skill coding kamu dengan 5 tips simpel ini untuk memahami Laravel lebih cepat.</p>
        <button>Baca Selengkapnya</button>
    </div>
    <div class="card">
        <img src="https://cdn.pixabay.com/photo/2015/04/23/17/41/javascript-736400_960_720.jpg" alt="Integrasi VueJS">
        <h3>Integrasi Laravel dan Vue.js</h3>
        <p>Gabungkan kekuatan Laravel dengan Vue.js untuk membangun aplikasi SPA modern.</p>
        <button>Baca Selengkapnya</button>
        <a href="{{ route('berita.show', ['slug' => $item->slug]) }}">
            @foreach ($berita as $item)
    <div class="card">
        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}">
        <h3>{{ $item->judul }}</h3>
        <p>{{ Str::limit($item->konten, 100) }}</p>
        <a href="{{ route('berita.show', ['slug' => $item->slug]) }}">
            <button>Baca Selengkapnya</button>
        </a>
    </div>
@endforeach

    <button>Baca Selengkapnya</button>
</a>

    </div>
</div>
@endsection
