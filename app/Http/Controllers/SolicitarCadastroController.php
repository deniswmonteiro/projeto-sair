<?php

namespace projetoautomacao\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use projetoautomacao\SolicitarCadastro;

class SolicitarCadastroController extends Controller
{
	public function index()
	{
		return view('cadastro');
	}

	public function store(Request $request)
	{
		$data = $request->validate([
			'nome' => ['required', 'string', 'max:255'],
			'cpf' => ['required', 'cpf', 'unique:solicitar_cadastro', 'unique:users'],
			'email' => ['required', 'string', 'max:255', 'regex:/^[a-z0-9._-]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i', 'unique:solicitar_cadastro', 'unique:users'],
			'laboratorio' => ['required', 'string'],
			'usuario' => ['required', 'string', 'min:6', 'max:20', 'regex:/^[a-z0-9_-]{6,20}$/','unique:solicitar_cadastro', 'unique:users'],
			'password' => ['required', 'required_with:password_confirmation', 'string', 'min:8', 'max:20', 'regex:/^[a-zA-Z0-9@#$%!^&*]{6,20}$/'],
			'password_confirmation' => ['required', 'string', 'min:8', 'max:20', 'regex:/^[a-zA-Z0-9@#$%!^&*]{6,20}$/', 'same:password'],
		]);

		SolicitarCadastro::create([
			'nome' => $data['nome'],
			'cpf' => $data['cpf'],
			'email' => $data['email'],
			'laboratorio' => $data['laboratorio'],
			'usuario' => $data['usuario'],
			'password' => Hash::make($data['password'])
		]);

		flash('Solicitação feita com sucesso! Aguarde liberação do administrador.')->success();
		return redirect()->route('home');
	}
}
