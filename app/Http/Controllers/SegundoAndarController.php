<?php

namespace projetoautomacao\Http\Controllers;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\SalasSegundoAndar;

class SegundoAndarController extends Controller
{
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
		return view('segundoandar', compact('salas'));
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
		$sala = $this->segundoAndar->all();
		return view('salas-segundo-andar', [
			'sala_id' => $id,
			'sala_nome' => $sala[--$id]->sala_nome,
			'qtd_circ_lampada' => $sala[$id]->qtd_circ_lampada,
			'qtd_arcondicionado' => $sala[$id]->qtd_arcondicionado,
			'coord_circ_lampadas1' => collect($sala[$id]->coord_circ_lampadas)->get('lampadas1'),
			'coord_circ_lampadas2' => collect($sala[$id]->coord_circ_lampadas)->get('lampadas2'),
			'coord_circ_lampadas3' => collect($sala[$id]->coord_circ_lampadas)->get('lampadas3'),
			'coord_arcondicionado1' => collect($sala[$id]->coord_arcondicionado)->get('arcondicionado1')
		]);
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
