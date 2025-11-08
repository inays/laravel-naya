@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">📚 Data Mahasiswa</h1>

    <a href="{{ route('tambahmahasiswa') }}" class="btn btn-primary mb-3">+ Tambah Mahasiswa</a>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswas as $index => $mhs)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->kelas }}</td>
                    <td class="text-center">
                        <a href="{{ route('editmahasiswa', $mhs->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('deletemahasiswa', $mhs->id) }}" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center text-muted">Belum ada data mahasiswa</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
