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

    if(isset($_POST["btnActualizarPerfilUsuario"]))
    {
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $identificacion = $_POST["txtIdentificacion"];
        $idUsuario = $_SESSION["IdUsuario"];

        $respuesta = ActualizarPerfilUsuarioModel($idUsuario, $nombre, $correo, $identificacion);

        if($respuesta)
        {
            $_SESSION["Nombre"] = $nombre;
            $_POST["txtMensaje"] = "Su información se actualizó correctamente.";
        }
        else
        {
            $_POST["txtMensaje"] = "Su información no fue actualizada correctamente.";
        }
    }

?>