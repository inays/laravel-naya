<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Semua route utama aplikasi Laravel kamu ada di sini.
|
*/

// =====================
// 🏠 HALAMAN UTAMA
// =====================

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'home'])->name('home');

// =====================
// 🎓 CRUD MAHASISWA
// =====================

// Menampilkan daftar mahasiswa
Route::get('/datamahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// Form tambah mahasiswa
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');

// Proses simpan data
Route::post('/simpandata', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

// Edit mahasiswa
Route::get('/editmahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

// Proses update mahasiswa
Route::post('/updatemahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

// Hapus mahasiswa
Route::get('/deletemahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

// =====================
// 📰 BERITA
// =====================

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// =====================
// 👤 PROFIL & KONTAK
// =====================

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// =====================
// 🚀 ERROR HANDLER
// =====================

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
