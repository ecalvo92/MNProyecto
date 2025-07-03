<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/usuarioModel.php';

    function ConsultarInfoUsuario($idUsuario)
    {
        $respuesta = ConsultarInfoUsuarioModel($idUsuario);

        if($respuesta != null && $respuesta -> num_rows > 0)
        {
            return mysqli_fetch_array($respuesta);
        }
    }

?>