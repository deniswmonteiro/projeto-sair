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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/cadastro', 'CadastroController');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('terreo', 'TerreoController');
    Route::resource('primeiroandar', 'PrimeiroAndarController');
    Route::resource('segundoandar', 'SegundoAndarController');
});

Auth::routes();