<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // nama tabel di database
    protected $fillable = ['nama', 'nim', 'kelas']; // kolom yang bisa diisi
}
