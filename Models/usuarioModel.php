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

?>