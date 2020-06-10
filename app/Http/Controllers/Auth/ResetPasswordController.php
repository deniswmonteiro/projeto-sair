<?php

namespace projetoautomacao\Http\Controllers\Auth;

use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

	use ResetsPasswords;

	/**
	 * Where to redirect users after resetting their password.
	 *
	 * @var string
	 */
	protected $redirectTo = RouteServiceProvider::HOME;

	// protected function sendResetLinkResponse(Request $request, $response)
	// {
	// 	return response(['message' => trans($response)]);
	// }

	// protected function sendResetLinkFailedResponse(Request $request, $response)
	// {
	// 	return response(['error' => trans($response)], 442);
	// }

	// protected function rules()
	// {
	// 	return [
	// 		'token' => 'required',
	// 		'email' => ['required', 'string', 'max:255', 'regex:/^[a-z0-9._-]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i', 'unique:solicitar_cadastro', 'unique:users'],
	// 		'password' => 'required', 'required_with:password_confirmation', 'string', 'min:8', 'max:20', 'regex:/^[a-zA-Z0-9@#$%!^&*-]{8,20}$/',
	// 		'password_confirmation' => ['required', 'string', 'min:8', 'max:20', 'regex:/^[a-zA-Z0-9@#$%!^&*-]{8,20}$/', 'same:password'],
	// 	];
	// }

	protected function reset() {
		flash('Senha redefinida com sucesso!')->success();
		return redirect()->route('login');
	}
}
