<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class serie extends Model
{
    protected $table = 'series';

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
        'numero_temporadas',
        'numero_episodios',
    ];
}
