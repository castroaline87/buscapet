<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotosAnuncios extends Model
{
    use HasFactory;
    protected $table = 'foto_anuncios';
    public $timestamps = false;
    public function anuncio(): BelongsTo
    {
        return $this->belongsTo(AnuncioAdocao::class, 'id_anuncio_adocao');
    }
}

