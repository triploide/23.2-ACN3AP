@extends('backoffice.layouts.app')

@section('title', 'Listado de películas')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="#">Películas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listado</li>
@endsection

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Poster</th>
                <th>Título</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <td><img style="width: 80px" src="{{ $movie->poster }}" alt="{{ $movie->title }}"></td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->since() }}</td>
                    <td>
                        <a href="{{ route('backoffice.movies.edit', ['movie' => $movie->id]) }}" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
                        <form action="{{ route('backoffice.movies.destroy', ['movie' => $movie->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit"" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <p class="h3 text-center">No hay películas para mostrar</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="menu pmd-floating-action" role="navigation">
		<a href="{{ route('backoffice.movies.create') }}" class="floating-btn-custon pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised btn-success"> 
			<span class="fa fa-plus"></span>
		</a>
	</div>
@endsection
