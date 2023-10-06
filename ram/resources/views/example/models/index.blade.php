<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <main class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <h1>Listado de Películas</h1>
            </div>
            <div class="col-md-6" style="text-align: right">
                <a href="/example/movies/create" class="btn btn-primary">Crear Película</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-5">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Banner</th>
                            <th>Título</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>
                                    <img style="width: 60px" src="{{ $movie->poster }}" alt="{{ $movie->title }}">
                                </td>
                                <td>{{ $movie->title }}</td>
                                <td>
                                    <a href="/example/movies/{{ $movie->id }}/edit" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                    <a href="#" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>