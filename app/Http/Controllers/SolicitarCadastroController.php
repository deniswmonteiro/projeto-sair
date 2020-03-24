<?php

namespace projetoautomacao\Http\Controllers;

use Illuminate\Http\Request;
use projetoautomacao\SolicitarCadastro;

//use Illuminate\Support\Facades\Validator;

class SolicitarCadastroController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('cadastro');
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
		$data = $request->validate([
			'nome' => 'required|string|max:255',
			'cpf' => 'required|cpf|unique:solicitar_cadastro',
			'email' => 'required|string|max:255|regex:/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i|unique:solicitar_cadastro',
			'usuario' => 'required|string|min:6|max:6|regex:/^[a-z0-9_-]{6,15}$/|unique:solicitar_cadastro',
			'laboratorio' => 'required|string'
		]);
		SolicitarCadastro::create($data);
		flash('Solicitação feita com sucesso! Aguarde liberação do administrador.')->success();
		return redirect()->route('home');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
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
