<?php

use App\Http\Controllers\Backoffice\MovieController as BackofficeMovieController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Test</h1>';
});

Route::get('test', function () {
    return '<h1>Listado de juegos</h1>';
});

Route::get('juegos', function () {
    return view('juegos');
});

Route::get('juegos/{id}', function () {
    return view('juego');
});



// ---------------
// ----- RAM -----
// ---------------

Route::prefix('peliculas')->controller(MovieController::class)->name('web.movies.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});


Route::get('backoffice/movies', [BackofficeMovieController::class, 'index']);
