<!DOCTYPE html>
<html lang="es">
    @include('backoffice.partials.head')

    <body class="d-flex flex-column min-vh-100">
        
        @include('backoffice.partials.nav')

        <main class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Listado de películas</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
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
                            {{-- @foreach($movies as $movie)
                                <tr>
                                    <td><img style="width: 80px" src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}"></td>
                                    <td>{{ $movie['title'] }}</td>
                                    <td>{{ $movie['year'] }}</td>
                                    <td>
                                        <a href="" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
                                        <a href="" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            @endforeach --}}

                            @forelse ($movies as $movie)
                                <tr>
                                    <td><img style="width: 80px" src="{{ $movie->poster }}" alt="{{ $movie->title }}"></td>
                                    <td>{{ $movie->title }}</td>
                                    <td>{{ $movie->since() }}</td>
                                    <td>
                                        <a href="" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
                                        <a href="" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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

                    @if (count($movies) > 3)
                        <p>
                            @for ($i = 1; $i <= 3; $i++)
                                <a href="movies/page/{{ $i }}">{{ $i }}</a>
                            @endfor
                        </p>
                    @else
                        <p>No hay más pelis</p>
                    @endif
                </div>
            </div>
        </main>

        @include('backoffice.partials.footer')
        
    </body>
</html>
