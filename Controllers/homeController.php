<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/homeModel.php';

if(isset($_POST["btnIniciarSesion"]))
{
    $nombreUsuario = $_POST["txtNombreUsuario"];
    $contrasenna = $_POST["txtContrasenna"];

    $respuesta = ValidarInicioSesionModel($nombreUsuario, $contrasenna);

    if($respuesta)
    {
        header("location: ../../Views/Home/principal.php");
    }
    else
    {
        $_POST["txtMensaje"] = "Su información no fue validada correctamente.";
    }
}

if(isset($_POST["btnRegistrarUsuario"]))
{
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $nombreUsuario = $_POST["txtNombreUsuario"];
    $contrasenna = $_POST["txtContrasenna"];

    $respuesta = RegistrarUsuarioModel($nombre, $correo, $nombreUsuario, $contrasenna);

    if($respuesta)
    {
        header("location: ../../Views/Home/login.php");
    }
    else
    {
        $_POST["txtMensaje"] = "Su información no fue registrada correctamente.";
    }
}




//Recuperar Acceso

?>