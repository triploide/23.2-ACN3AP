<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function form()
    {
        return view('example.request.form');
    }

    public function all()
    {
        // request() // Devuelve el objeto Request (Illuminate\Http\Request)

        dd(request()->all());
    }

    public function input()
    {
        dd(request()->input('year'));
    }

    public function only()
    {
        dd(request()->only('year', 'runtime', 'title'));
    }

    public function except()
    {
        dd(request()->except('_token', 'submit'));
    }

    public function dotNotation()
    {
        dd(request()->input('genre.1'));
    }
}

/**
 * array:3 [▼ // app\Http\Controllers\Example\RequestController.php:39
  0 => "Ciencia Ficción"
  1 => "Acción"
  2 => "Suspenso"
]
 */
