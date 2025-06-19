<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/homeModel.php';

if(isset($_POST["btnIniciarSesion"]))
{
    $correo = $_POST["txtCorreo"];
    $contrasenna = $_POST["txtContrasenna"];

    $respuesta = ValidarInicioSesionModel($correo, $contrasenna);

    if($respuesta != null && $respuesta -> num_rows > 0)
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
    $identificacion = $_POST["txtIdentificacion"];
    $contrasenna = $_POST["txtContrasenna"];

    $respuesta = RegistrarUsuarioModel($nombre, $correo, $identificacion, $contrasenna);

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