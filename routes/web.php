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
    return view('welcome');
});

Route::get('/estudiante','EstudentRegController@index');
Route::get('/registro','EstudentRegController@crear');
Route::get('/lista','EstudentRegController@lista');
Route::get('/elimina/{id}', 'EstudentRegController@elimina');
Route::get('/modifica/{id}', 'EstudentRegController@estudiante');

Route::post('/registrar', ['as'=>'/registrar','uses'=>'EstudentRegController@inserta']);
Route::post('/modifica', ['as'=>'/modifica','uses'=>'EstudentRegController@modifica']);

