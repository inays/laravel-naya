@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="contact-container">
    <h1 class="contact-title">Hubungi Saya</h1>
    <p class="contact-subtitle">Punya pertanyaan, saran, atau ingin bekerja sama? Kirim pesanmu di bawah ini 👇</p>

    <div class="contact-wrapper">
        <!-- Form Kontak -->
        <div class="contact-form">
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap kamu" required>
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email kamu" required>
                </div>

                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tulis pesan kamu di sini..." required></textarea>
                </div>

                <button type="submit" class="btn-send">Kirim Pesan</button>
            </form>
        </div>

        <!-- Info Kontak -->
        <div class="contact-info">
            <h2>Informasi Kontak</h2>
            <p><strong>Alamat:</strong> Jl. Kedungmundu Raya No.17, Semarang</p>
            <p><strong>Email:</strong> sykaninay@gmail.com</p>
            <p><strong>No. HP:</strong> +62 812-3456-7890</p>

            <h3>Ikuti Saya</h3>
            <div class="social-links">
                <a href="#" class="social facebook">Facebook</a>
                <a href="#" class="social instagram">Instagram</a>
                <a href="#" class="social github">GitHub</a>
            </div>
        </div>
    </div>
</div>
@endsection
