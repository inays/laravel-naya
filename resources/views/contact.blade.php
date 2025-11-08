@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center mb-4">Hubungi Kami</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="card p-4 shadow-lg">
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama kamu" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email kamu" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pesan</label>
                <textarea name="message" class="form-control" rows="5" placeholder="Tulis pesan kamu..." required></textarea>
            </div>

            <div class="text-center">
                <button class="btn btn-primary px-4 py-2">
                    <i class="fa-solid fa-paper-plane"></i> Kirim Pesan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
