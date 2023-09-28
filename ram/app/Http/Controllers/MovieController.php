<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getMovies() : array
    {
        return json_decode(file_get_contents('movies.json'), true);
    }

    public function getMovieById($id) : ?array
    {
        $response = null;

        foreach ($this->getMovies() as $movie) {
            if ($movie['id'] == $id) {
                $response = $movie;
                break;
            }
        }

        return $response;
    }

    public function index()
    {
        $movies = $this->getMovies();

        return view('web.movies.index', ['movies' => $movies]);
    }

    public function show($id)
    {
        $movie = $this->getMovieById($id);

        return view('web.movies.show', ['movie' => $movie]);
    }
}
