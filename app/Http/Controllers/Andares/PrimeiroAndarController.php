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

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$salas = $this->primeiroAndar->all(['sala_nome', 'id_sala', 'sala_localizacao']);
		return view('andares/primeiroandar', compact('salas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$salas = $this->primeiroAndar->all();
		flash('Conectando-se ao sistema')->success();
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
			'coord_circ_lampadas4' => $data['coord_circ_lampadas4'],
			'coord_arcondicionado1' => $data['coord_arcondicionado1'],
			'coord_arcondicionado2' => $data['coord_arcondicionado2']
		], compact($salas));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
