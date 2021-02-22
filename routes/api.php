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
    Route::get('tasks', 'tasksController@index');
	Route::get('tasks/{id}', 'tasksController@show');
	Route::post('tasks', 'tasksController@store');
	Route::put('tasks/{id}', 'tasksController@update');
	Route::delete('tasks/{id}', 'tasksController@delete');

});