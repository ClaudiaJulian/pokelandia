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

Route::get('/', 'WebController@inicio')->name('inicio');

Route::prefix('pokemon')->name('pokemon.')->group(function () {
    Route::get('/','PokemonController@todos')->name('todos');
    Route::get('/nuevo','PokemonController@nuevo')->name('nuevo');
    Route::post('nuevo','PokemonController@guardar')->name('guardar');
    Route::get('/{id}','PokemonController@uno')->name('uno');
    Route::get('/{name}/editar','PokemonController@editar')->name('editar');
    Route::post('/{name}/editar','PokemonController@guardarCambios')->name('guardar');
    Route::put('/{pokemon}', 'PokemonController@actualizar')->name('actualizar');
    Route::get('{id}/borrar', 'PokemonController@borrar')->name('borrar');
});

Route::get('/type','TypeController@todos')->name('tipos');
Route::get('/type/nuevo','TypeController@nuevo')->name('nuevo');
Route::post('type/nuevo','TypeController@guardar')->name('guardar');
Route::get('/type/{name}', 'TypeController@uno')->name('tipo');
Route::get('type/{name}/editar','TypeController@editar')->name('editar');
Route::post('type/{name}/editar','TypeController@guardarCambios')->name('guardar');
Route::get('/type/{id}/borrar', 'TypeController@borrar')->name('borrar');