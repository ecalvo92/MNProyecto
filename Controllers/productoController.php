<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/productoModel.php';

    function ConsultarProductos()
    {
        return ConsultarProductosModel();
    }

?>