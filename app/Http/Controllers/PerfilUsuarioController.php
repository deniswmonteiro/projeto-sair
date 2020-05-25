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

	public function index()
	{
		$usuarioLogado = auth()->user();
		return view("perfilusuario", compact("usuarioLogado"));
	}

	public function update(Request $request, $usuario)
	{
		$data = $request->all();
		$perfil = $this->usuario::findOrFail(decrypt($usuario));
		
		$this->validate($request, [
			'nome' => ['required', 'string', 'max:255'],
			'cpf' => ['required', 'cpf', Rule::unique('users')->ignore($perfil)],
			'email' => ['required', 'string', 'email', 'max:255', 'regex:/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i', Rule::unique('users')->ignore($perfil)],
			'laboratorio' => ['required', 'string'],
			'usuario' => ['required', 'string', 'min:6', 'max:20', 'regex:/^[a-z0-9_-]{6,20}$/', Rule::unique('users')->ignore($perfil)],
			'chk_senha' => [],
			'password' => [Rule::requiredIf($request->request->has("chk_senha")), 
				function ($attr, $valor, $mensagem) use ($perfil) {
					if (!Hash::check($valor, $perfil->password)) {
						return $mensagem(__('A senha está incorreta!'));
					}
				}, 'regex:/^[a-zA-Z0-9#$]{6,20}$/', 'string', 'min:8', 'max:20'],
			'new_password' => [Rule::requiredIf($request->request->has("password")), 'required_with:password', 'regex:/^[a-zA-Z0-9#$]{6,20}$/', 'string', 'min:8', 'max:20'],
			'password_confirmation' => [Rule::requiredIf($request->request->has("password")), 'required_with:new_password', 'regex:/^[a-zA-Z0-9#$]{6,20}$/', 'string', 'min:8', 'max:20', 'same:new_password'],
		]);

		if($request->request->has("new_password")) {
			$perfil->update([
				'nome' => $data['nome'],
				'cpf' => $data['cpf'],
				'email' => $data['email'],
				'laboratorio' => $data['laboratorio'],
				'usuario' => $data['usuario'],
				'password' => Hash::make($data['new_password']),
			]);
		}

		else {
			$perfil->update([
				'nome' => $data['nome'],
				'cpf' => $data['cpf'],
				'email' => $data['email'],
				'laboratorio' => $data['laboratorio'],
				'usuario' => $data['usuario'],
			]);
		}

		flash('Dados atualizados com sucesso!')->success();
		return redirect()->route('home');
	}

	public function destroy($usuario)
	{
		//
	}
}
