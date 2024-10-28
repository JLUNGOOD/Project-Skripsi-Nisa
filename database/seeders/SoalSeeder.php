<?php

namespace Database\Seeders;

use App\Models\Soal;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    public function run()
    {
        Soal::create([
            'quiz_id' => 1,
            'soal' => 'assets/foto/1.png',
            'pilihan_a' => 'Aqua',
            'pilihan_b' => 'Hidrogen',
            'pilihan_c' => 'Gery',
            'pilihan_d' => 'Tanggo',
            'pilihan_e' => 'Fullo',
            'jawaban' => 'pilihan_b',
        ]);

        Soal::create([
            'quiz_id' => 1,
            'soal' => 'assets/foto/2.png',
            'pilihan_a' => 'Nabati',
            'pilihan_b' => 'Nextar',
            'pilihan_c' => 'Helium',
            'pilihan_d' => 'Super Star',
            'pilihan_e' => 'Chocolatos',
            'jawaban' => 'pilihan_c',
        ]);

        Soal::create([
            'quiz_id' => 1,
            'soal' => 'assets/foto/3.png',
            'pilihan_a' => 'Nabati',
            'pilihan_b' => 'Nextar',
            'pilihan_c' => 'Helium',
            'pilihan_d' => 'Litium',
            'pilihan_e' => 'Chocolatos',
            'jawaban' => 'pilihan_d',
        ]);

        Soal::create([
            'quiz_id' => 1,
            'soal' => 'assets/foto/4.png',
            'pilihan_a' => 'Berilium',
            'pilihan_b' => 'Nextar',
            'pilihan_c' => 'Helium',
            'pilihan_d' => 'Litium',
            'pilihan_e' => 'Chocolatos',
            'jawaban' => 'pilihan_a',
        ]);

        Soal::create([
            'quiz_id' => 1,
            'soal' => 'assets/foto/5.png',
            'pilihan_a' => 'Nabati',
            'pilihan_b' => 'Booron',
            'pilihan_c' => 'Helium',
            'pilihan_d' => 'Litium',
            'pilihan_e' => 'Chocolatos',
            'jawaban' => 'pilihan_b',
        ]);
    }
}
