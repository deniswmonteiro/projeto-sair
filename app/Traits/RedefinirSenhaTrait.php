<?php

namespace projetoautomacao\Traits;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

trait RedefinirSenhaTrait
{
	public function showResetForm(Request $request, $token = null)
	{
		return view('auth.passwords.reset')->with(
			['token' => $token, 'email' => $request->email]
		);
	}

	public function reset(Request $request)
	{
		$request->validate($this->rules(), $this->validationErrorMessages());
		$response = $this->broker()->reset(
			$this->credentials($request),
			function ($user, $password) {
				$this->resetPassword($user, $password);
			}
		);

		return $response == Password::PASSWORD_RESET
			? $this->sendResetResponse($request, $response)
			: $this->sendResetFailedResponse($request, $response);
	}

	protected function rules()
	{
		return [
			'token' => ['required'],
			'email' => ['required', 'email'],
			'password' => ['required', 'confirmed', 'string', 'min:8', 'max:20', 'regex:/^[a-zA-Z0-9@#$%!^&*-]{8,20}$/'],
		];
	}

	protected function validationErrorMessages()
	{
		return [];
	}

	protected function credentials(Request $request)
	{
		return $request->only(
			'email',
			'password',
			'password_confirmation',
			'token'
		);
	}

	protected function resetPassword($user, $password)
	{
		$this->setUserPassword($user, $password);

		$user->setRememberToken(Str::random(60));

		$user->save();

		event(new PasswordReset($user));

		//$this->guard()->login($user);
	}

	protected function setUserPassword($user, $password)
	{
		$user->password = Hash::make($password);
	}

	protected function sendResetResponse(Request $request, $response)
	{
		flash("Senha redefinida com sucesso!")->success();
		return redirect()->route('login')
			->with('status', trans($response));
	}

	protected function sendResetFailedResponse(Request $request, $response)
	{
		return redirect()->back()
			->withInput($request->only('email'))
			->withErrors(['email' => trans($response)]);
	}

	public function broker()
	{
		return Password::broker();
	}

	protected function guard()
	{
		return Auth::guard();
	}
}
