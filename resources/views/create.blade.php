@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-3">Tambah Data</h3>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Notifikasi error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('data.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label>Judul</label>
            <input type="text" 
                   name="judul" 
                   class="form-control @error('judul') is-invalid @enderror"
                   value="{{ old('judul') }}" required>
            @error('judul')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label>Penulis</label>
            <input type="text" 
                   name="penulis" 
                   class="form-control @error('penulis') is-invalid @enderror"
                   value="{{ old('penulis') }}" required>
            @error('penulis')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label>Tahun Terbit</label>
            <input type="number" 
                   name="tahun" 
                   class="form-control @error('tahun') is-invalid @enderror"
                   value="{{ old('tahun') }}" required>
            @error('tahun')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('data.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
