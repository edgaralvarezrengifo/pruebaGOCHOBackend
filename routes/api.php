<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => 'auth:api'], function() {
    Route::get('tareas/Consultar', 'tasksController@index');
	Route::get('tareas/Consultar/{id}', 'tasksController@show');
	Route::post('tareas/crear', 'tasksController@store');
	Route::put('tareas/actualizar/{id}', 'tasksController@update');
	Route::delete('tareas/borrar/{id}', 'tasksController@delete');

});