<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/carritoModel.php';

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    if (isset($_POST["Accion"]) && $_POST["Accion"] == "AgregarCarrito") {
        AgregarCarrito($_POST["IdProducto"]);
    }

    function AgregarCarrito($IdProducto)
    {   
        $idUsuario = $_SESSION["IdUsuario"];
        $idProducto = $IdProducto;

        $respuesta = AgregarCarritoModel($idUsuario, $idProducto);

        if($respuesta)
        {
            echo "OK";
        }
        else
        {
            echo "El producto no fue agregado a su carrito.";
        }
    }  

    function ConsultarCarrito()
    {
        $idUsuario = $_SESSION["IdUsuario"];
        return ConsultarCarritoModel($idUsuario);
    }

    function ConsultarResumenCarrito()
    {
        $idUsuario = $_SESSION["IdUsuario"];
        $respuesta = ConsultarResumenCarritoModel($idUsuario);
    
        if($respuesta != null && $respuesta -> num_rows > 0)
        {
            $datos = mysqli_fetch_array($respuesta);
            $_SESSION["Total"] = $datos["Total"];
            $_SESSION["Cantidad"] = $datos["Cantidad"];
        }

    }

?>