<?php

namespace projetoautomacao;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EstadoLampada extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'estado_lampada';
    protected $fillable = [
        'teste'
    ];
    protected $guarded = ['id'];
}
