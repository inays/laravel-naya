@extends('layouts.main')

@section('content')
    <h1>Data Mahasiswa</h1>
    protected $fillable = ['nama', 'nim', 'email', 'jurusan', 'alamat'];


@endsection