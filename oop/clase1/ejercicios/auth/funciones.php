<?php

function verificarPass($password, $hash) {
    return password_verify($password, $hash);
}


function recuperarInfoDeUsuario($email, $usuarios) {
    $respuesta = null;

    foreach ($usuarios as $usuario) {
        if ($usuario['email'] == $email) {
            $respuesta = $usuario;
            break;
        }
    }

    return $respuesta;
}

function calcularEdad($fecha) {
    return (date('Y') - date('Y',strtotime($fecha)));
}

function fechaParaHumanos($fecha) {
    $fechaArray = explode('-', $fecha);

    $fechaArray = array_reverse($fechaArray);

    return implode('-', $fechaArray);
}
