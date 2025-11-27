@extends('layouts.main')

@section('content')
<h1 class="text-center">Edit Data Mahasiswa</h1>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" 
                       value="{{ old('name', $mahasiswa->name) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control" 
                       value="{{ old('nim', $mahasiswa->nim) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" class="form-control" 
                       value="{{ old('prodi', $mahasiswa->prodi) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" 
                       value="{{ old('email', $mahasiswa->email) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="nohp">No HP</label>
                <input type="text" name="nohp" class="form-control" 
                       value="{{ old('nohp', $mahasiswa->nohp) }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection