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

    public static function especiesCadastradas()
    {
        return static::agruparPorColuna('especie');
    }

    public static function racasCadastradas()
    {
        return static::agruparPorColuna('raca');
    }

    public static function sexosCadastrados()
    {
        return static::agruparPorColuna('sexo');
    }

    public static function tamanhosCadastrados()
    {
        return static::agruparPorColuna('tamanho');
    }

    public static function agruparPorColuna(string $coluna)
    {
        return static::query()->select($coluna)->groupBy($coluna)->get()->pluck($coluna);
    }
}


