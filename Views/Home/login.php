<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutExterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/homeController.php';
?>

<!DOCTYPE html>
<html>
    <?php
       AddCss();
    ?>
<body>
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../Imagenes/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">

                    <div class="logo mb-3">
                        <span class="db"><img src="../Imagenes/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Iniciar Sesión</h5>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <form class="form-horizontal m-t-20" action="" method="POST">
                               
                                <?php
                                    if(isset($_POST["txtMensaje"]))
                                    {
                                        echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
                                    }
                                ?>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input id="txtCorreo" name="txtCorreo" type="text" class="form-control form-control-lg" placeholder="Correo">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-lock"></i></span>
                                    </div>
                                    <input id="txtContrasenna" name="txtContrasenna" type="password" class="form-control form-control-lg" placeholder="Contraseña">
                                </div>

                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button id="btnIniciarSesion" name="btnIniciarSesion" class="btn btn-block btn-lg btn-info" type="submit">Procesar</button>
                                    </div>
                                </div>

                                <div class="form-group m-b-0 m-t-10">
                                    <div class="col-sm-12 text-center">
                                        Si no tienes una cuenta <a href="registro.php" class="text-info m-l-5"><b>Regístrate</b></a>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        Si olvidaste la contraseña <a href="recuperarAcceso.php" class="text-info m-l-5"><b>Recupera el Acceso</b></a>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        AddJs();
    ?>    

</body>

</html>