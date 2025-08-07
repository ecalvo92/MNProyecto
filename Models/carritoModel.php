<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/connect.php';

    function AgregarCarritoModel($IdUsuario, $IdProducto)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL AgregarCarrito('$IdUsuario', '$IdProducto')";
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

    function ConsultarCarritoModel($IdUsuario)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarCarrito('$IdUsuario')";
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

    function ConsultarResumenCarritoModel($IdUsuario)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarResumenCarrito('$IdUsuario')";
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