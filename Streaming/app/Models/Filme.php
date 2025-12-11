<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filmes';

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
    ];
}
