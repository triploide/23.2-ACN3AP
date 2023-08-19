<?php

require 'usuarios.php';
require 'funciones.php';
require 'Usuario.php';

$usuarioArray = recuperarInfoDeUsuario($_POST['email'], $usuarios);

if (!$usuarioArray) {
    header('Location: login.php');
    exit;
}

$usuario = new Usuario($_POST['email'], $usuarioArray['password'], $usuarioArray['nombre'], $usuarioArray['fecha_nacimiento']);

$esValido = $usuario->esValido($_POST['password']);

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
                    <?php echo $usuario->nombre; ?>
                </p>
                <p>
                    <strong>Email:</strong>
                    <?php echo $usuario->email; ?>
                </p>
                <p>
                    <strong>Fecha de nacimiento:</strong>
                    <?php echo $usuario->getFechaNacimiento(); ?>
                </p>
                <p>
                    <strong>Edad:</strong>
                    <?php echo $usuario->getEdad(); ?>
                </p>
            </div>
        </div>
    </main>
</body>

</html>


