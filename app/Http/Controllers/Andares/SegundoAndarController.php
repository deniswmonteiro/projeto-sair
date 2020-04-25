<?php

namespace projetoautomacao\Http\Controllers\Andares;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\SalasSegundoAndar;
use projetoautomacao\Traits\LocalTrait;

class SegundoAndarController extends Controller
{
	use LocalTrait;
	private $segundoAndar;

	public function __construct(SalasSegundoAndar $segundoAndar)
	{
		$this->segundoAndar = $segundoAndar;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$salas = $this->segundoAndar->all(['sala_nome', 'id_sala', 'sala_localizacao']);
		return view('andares/segundoandar', compact('salas'));
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
		$salas = $this->segundoAndar->all();
		flash('Conectando-se ao sistema')->success();
		$data = $this->dadosLocal($salas, $id);
		return view('andares/salas/salassegundoandar', [
			'andar' => 'segundoandar',
			'sala_nome' => $data['sala_nome'],
			'sala_id' => $data['sala_id'],
			'qtd_circ_lampada' => $data['qtd_circ_lampada'],
			'qtd_arcondicionado' => $data['qtd_arcondicionado'],
			'coord_circ_lampadas1' => $data['coord_circ_lampadas1'],
			'coord_circ_lampadas2' => $data['coord_circ_lampadas2'],
			'coord_arcondicionado1' => $data['coord_arcondicionado1']
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
