<?php

namespace projetoautomacao\Http\Controllers;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use projetoautomacao\User;

class PerfilUsuarioController extends Controller
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
		$usuario = auth()->user();
		return view("perfilusuario", compact("usuario"));
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
	 * @param  int  $usuario
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $usuario)
	{
		$data = $request->all();
		$perfil = $this->usuario::findOrFail($usuario);
		
		$this->validate($request, [
			'nome' => ['required', 'string', 'max:255'],
			'cpf' => ['required', 'cpf', Rule::unique('users')->ignore($perfil)],
			'email' => ['required', 'string', 'email', 'max:255', 'regex:/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i', Rule::unique('users')->ignore($perfil)],
			'laboratorio' => ['required', 'string'],
			'usuario' => ['required', 'string', 'min:6', 'max:15', 'regex:/^[a-z0-9_-]{6,15}$/', Rule::unique('users')->ignore($perfil)],
			'password' => ['required', 'required_with:password_confirmation', 'string', 'min:8', 'max:20', 'regex:/^[a-zA-Z0-9#$]{6,20}$/'],
			'password_confirmation' => ['required', 'string', 'min:8', 'max:20', 'regex:/^[a-zA-Z0-9#$]{6,20}$/', 'same:password'],
		]);

		$perfil->update([
			'nome' => $data['nome'],
			'cpf' => $data['cpf'],
			'email' => $data['email'],
			'laboratorio' => $data['laboratorio'],
			'usuario' => $data['usuario'],
			'password' => Hash::make($data['password'])
		]);

		flash('Dados atualizados com sucesso!')->success();
		return redirect()->route('home');
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
