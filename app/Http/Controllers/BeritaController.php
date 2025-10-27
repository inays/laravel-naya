<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all(); // ambil semua data dari tabel berita
        return view('berita', compact('berita')); // kirim ke view
    }
}
