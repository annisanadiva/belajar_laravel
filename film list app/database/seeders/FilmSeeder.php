<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film')->insert([
            [
                'judul' => 'A Beautiful Mind',
                'pemeran' => 'Russell Crowe',
                'rumah_produksi' => 'Imagine Entertainment',
                'created' => now(),
                'updated' => now(),
            ],
            [
                'judul' => 'The Monkey',
                'pemeran' => 'Theo James',
                'rumah_produksi' => 'Atomic Monster',
                'created' => now(),
                'updated' => now(),
            ],
        ]);
    }
}