@extends('backoffice.layouts.app')

@section('title', $movie->title)

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="#">Películas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listado</li>
@endsection

@section('content')
    <form class="mt-3" action="{{ route('backoffice.movies.update', ['movie' => $movie->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input value="{{ $movie->title }}" type="text" id="title" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="released_date">Fecha de estreno</label>
            <input value="{{ $movie->released_date }}" type="date" id="released_date" name="released_date" class="form-control">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input value="{{ $movie->rating }}" type="number" id="rating" name="rating" class="form-control">
        </div>
        <div class="form-group">
            <label for="genre_id">Género</label>
            <select name="genre_id" id="genre_id" class="form-control">
                @foreach ($genres as $genre)
                    <option @selected($movie->genre_id == $genre->id) value="{{ $genre->id }}">{{ $genre->value }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea id="description" name="description" class="form-control">{{ $movie->description }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary mt-3" type="submit" name="submit" class="form-control">Editar</button>
        </div>
    </form>
@endsection
