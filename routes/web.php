<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Semua route utama aplikasi Laravel kamu ada di sini.
|
*/

// =====================
// 🏠 HALAMAN UTAMA (PUBLIC)
// =====================

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/home', [HomeController::class, 'home'])->name('home');

// =====================
// 📰 BERITA (PUBLIC)
// =====================

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// =====================
// 👤 KONTAK (PUBLIC)
// =====================

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/my-profile', [PublicProfileController::class, 'show'])->name('public.profile');

// =====================
// 🎓 MAHASISWA (READ PUBLIC, WRITE PROTECTED)
// =====================

// List (Bisa dibuat public atau protected, saya buat public agar 'tidak menghilangkan halaman')
Route::get('/datamahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// Middleware Group for Protected Actions
Route::middleware('auth')->group(function () {
    
    // CRUD Mahasiswa
    Route::get('/tambahmahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/simpandata', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/editmahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::post('/updatemahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::get('/deletemahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

    // Profile (Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Auth Routes
require __DIR__.'/auth.php';
