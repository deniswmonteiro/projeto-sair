<?php

namespace projetoautomacao\Http\Controllers\Andares;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\SalasTerreo;

class TerreoController extends Controller
{
	private $terreo;

	public function __construct(SalasTerreo $terreo) 
	{
		$this->terreo = $terreo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$salas = $this->terreo->all(['sala_nome', 'id_sala', 'sala_localizacao']);
		return view('andares/terreo', compact('salas'));
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
			// $salas = $this->terreo->all();
			// dd(collect($salas[0]->estado_lampada)->get('c1'));
			
			// $data = $request->all();
			// SalasTerreo::create($data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$salas = $this->terreo->all();
		return view('andares/salas/salasterreo', [
			'andar' => 'terreo',
			'sala_id' => $id,
			'sala_nome' => $salas[--$id]->sala_nome,
			'qtd_circ_lampada' => $salas[$id]->qtd_circ_lampada,
			'qtd_arcondicionado' => $salas[$id]->qtd_arcondicionado,
			'coord_circ_lampadas1' => collect($salas[$id]->coord_circ_lampadas)->get('lampadas1'),
			'coord_circ_lampadas2' => collect($salas[$id]->coord_circ_lampadas)->get('lampadas2'),
			'coord_circ_lampadas3' => collect($salas[$id]->coord_circ_lampadas)->get('lampadas3'),
			'coord_circ_lampadas4' => collect($salas[$id]->coord_circ_lampadas)->get('lampadas4'),
			'coord_arcondicionado1' => collect($salas[$id]->coord_arcondicionado)->get('arcondicionado1'),
			'coord_arcondicionado2' => collect($salas[$id]->coord_arcondicionado)->get('arcondicionado2'),
			'coord_arcondicionado3' => collect($salas[$id]->coord_arcondicionado)->get('arcondicionado3'),
			'coord_arcondicionado4' => collect($salas[$id]->coord_arcondicionado)->get('arcondicionado4'),
			'coord_arcondicionado5' => collect($salas[$id]->coord_arcondicionado)->get('arcondicionado5')
		], compact('salas'));
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
			$salas = $this->terreo->all();
			$data = $request->all();
			
			// $id = $this->terreo::find($id);
			// $id->update($data);
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