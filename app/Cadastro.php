<?php

namespace projetoautomacao;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cadastro extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'cadastro';
    protected $fillable = [
        'id_sala', 'sala_nome', 'sala_localizacao', 'qtd_circ_lampada', 'qtd_arcondicionado', 'coord_circ_lampadas', 'coord_arcondicionado'
    ];
    protected $guarded = ['id'];
}
