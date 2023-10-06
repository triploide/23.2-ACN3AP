<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h1>Formulario</h1>
                <form class="mt-3" action="/example/request/dot-notation" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="year">Año</label>
                        <input type="number" id="year" name="year" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="runtime">Duración</label>
                        <input type="text" id="runtime" name="runtime" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="genre">Género</label>
                        <input type="text" id="genre" name="genre[]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="genre">Género</label>
                        <input type="text" id="genre" name="genre[]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="genre">Género</label>
                        <input type="text" id="genre" name="genre[]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="plot">Plot</label>
                        <textarea id="plot" name="plot" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="poster">Banner</label>
                        <input type="text" id="poster" name="poster" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary mt-3" type="submit" name="submit" class="form-control">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>