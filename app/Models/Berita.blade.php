<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita');
    }
}

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Jika tabel di database namanya bukan 'beritas', tambahkan ini:
    // protected $table = 'berita';

    // Jika kolom primary key bukan 'id', tambahkan ini:
    // protected $primaryKey = 'id_berita';

    // Method untuk mencari data berita berdasarkan slug
    public static function caridata($slug)
    {
        // Mencari berita dengan kolom 'slug' sesuai parameter
        return self::where('slug', $slug)->first();
        
    }
}