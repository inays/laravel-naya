<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => Berita::all()
        ]);
    }

    public function tampildata($slug)
    {
        return view('singleberita', [
            "title" => "Berita",
            "berita" => Berita::where('slug', $slug)->first()
        ]);
    }
}
