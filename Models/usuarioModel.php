<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/connect.php';

    function ConsultarInfoUsuarioModel($idUsuario)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarInfoUsuario('$idUsuario')";
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

    function ActualizarPerfilUsuarioModel($idUsuario, $nombre, $correo, $identificacion)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ActualizarPerfilUsuario('$idUsuario', '$nombre', '$correo', '$identificacion')";
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

    function ConsultarUsuariosModel()
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarUsuarios()";
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

    function CambiarEstadoUsuarioModel($idUsuario)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL CambiarEstadoUsuario('$idUsuario')";
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

    function ConsultarRolesModel()
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarRoles()";
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

?>