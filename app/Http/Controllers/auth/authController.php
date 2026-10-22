<?php

class AuthController
{
    public function registrar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $usuario = $_POST["usuario"];
            $password = $_POST["password"];
            $confirmar = $_POST["confirmar"];

        }
    }
}