<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotosAnuncios extends Model
{
    use HasFactory;
    protected $table = 'foto_anuncios';
    public $timestamps = false;
}

