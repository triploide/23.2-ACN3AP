<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Lista todas las entidades
    public function index()
    {
        $movies = Movie::all();

        return view('example.models.index', compact('movies'));
    }

    // Muestra el formulario de creación para una entidad
    public function create()
    {
        return view('example.models.create');
    }

    // Crea una entidad en la base de datos
    public function store()
    {
        $movie = new Movie;
        $movie->title = request()->input('title');
        $movie->year = request()->input('year');
        $movie->runtime = request()->input('runtime');
        $movie->genre = request()->input('genre');
        $movie->plot = request()->input('plot');
        $movie->poster = request()->input('poster');
        $movie->save();

        return redirect('example/movies');
    }

    // Muestra el formulario de edición para una entidad
    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('example.models.edit', compact('movie'));
    }

    // Edita una entidad de la base de datos
    public function update($id)
    {
        $movie = Movie::find($id);
        $movie->title = request()->input('title');
        $movie->year = request()->input('year');
        $movie->runtime = request()->input('runtime');
        $movie->genre = request()->input('genre');
        $movie->plot = request()->input('plot');
        $movie->poster = request()->input('poster');
        $movie->save();

        return redirect('example/movies');
    }
}
