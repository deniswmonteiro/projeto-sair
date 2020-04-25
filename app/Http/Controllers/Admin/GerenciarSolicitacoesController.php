<?php

namespace projetoautomacao\Http\Controllers\Admin;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\SolicitarCadastro;

class GerenciarSolicitacoesController extends Controller
{
	private $solicitacao;

	public function __construct(SolicitarCadastro $solicitacao)
	{
		$this->solicitacao = $solicitacao;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$solicitacoes = $this->solicitacao->all();
		return view('admin/solicitacoes/gerenciarsolicitacoes', compact('solicitacoes'));
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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $solicitacao
	 * @return \Illuminate\Http\Response
	 */
	public function edit($solicitacao)
	{
		$solicitacoes = $this->solicitacao->whereSlug($solicitacao)->first();
		return view('admin/solicitacoes/editarsolicitacao', compact('solicitacoes'));
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
	 * @param  int  $solicitacao
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($solicitacao)
	{
		$solicitacao = $this->solicitacao::find($solicitacao);
		$solicitacao->delete();
		flash('Solicitação removida com sucesso')->success();
		return redirect()->route('gerenciarsolicitacoes.index');
	}
}
