<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', array(
	'as'=>'home',function()
	{
		return View::make('default.inicio');
	}));

Route::get('pelicula', array('as' => 'pelicula', 'uses' => 'PeliculaController@get_index'));
Route::get('pelicula/create', array('as' => 'pelicula.create', 'uses' => 'PeliculaController@get_create'));
Route::post('pelicula/save', array('as' => 'pelicula.save', 'uses' => 'PeliculaController@post_save'));
Route::get('pelicula/update/{id_pelicula}', array('as' => 'pelicula.update', 'uses' => 'PeliculaController@get_update'));
Route::get('pelicula/view/{id_pelicula}', array('as' => 'pelicula.view', 'uses' => 'PeliculaController@get_view'));
Route::get('pelicula/delete/{id_pelicula}', array('as' => 'pelicula.delete', 'uses' => 'PeliculaController@get_delete'));
