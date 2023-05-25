<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnunciosAdocao extends Model
{
    use HasFactory;
    protected $table = 'anuncio_adocao';
    public $timestamps = false;
}

