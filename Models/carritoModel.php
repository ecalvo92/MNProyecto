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

    function EliminarProductoCarritoModel($IdUsuario, $IdProducto)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL EliminarProductoCarrito('$IdUsuario', '$IdProducto')";
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

    function RealizarPagoCarritoModel($IdUsuario)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL RealizarPagoCarrito('$IdUsuario')";
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

    function ConsultarComprasModel($IdUsuario)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarCompras('$IdUsuario')";
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

    function ConsultarDetalleCompraModel($IdMaestro)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarDetalleCompra('$IdMaestro')";
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


    
    function ConsultarProductosTopModel()
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarProductosTop()";
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

    function ConsultarClientesTopModel()
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarClientesTop()";
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

    function ConsultarResumenTopModel()
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarResumenTop()";
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