<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/connect.php';

    function ValidarInicioSesionModel($nombreUsuario, $contrasenna)
    {
       try
        {
            $context = OpenDB();



            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
            return false;
        }
    }

    function RegistrarUsuarioModel($nombre, $correo, $nombreUsuario, $contrasenna)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL RegistrarUsuario('$nombre', '$correo', '$nombreUsuario', '$contrasenna')";
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