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

?>