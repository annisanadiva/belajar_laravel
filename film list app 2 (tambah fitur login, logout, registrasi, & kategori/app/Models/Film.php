<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Film extends Model
{
    protected $table = 'film';

    protected $fillable = [
        'judul',
        'pemeran',
        'rumah_produksi',
        'kategori_film_id'
    ];

    public function kategoriFilm(): BelongsTo
    {
        return $this->belongsTo(KategoriFilm::class, 'kategori_film_id');
    }
}
