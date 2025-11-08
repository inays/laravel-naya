@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Tambah Data Mahasiswa</h1>

    <form action="{{ route('insertdata') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('datamahasiswa') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
