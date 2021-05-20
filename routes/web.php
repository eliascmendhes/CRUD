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
    return view('alunos.create');
});

Route::get('/alunos/novo', 'AlunosController@create')->name('create');

Route::post('/alunos/novo', 'AlunosController@store')->name('submitAluno');

Route::get('alunos/visualizar', 'AlunosController@show')->name('show');
Route::get('/alunos/delete/{id}','AlunosController@destroy')->name('excluir');
Route::get('/alunos/edite/{id}','AlunosController@edite')->name('editar');
Route::post('/alunos/edite/{id}','AlunosController@update')->name('editar_new');
