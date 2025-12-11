<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'animes';

    protected $fillable = [
        'titulo',
        'descricao',
        'data_lancamento',
        'genero',
        'diretor',
        'duracao',
        'classificacao',
        'idioma',
        'legendas',
        'url_capa',
        'estudio',
        'numero_episodios',
    ];
}
