<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    public $timestamps = false;
    public function anuncios(): HasMany
    {
        return $this->hasMany(AnunciosAdocao::class, 'id_usuario');
    }
}

