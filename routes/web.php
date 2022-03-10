<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//create
Route::get('/contato', 'App\Http\Controllers\AgendaController@create');
Route::post('/contato', 'App\Http\Controllers\AgendaController@store')->name("registrar_contato");
//Read 
Route::get('/contato/acessar/{id}', 'App\Http\Controllers\AgendaController@show');
//Update
Route::get('contato/editar/{id}', 'App\Http\Controllers\AgendaController@update');
Route::post('contato/editar/{id}', 'App\Http\Controllers\AgendaController@edit_update')->name("alterar_contato");
//delete
Route::get('contato/deletar/{id}', 'App\Http\Controllers\AgendaController@getDelete');
Route::post('contato/deletar/{id}', 'App\Http\Controllers\AgendaController@delete')->name("deletar_contato");

