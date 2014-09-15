<?php

class PeliculaController extends BaseController {

	public function get_index()
	{

        $peliculas = Pelicula::all();
		return View::make('pelicula.index')->with('peliculas',$peliculas);
	}

	public function get_create()
	{

		return View::make('pelicula.create');
	}

	public function get_update($id_pelicula)
	{
		$pelicula = Pelicula::find($id_pelicula);
		$pelicula->nombre = "Teminator genesis";
		$pelicula->duracion = "3 horas";
		$pelicula->save();
		return Redirect::to('pelicula');
	}

	public function post_save()
	{

		$pelicula = new Pelicula;
		$pelicula->nombre = Input::get('nombre');
		$pelicula->duracion = Input::get('duracion');
		$pelicula->save();
		return Redirect::to('pelicula');
	}

}
