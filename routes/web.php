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

// route inicial (default) de teste do Laravel
//Route::view('/','welcome');


// route para a página inicial
Route::view('/','welcome');
Route::view('arrendar','arrendar');
Route::resource('home', 'HomeController');
Route::resource('contactos', 'ContactosController');
Route::resource('sobre-nos', 'SobrenosController');

Route::get('propriedade', ['as' => 'propriedade', 'uses' => 'PropriedadeController@index']);

Route::get('comprar',['as' => 'propriedade', 'uses' => 'PropriedadeController@procurar']);



