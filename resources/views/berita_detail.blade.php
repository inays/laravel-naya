@extends('layouts.app')

@section('title', $berita->judul)

@section('content')<div class="container mt-5">
    <div class="card shadow">
        @if($berita->gambar)
            <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top" alt="{{ $berita->judul }}" style="height: 350px; object-fit: cover;">
        @endif

        <div class="card-body">
            <h2 class="card-title mb-3">{{ $berita->judul }}</h2>
            <p class="text-muted">Dipublikasikan pada: {{ $berita->created_at->format('d M Y') }}</p>
            <hr>
            <p class="card-text" style="text-align: justify;">{{ $berita->isi }}</p>

            <a href="{{ route('berita.index') }}" class="btn btn-secondary mt-3">← Kembali ke Daftar Berita</a>
        </div>
    </div>
</div>

@endsection
