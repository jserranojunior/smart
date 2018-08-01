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

Route::get('/', function () {
    return view('inicio');
});


Route::get('funcionarios', 'Rh\funcionariosController@index')->name('funcionarios');
Route::get('funcionarios/editar/{id}', 'Rh\funcionariosController@edit')->name('funcionarios.editar');

Route::get('variaveis', 'Rh\variaveisMensaisController@index')->name('variaveis');

Route::get('diastrabalhados', 'Rh\diasTrabalhadosController@index')->name('diastrabalhados');

Route::get('financeiro','Financeiro\FinanceiroController@index');