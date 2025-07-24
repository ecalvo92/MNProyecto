<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/connect.php';

    function ConsultarProductosModel()
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarProductos()";
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

    function RegistrarProductoModel($nombre, $descripcion, $precio, $cantidad, $imagen)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL RegistrarProducto('$nombre', '$descripcion', '$precio', '$cantidad', '$imagen')";
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

    function CambiarEstadoProductoModel($idProducto)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL CambiarEstadoProducto('$idProducto')";
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

    function ConsultarInfoProductoModel($idProducto)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarInfoProducto('$idProducto')";
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

    function ActualizarProductoModel($idProducto, $nombre, $descripcion, $precio, $cantidad, $imagen)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ActualizarProducto('$idProducto', '$nombre', '$descripcion', '$precio', '$cantidad', '$imagen')";
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