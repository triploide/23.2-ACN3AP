<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Películas</title>
</head>
<body>
    <h1>Películas</h1>
    <ul>
        <li><a href="{{ route('web.movies.show', ['id' => 1]) }}">Avatar</a></li>
        <li><a href="{{ route('web.movies.show', ['id' => 2]) }}">I Am Legend</a></li>
        <li><a href="{{ route('web.movies.show', ['id' => 3]) }}">300</a></li>
    </ul>
</body>
</html>