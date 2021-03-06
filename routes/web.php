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

Route::get('usuarios', 'UsuariosController@index');


Route::group(['middleware' => 'web'], function (){
    Route::get('/', 'HomeController@index'); /*Para ir direto pra home, para pag solitada */

    Route::auth();
    
    Route::get('/home', 'HomeController@index');

    Route::get('clientes', 'ClientesController@index');
    Route::get('clientes/novo', 'ClientesController@novo');
    Route::get('clientes/{cliente}/editar', 'ClientesController@editar');
    Route::post('clientes/salvar', 'ClientesController@salvar');
    Route::patch('clientes/{cliente}', 'ClientesController@atualizar');
    Route::delete('clientes/{cliente}', 'ClientesController@deletar');

});



