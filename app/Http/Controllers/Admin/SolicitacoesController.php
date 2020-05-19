<?php

namespace projetoautomacao\Http\Controllers\Admin;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\SolicitarCadastro;
use projetoautomacao\User;

class SolicitacoesController extends Controller
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
		$usuarios = $this->solicitacao->all();
		return view('admin/solicitacoes/gerenciarsolicitacoes', compact('usuarios'));
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
		$data = $request->all();
		$solicitacao = $this->dadosSolicitacao($data['usuario']);

		$this->validate($request, [
			'nome' => ['required', 'string', 'max:255'],
			'cpf' => ['required', 'cpf', 'unique:users'],
			'email' => ['required', 'string', 'email', 'max:255', 'regex:/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i', 'unique:users'],
			'laboratorio' => ['required', 'string'],
			'categoria' => ['required', 'string'],
			'usuario' => ['required', 'string', 'min:6', 'max:15', 'regex:/^[a-z0-9_-]{6,15}$/', 'unique:users'],
		]);
		
		User::create([
			'nome' => $data['nome'],
			'cpf' => $data['cpf'],
			'email' => $data['email'],
			'laboratorio' => $data['laboratorio'],
			'categoria' => $data['categoria'],
			'usuario' => $data['usuario'],
			'password' => $solicitacao,
		]);
		
		flash('Cadastro realizado com sucesso!')->success();
		return redirect()->route('solicitar.index');
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
		flash('Solicitação removida com sucesso!')->success();
		return redirect()->route('solicitar.index');
	}

	public function dadosSolicitacao($data) {
		$solicitacoes = $this->solicitacao::all(['usuario', 'password']);

		foreach($solicitacoes as $solicitacao) {
			if($data == $solicitacao->usuario){
				$solicitacao->delete();
				return $solicitacao->password;
			}
		}
	}
}
