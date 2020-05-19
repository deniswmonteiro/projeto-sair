<?php

namespace projetoautomacao\Http\Controllers\Admin;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use projetoautomacao\User;

class UsuarioController extends Controller
{
	private $usuario;

	public function __construct(User $usuario)
	{
		$this->usuario = $usuario;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$usuarios = $this->usuario->all(['nome', 'email', 'categoria', 'laboratorio', 'slug']);
		return view('admin/usuarios/usuarios', compact('usuarios'));
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
	 * @param  int  $usuario
	 * @return \Illuminate\Http\Response
	 */
	public function edit($usuario)
	{
		$usuarios = $this->usuario->whereSlug($usuario)->first();
		return view('admin/usuarios/editarusuario', compact('usuarios'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $usuario
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $usuario)
	{
		$data = $request->all();
		$usuario = $this->usuario::findOrFail($usuario);

		$this->validate($request, [
			'nome' => ['required', 'string', 'max:255'],
			'cpf' => ['required', 'cpf', Rule::unique('users')->ignore($usuario)],
			'email' => ['required', 'string', 'email', 'max:255', 'regex:/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i', Rule::unique('users')->ignore($usuario)],
			'laboratorio' => ['required', 'string'],
			'categoria' => ['required', 'string'],
			'usuario' => ['required', 'string', 'min:6', 'max:15', 'regex:/^[a-z0-9_-]{6,15}$/', Rule::unique('users')->ignore($usuario)],
		]);

		$usuario->update($data);
		flash('Dados atualizados com sucesso!')->success();
		return redirect()->route('usuario.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $usuario
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($usuario)
	{
		$usuario = $this->usuario::find($usuario);
		$usuario->delete();
		flash('Usuário(a) removido do sistema')->success();
		return redirect()->route('usuario.index');
	}

	public function pesquisar(Request $request)
	{
		$usuarios = $this->usuario::where('nome', 'like', '%' . $request->input('buscar') . '%')->get();

		foreach($usuarios as $usuario) {
			if($usuario->nome) {
				return view('admin/usuarios/usuarios', compact('usuarios'));
			}
		}
		
		$usuarios = $this->usuario->all(['nome', 'email', 'categoria', 'laboratorio', 'slug']);
		flash('Usuário(a) não encontrado!')->warning();
		return view('admin/usuarios/usuarios', compact('usuarios'));
	}
}
