<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/connect.php';

    function ValidarInicioSesionModel($nombreUsuario, $contrasenna)
    {
       try
        {
            $context = OpenDB();

            $sp = "CALL ValidarInicioSesion('$nombreUsuario', '$contrasenna')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
            return null;
        }
    }

    function RegistrarUsuarioModel($nombre, $correo, $identificacion, $contrasenna)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL RegistrarUsuario('$nombre', '$correo', '$identificacion', '$contrasenna')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
            return false;
        }
    }

?>