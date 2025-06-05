<?php

if(isset($_POST["btnIniciarSesion"]))
{
    $nombreUsuario = $_POST["txtNombreUsuario"];
    $contrasenna = $_POST["txtContrasenna"];

    //Enviamos el nombre de usuario y la contraseña al modelo
    $respuesta = false;

    if($respuesta)
    {
        header("location: ../../Views/Home/principal.php");
    }
    else
    {
        $_POST["txtMensaje"] = "Su información no es válida";
    }
}


//Registrar

//Recuperar Acceso

?>