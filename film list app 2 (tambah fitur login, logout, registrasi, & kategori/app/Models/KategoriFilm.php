<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriFilm extends Model
{
    protected $table = 'kategori_film';

    protected $fillable = [
        'nama_kategori',
    ];

    public function film(): HasMany
    {
        return $this->hasMany(Film::class, 'kategori_buku_id');
    }
}