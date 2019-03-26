<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //definindo campos que podem ser atribuidos em massa
    protected $fillable = [
        'nome', 'email', 'telefone', 'mensagem', 'path_arquivo', 'ip_acesso'
    ];
}
