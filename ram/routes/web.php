<?php

use App\Http\Controllers\Backoffice\MovieController as BackofficeMovieController;
use App\Http\Controllers\Example\MovieController as ExampleMovieController;
use App\Http\Controllers\Example\RequestController;
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

// -------------------
// ----- EXAMPLE -----
// -------------------

Route::get('example/request/form', [RequestController::class, 'form']);
Route::post('example/request/all', [RequestController::class, 'all']);
Route::post('example/request/input', [RequestController::class, 'input']);
Route::post('example/request/only', [RequestController::class, 'only']);
Route::post('example/request/except', [RequestController::class, 'except']);
Route::post('example/request/dot-notation', [RequestController::class, 'dotNotation']);

Route::get('example/movies', [ExampleMovieController::class, 'index']);
Route::get('example/movies/create', [ExampleMovieController::class, 'create']);
Route::post('example/movies', [ExampleMovieController::class, 'store']);
Route::get('example/movies/{id}/edit', [ExampleMovieController::class, 'edit']);
Route::post('example/movies/{id}', [ExampleMovieController::class, 'update']);



// ---------------
// ----- RAM -----
// ---------------

Route::prefix('peliculas')->controller(MovieController::class)->name('web.movies.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});


Route::prefix('backoffice')->name('backoffice.')->group(function () {
    // Route::get('movies', [BackofficeMovieController::class, 'index'])->name('movies.index');
    // Route::get('movies/create', [BackofficeMovieController::class, 'create'])->name('movies.create');
    // Route::post('movies', [BackofficeMovieController::class, 'store'])->name('movies.store');
    // Route::get('movies/{movie}/edit', [BackofficeMovieController::class, 'edit'])->name('movies.edit');
    // Route::patch('movies/{movie}', [BackofficeMovieController::class, 'update'])->name('movies.update');
    // Route::delete('movies/{movie}', [BackofficeMovieController::class, 'destroy'])->name('movies.destroy');

    Route::resource('movies', BackofficeMovieController::class);
});


