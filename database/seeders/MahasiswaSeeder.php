<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <--- Tambahkan ini

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Kimberly',
            'nim' => '132424008',
            'prodi' => 'Teknologi Informasi',
            'email' => 'kimberlyez@gmail.com',
            'nohp' => '62786552353'
        ]);
    }
}
