<?php

namespace projetoautomacao;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class SalasSegundoAndar extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'salas_segundo_andar';
	protected $fillable = [
		'id_sala', 'sala_nome', 'qtd_circ_lampada', 'qtd_arcondicionado', 'coord_circ_lampadas', 'coord_arcondicionado'
	];
	protected $guarded = ['id'];
}
