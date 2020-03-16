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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('cadastro', 'SolicitarCadastroController');

Route::group(['middleware' => ['auth']], function() {
    Route::namespace('Andares')->group(function() {
        Route::resource('terreo', 'TerreoController');
        Route::resource('primeiroandar', 'PrimeiroAndarController');
        Route::resource('segundoandar', 'SegundoAndarController');
        Route::resource('estadolampada', 'EstadoLampadaController');
    });

    Route::prefix('usuarios')->namespace('Auth')->name('usuarios.')->group(function() {
        Route::get('cadastro', 'RegisterController@showRegistrationForm')->name('form');
        Route::post('cadastro', 'RegisterController@register')->name('cadastro');
    });

    Route::namespace('Admin')->group(function() {
        Route::group(['middleware' => ['checar.categoria']], function() {
            Route::get('usuarios/gerenciarsolicitacoes/visualizar/{gerenciarsolicitacao}', 'GerenciarSolicitacoesController@edit')->name('gerenciarsolicitacoes.visualizar');
            Route::resource('usuarios/gerenciarsolicitacoes', 'GerenciarSolicitacoesController');
            Route::get('usuarios/atualizar/{usuario}', 'UsuarioController@edit')->name('usuarios.editar');
            Route::resource('usuarios', 'UsuarioController');
        });
    });
});

Route::resource('email', 'Admin\EmailController');