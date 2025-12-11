<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentario extends Model
{
    protected $table = 'documentarios';

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
