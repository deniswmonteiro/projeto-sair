<?php

namespace projetoautomacao\Http\Controllers\Andares;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\SalasPrimeiroAndar;
use projetoautomacao\Traits\LocalTrait;

class PrimeiroAndarController extends Controller
{
	use LocalTrait;
	private $primeiroAndar;

	public function __construct(SalasPrimeiroAndar $primeiroAndar)
	{
		$this->primeiroAndar = $primeiroAndar;
	}

	public function index()
	{
		$salas = $this->primeiroAndar->all(['sala_nome', 'id_sala', 'sala_localizacao']);
		return view('andares/primeiroandar', compact('salas'));
	}

	public function show($id)
	{
		$salas = $this->primeiroAndar->all();
		flash('Conectando-se ao sistema')->warning();
		$data = $this->dadosLocal($salas, $id);
		return view('andares/salas/salasprimeiroandar', [
			'andar' => 'primeiroandar',
			'sala_nome' => $data['sala_nome'],
			'sala_id' => $data['sala_id'],
			'qtd_circ_lampada' => $data['qtd_circ_lampada'],
			'qtd_arcondicionado' => $data['qtd_arcondicionado'],
			'coord_circ_lampadas1' => $data['coord_circ_lampadas1'],
			'coord_circ_lampadas2' => $data['coord_circ_lampadas2'],
			'coord_circ_lampadas3' => $data['coord_circ_lampadas3'],
			'coord_arcondicionado1' => $data['coord_arcondicionado1'],
			'coord_arcondicionado2' => $data['coord_arcondicionado2']
		], compact($salas));
	}
}
