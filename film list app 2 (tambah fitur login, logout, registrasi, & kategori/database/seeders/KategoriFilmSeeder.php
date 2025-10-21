<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriFilm;

class KategoriFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama_kategori' => 'Aksi',
            ],
            [
                'nama_kategori' => 'Romantis',
            ],
            [
                'nama_kategori' => 'Horor',
            ],
            [
                'nama_kategori' => 'Dokumenter',
            ],
            [
                'nama_kategori' => 'Fiksi Ilmiah',
            ]
        ];

        foreach ($kategori as $item) {
            KategoriFilm::create($item);
        }
    }
}