<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/usuarioModel.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/homeModel.php';

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
        $idUsuario = $_SESSION["IdUsuario"];
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $identificacion = $_POST["txtIdentificacion"];

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

    if(isset($_POST["btnActualizarContrasenna"]))
    {
        $idUsuario = $_SESSION["IdUsuario"];
        $contrasennaNueva = $_POST["txtContrasennaNueva"];

        $contrasennaAnterior = $_POST["txtContrasennaAnterior"];
        $confirmar = $_POST["txtConfirmar"];
        $contrasennaSesion = $_SESSION["Contrasenna"];

        if($contrasennaSesion != $contrasennaAnterior)
        {
            $_POST["txtMensaje"] = "Valide su contraseña anterior.";
            return;
        }

        if($contrasennaNueva != $confirmar)
        {
            $_POST["txtMensaje"] = "Valide la confirmación de su contraseña nueva.";
            return;
        }

        $respuesta = ActualizarContrasennaModel($idUsuario, $contrasennaNueva);

        if($respuesta)
        {
            $_SESSION["Contrasenna"] = $contrasennaNueva;
            $_POST["txtMensaje"] = "Su contraseña se actualizó correctamente.";
        }
        else
        {
            $_POST["txtMensaje"] = "Su contraseña no fue actualizada correctamente.";
        }
    }

    function ConsultarUsuarios()
    {
        return ConsultarUsuariosModel();
    } 

    if(isset($_POST["btnCambiarEstadoUsuario"]))
    {
        $idUsuario = $_POST["IdUsuario"];
        
        $respuesta = CambiarEstadoUsuarioModel($idUsuario);

        if($respuesta)
        {
            header("location: ../../Views/Usuario/consultarUsuarios.php");
        }
        else
        {
            $_POST["txtMensaje"] = "El usuario no fue actualizado correctamente.";
        }
    }  

    function ConsultarRoles()
    {
        return ConsultarRolesModel();
    }     

?>