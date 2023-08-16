<?php

include 'usuarios.php';
include 'funciones.php';

$usuario = recuperarInfoDeUsuario($_POST['email'], $usuarios);

if (!$usuario) {
    header('Location: login.php');
    exit;
}

$esValido = verificarPass($_POST['password'], $usuario['password']);

if (!$esValido) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Perfil</h3>
                <p>
                    <strong>Nombre:</strong>
                    <?php echo $usuario['nombre']; ?>
                </p>
                <p>
                    <strong>Email:</strong>
                    <?php echo $usuario['email']; ?>
                </p>
                <p>
                    <strong>Fecha de nacimiento:</strong>
                    <?php echo fechaParaHumanos($usuario['fecha_nacimiento']); ?>
                </p>
                <p>
                    <strong>Edad:</strong>
                    <?php echo calcularEdad($usuario['fecha_nacimiento']); ?>
                </p>
            </div>
        </div>
    </main>
</body>

</html>


