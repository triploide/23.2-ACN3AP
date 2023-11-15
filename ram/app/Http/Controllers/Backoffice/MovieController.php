<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('backoffice.movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();

        return view('backoffice.movies.create', compact('genres'));
    }

    public function store()
    {
        // $movie = new Movie;
        // $movie->title = request()->input('title');
        // $movie->released_date = request()->input('released_date');
        // $movie->rating = request()->input('rating');
        // $movie->genre_id = request()->input('genre_id');
        // $movie->description = request()->input('description');
        // $movie->save();

        Movie::create(request()->all());

        return redirect()->route('backoffice.movies.index');
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::all();

        return view('backoffice.movies.edit', compact('movie', 'genres'));
    }

    public function update(Movie $movie)
    {
        $movie->update(request()->all());

        return redirect()->route('backoffice.movies.index');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('backoffice.movies.index');
    }
}
