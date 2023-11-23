<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnunciosAdocao extends Model
{
    use HasFactory;
    protected $table = 'anuncio_adocao';
    public $timestamps = false;
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
    public function fotos(): HasMany
    {
        return $this->hasMany(FotosAnuncios::class, 'id_anuncio_adocao');
    }
}


