<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/productoModel.php';

    function ConsultarProductos()
    {
        return ConsultarProductosModel();
    }

    if(isset($_POST["btnRegistrarProducto"]))
    {
        $nombre = $_POST["txtNombre"];
        $descripcion = $_POST["txtDescripcion"];
        $precio = $_POST["txtPrecio"];
        $cantidad = $_POST["txtCantidad"];
        $imagen = '/Curso/Views/ImagenProductos/' . $_FILES["txtImagen"]["name"];

        $origen = $_FILES["txtImagen"]["tmp_name"];
        $destino = $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/ImagenProductos/' . $_FILES["txtImagen"]["name"];
        copy($origen,$destino);

        $respuesta = RegistrarProductoModel($nombre, $descripcion, $precio, $cantidad, $imagen);

        if($respuesta)
        {
            header("location: ../../Views/Producto/consultarProductos.php");
        }
        else
        {
            $_POST["txtMensaje"] = "El producto no fue registrado correctamente.";
        }
    }  
    
    if(isset($_POST["btnCambiarEstadoProducto"]))
    {
        $idProducto = $_POST["IdProducto"];
        
        $respuesta = CambiarEstadoProductoModel($idProducto);

        if($respuesta)
        {
            header("location: ../../Views/Producto/consultarProductos.php");
        }
        else
        {
            $_POST["txtMensaje"] = "El producto no fue actualizado correctamente.";
        }
    }  

    function ConsultarInfoProducto($idProducto)
    {
        $respuesta = ConsultarInfoProductoModel($idProducto);

        if($respuesta != null && $respuesta -> num_rows > 0)
        {
            return mysqli_fetch_array($respuesta);
        }
    }

    if(isset($_POST["btnActualizarProducto"]))
    {
        $idProducto = $_POST["txtId"];
        $nombre = $_POST["txtNombre"];
        $descripcion = $_POST["txtDescripcion"];
        $precio = $_POST["txtPrecio"];
        $cantidad = $_POST["txtCantidad"];
        $imagen = "";

        if($_FILES["txtImagen"]["name"] != "")
        {
            $imagen = '/Curso/Views/ImagenProductos/' . $_FILES["txtImagen"]["name"];

            $origen = $_FILES["txtImagen"]["tmp_name"];
            $destino = $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/ImagenProductos/' . $_FILES["txtImagen"]["name"];
            copy($origen,$destino);
        }

        $respuesta = ActualizarProductoModel($idProducto, $nombre, $descripcion, $precio, $cantidad, $imagen);

        if($respuesta)
        {
            header("location: ../../Views/Producto/consultarProductos.php");
        }
        else
        {
            $_POST["txtMensaje"] = "El producto no fue actualizado correctamente.";
        }
    }

?>