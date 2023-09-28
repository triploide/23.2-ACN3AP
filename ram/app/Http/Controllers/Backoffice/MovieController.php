<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getMovies() : array
    {
        return json_decode(file_get_contents('movies.json'), true);
    }

    public function index()
    {
        // $movies = $this->getMovies();

        $movies = Movie::all(); // Collection (array)

        return view('backoffice.movies.index', compact('movies'));
    }
}
