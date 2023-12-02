<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

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

    public function fotoPrincipal(): string
    {
        return $this->fotos->first()?->imagem;
    }

    public static function especiesCadastradas() : Collection
    {
        return static::agruparPorColuna('especie');
    }

    public static function racasCadastradas() : Collection
    {
        return static::agruparPorColuna('raca');
    }

    public static function sexosCadastrados() : Collection
    {
        return static::agruparPorColuna('sexo');
    }

    public static function tamanhosCadastrados() : Collection
    {
        return static::agruparPorColuna('tamanho');
    }

    public static function agruparPorColuna(string $coluna) : Collection
    {
        return static::query()->select($coluna)->groupBy($coluna)->get()->pluck($coluna);
    }
}


