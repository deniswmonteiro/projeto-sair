<?php

namespace projetoautomacao;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class SolicitarCadastro extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'solicitar_cadastro';
    protected $fillable = [
        'nome', 'cpf', 'email', 'laboratorio'
    ];
    protected $guarded = ['id'];
}
