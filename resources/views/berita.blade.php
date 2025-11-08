@extends('layouts.app') {{-- opsional kalau kamu pakai layout utama --}}
@section('content')
@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
   <!-- isi konten halaman -->
@endsection


<div class="container mt-4">
    <h2 class="text-center mb-4">Daftar Berita Terbaru</h2>

    <div class="row">
        @forelse($beritas as $item)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}" style="height: 200px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/400x200?text=No+Image" class="card-img-top" alt="no image">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($item->isi, 100) }}</p>
                        <a href="{{ route('berita.show', $item->slug) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Belum ada berita yang tersedia.</p>
        @endforelse
    </div>
</div>

@endsection
