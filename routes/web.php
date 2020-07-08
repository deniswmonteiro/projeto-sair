<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('cadastro', 'SolicitarCadastroController')->only(['index', 'store']);

Route::namespace('Auth')->group(function () {
	Route::get('senha/redefinir', 'ForgotPasswordController@showLinkRequestForm')->name('senha.request');
	Route::post('senha/email', 'ForgotPasswordController@sendResetLinkEmail')->name('senha.email');
	Route::get('senha/redefinir/{token}', 'ResetPasswordController@showResetForm')->name('senha.reset.token');
	Route::post('senha/redefinir', 'ResetPasswordController@reset')->name('senha.reset');
});

Route::group(['middleware' => ['auth']], function () {
	Route::namespace('Andares')->group(function () {
		Route::resource('terreo', 'TerreoController')->only(['index', 'show']);
		Route::resource('primeiroandar', 'PrimeiroAndarController')->only(['index', 'show']);
		Route::resource('segundoandar', 'SegundoAndarController')->only(['index', 'show']);
	});

	Route::resource('perfil', 'PerfilUsuarioController')->only(['index', 'update', 'destroy']);

	Route::prefix('usuarios')->namespace('Auth')->name('usuarios.')->group(function () {
		Route::get('cadastrar', 'RegisterController@showRegistrationForm')->name('form');
		Route::post('cadastro', 'RegisterController@register')->name('cadastro');
	});

	Route::namespace('Admin')->group(function () {
		Route::group(['middleware' => ['checar.categoria']], function () {
			Route::resource('solicitar', 'SolicitacoesController')->only([
				'index', 'store', 'edit', 'destroy'
			]);
			Route::get('solicitar/editar/{slug?}', 'SolicitacoesController@edit')->name('solicitar.editar');

			Route::resource('usuario', 'UsuarioController')->only([
				'index', 'edit', 'update', 'destroy'
			]);;
			Route::get('usuario/editar/{slug?}', 'UsuarioController@edit')->name('usuario.editar');
			Route::post('usuario', 'UsuarioController@pesquisar')->name('usuario.pesquisar');
		});
	});
});
