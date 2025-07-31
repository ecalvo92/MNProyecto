<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/carritoModel.php';

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    if ($_POST["Accion"] == "AgregarCarrito" && isset($_POST["IdProducto"])) {
        AgregarCarrito($_POST["IdProducto"]);
    }

    function AgregarCarrito($IdProducto)
    {   
        $idUsuario = $_SESSION["IdUsuario"];
        $idProducto = $IdProducto;

        $respuesta = AgregarCarritoModel($idUsuario, $idProducto);

        if($respuesta)
        {
            header("location: ../../Views/Producto/consultarProductos.php");
        }
        else
        {
            $_POST["txtMensaje"] = "El producto no fue registrado correctamente.";
        }
    }  

?>