<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Mahasiswa::factory(10)->create();

        \App\Models\Mahasiswa::create([
            'id' => 1,
            'nama' => 'Juned',
            'nrp' => 51721875,
            'prodi' => 'Teknik Informatika'
        ]);
        \App\Models\Mahasiswa::create([
            'id' => 2,
            'nama' => 'Dani',
            'nrp' => 41789591,
            'prodi' => 'Teknik Informatika'
        ]);
        \App\Models\Mahasiswa::create([
            'id' => 3,
            'nama' => 'Jefa',
            'nrp' => 33219853,
            'prodi' => 'Sistem Informasi'
        ]);
        \App\Models\Mahasiswa::create([
            'id' => 4,
            'nama' => 'Udin',
            'nrp' => 12948219,
            'prodi' => 'Teknik Telekomunikasi'
        ]);
        \App\Models\Mahasiswa::create([
            'id' => 5,
            'nama' => 'Reza',
            'nrp' => 24139842,
            'prodi' => 'Ilmu Kimia'
        ]);
    }
}
