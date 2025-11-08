@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Data Mahasiswa</h1>

    <form action="{{ route('updatemahasiswa', $mhs->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}" required>
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $mhs->nim }}" required>
        </div>

        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $mhs->kelas }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('datamahasiswa') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
