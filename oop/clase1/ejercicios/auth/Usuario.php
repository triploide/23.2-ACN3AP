<?php

class Usuario
{
    public $email;
    public $password;
    public $nombre;
    public $fecha_nacimiento;

    public function __construct($email, $password, $nombre, $fecha_nacimiento)
    {
        $this->email = $email;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function getFechaNacimiento()
    {
        $fechaArray = explode('-', $this->fecha_nacimiento);

        $fechaArray = array_reverse($fechaArray);

        return implode('-', $fechaArray);
    }

    public function getEdad()
    {
        return date('Y') - date('Y',strtotime($this->fecha_nacimiento));
    }

    public function esValido($password)
    {
        return password_verify($password, $this->password);
    }
}
