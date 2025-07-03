<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/connect.php';

    function ValidarInicioSesionModel($correo, $contrasenna)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ValidarInicioSesion('$correo', '$contrasenna')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
            RegistrarError($error);
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
            RegistrarError($error);
            return false;
        }
    }

    function ValidarCorreoModel($correo)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ValidarCorreo('$correo')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
            RegistrarError($error);
            return null;
        }
    }

    function ActualizarContrasennaModel($idUsuario, $contrasenna)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ActualizarContrasenna('$idUsuario', '$contrasenna')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
            RegistrarError($error);
            return false;
        }
    }

?>