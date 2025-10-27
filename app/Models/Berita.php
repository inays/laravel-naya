<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita'; // nama tabel di database kamu
    protected $fillable = ['judul', 'isi', 'gambar']; // sesuaikan kolomnya
}
