<?php

namespace projetoautomacao\Http\Controllers\Andares;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\SalasTerreo;
use projetoautomacao\Traits\LocalTrait;

class TerreoController extends Controller
{
	use LocalTrait;
	private $terreo;

	public function __construct(SalasTerreo $terreo)
	{
		$this->terreo = $terreo;
	}

	public function index()
	{
		$salas = $this->terreo->all(['sala_nome', 'id_sala', 'sala_localizacao']);
		return view('andares/terreo', compact('salas'));
	}

	public function show($id)
	{
		$salas = $this->terreo->all();
		flash('Conectando-se ao sistema')->warning();
		$data = $this->dadosLocal($salas, $id);
		return view('andares/salas/salasterreo', [
			'andar' => 'terreo',
			'sala_nome' => $data['sala_nome'],
			'sala_id' => $data['sala_id'],
			'qtd_circ_lampada' => $data['qtd_circ_lampada'],
			'qtd_arcondicionado' => $data['qtd_arcondicionado'],
			'coord_circ_lampadas1' => $data['coord_circ_lampadas1'],
			'coord_circ_lampadas2' => $data['coord_circ_lampadas2'],
			'coord_circ_lampadas3' => $data['coord_circ_lampadas3'],
			'coord_circ_lampadas4' => $data['coord_circ_lampadas4'],
			'coord_arcondicionado1' => $data['coord_arcondicionado1'],
			'coord_arcondicionado2' => $data['coord_arcondicionado2'],
			'coord_arcondicionado3' => $data['coord_arcondicionado3'],
			'coord_arcondicionado4' => $data['coord_arcondicionado4'],
			'coord_arcondicionado5' => $data['coord_arcondicionado5'],
		], compact($salas));
	}
}
