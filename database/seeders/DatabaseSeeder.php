<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ✅ Jalankan seeder berita
        $this->call([
            BeritaSeeder::class,
        ]);

        // (Opsional) Tambahkan seeder lain di sini nanti kalau perlu
        // Contoh:
        // $this->call([
        //     MahasiswaSeeder::class,
        //     UserSeeder::class,
        // ]);
    }
}
