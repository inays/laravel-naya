<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Laravel 11 Resmi Dirilis',
                'isi' => 'Framework Laravel versi terbaru kini hadir dengan performa lebih cepat dan fitur baru untuk pengembangan web modern.',
                'gambar' => 'https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406_960_720.jpg',
            ],
            [
                'judul' => '5 Tips Cepat Belajar Laravel',
                'isi' => 'Tingkatkan skill coding kamu dengan 5 tips simpel ini untuk memahami Laravel lebih cepat.',
                'gambar' => 'https://cdn.pixabay.com/photo/2017/01/06/19/15/learn-1955663_960_720.jpg',
            ],
        ];

        foreach ($data as $item) {
            Berita::create([
                'judul' => $item['judul'],
                'slug' => Str::slug($item['judul']),
                'isi' => $item['isi'],
                'gambar' => $item['gambar'],
            ]);
        }
    }
}
