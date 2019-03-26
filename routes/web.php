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

//vamos fazer a pagina inicial redirecinar para pagina de contato
Route::get('/', function () {
    return redirect('/contato');
});

//pagina do formulario
Route::get('/contato', 'ContatoController@index');

//guardando o contato
Route::post('/contato/enviado', 'ContatoController@salvar');
