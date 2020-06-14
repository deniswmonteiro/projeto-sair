<?php

namespace projetoautomacao\Http\Controllers\Auth;

use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\Traits\RedefinirSenhaTrait;

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

	/** Trait de origem 
	 * use Illuminate\Foundation\Auth\ResetsPasswords;
	 * use ResetsPasswords;
	 **/
	use RedefinirSenhaTrait;
}
