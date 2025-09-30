<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';

    protected $fillable = [
        'judul',
        'pemeran',
        'rumah_produksi'
    ];
}
