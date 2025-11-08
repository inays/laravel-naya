<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Semua route utama aplikasi Laravel kamu ada di sini.
| Pastikan setiap controller memiliki method sesuai dengan route yang dipanggil.
|
*/

// =====================
// 🏠 HALAMAN UTAMA (HOME)
// =====================

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'home'])->name('home');

// =====================
// 🎓 DATA MAHASISWA
// =====================

// Menampilkan daftar mahasiswa
Route::get('/datamahasiswa', [MahasiswaController::class, 'index'])->name('datamahasiswa');

// Menampilkan form tambah mahasiswa
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');

// Proses insert data mahasiswa ke database
Route::post('/tambahmahasiswa', [MahasiswaController::class, 'insertdata'])->name('insertdata');

// Edit data mahasiswa
Route::get('/editmahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('editmahasiswa');

// Update data mahasiswa
Route::post('/updatemahasiswa/{id}', [MahasiswaController::class, 'update'])->name('updatemahasiswa');

// Hapus data mahasiswa
Route::get('/deletemahasiswa/{id}', [MahasiswaController::class, 'delete'])->name('deletemahasiswa');

// =====================
// 📰 BERITA
// =====================

// Halaman daftar berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

// Halaman detail berita berdasarkan slug
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// =====================
// 👤 PROFIL & KONTAK
// =====================

// Halaman profil
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

// Halaman kontak (tampilkan form)
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Proses kirim pesan dari form kontak
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
// 🎓 MAHASISWA
Route::get('/datamahasiswa', [MahasiswaController::class, 'index'])->name('datamahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
Route::post('/tambahmahasiswa', [MahasiswaController::class, 'insertdata'])->name('insertdata');
Route::get('/editmahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('editmahasiswa');
Route::post('/updatemahasiswa/{id}', [MahasiswaController::class, 'update'])->name('updatemahasiswa');
Route::get('/deletemahasiswa/{id}', [MahasiswaController::class, 'delete'])->name('deletemahasiswa');


// =====================
// 🚀 ERROR HANDLER (opsional)
// =====================

// Jika halaman tidak ditemukan
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
