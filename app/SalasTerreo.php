<?php

namespace projetoautomacao;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class SalasTerreo extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'salas_terreo';
	protected $fillable = [
		'id_sala', 'sala_nome', 'sala_localizacao', 'qtd_circ_lampada', 'qtd_arcondicionado', 'coord_circ_lampadas', 'coord_arcondicionado'
	];
	protected $guarded = ['id'];
}
