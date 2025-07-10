<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/usuarioController.php';

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html>
<?php
       AddCss();
    ?>

<body>

    <div id="main-wrapper">

        <?php
            ShowHeader();
            ShowMenu();
        ?>

        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cambiar Contraseña</h4>
                            </div>
                            <hr>
                            <form class="form-horizontal" action="" method="POST">
                                <div class="card-body">

                                    <?php
                                        if(isset($_POST["txtMensaje"]))
                                        {
                                            echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
                                        }
                                    ?>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Contraseña Anterior</label>
                                        <div class="col-md-7">
                                            <input id="txtContrasennaAnterior" name="txtContrasennaAnterior" type="password" class="form-control form-control-lg">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Contraseña Nueva</label>
                                        <div class="col-md-7">
                                            <input id="txtContrasennaNueva" name="txtContrasennaNueva" type="password" class="form-control form-control-lg">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Confirmar Contraseña Nueva</label>
                                        <div class="col-md-7">
                                            <input id="txtConfirmar" name="txtConfirmar" type="password" class="form-control form-control-lg">
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-10 text-right pb-2">
                                            <button id="btnActualizarContrasenna" name="btnActualizarContrasenna" class="btn btn-lg btn-info" type="submit">Procesar</button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <?php
                ShowFooter();
            ?>

        </div>

    </div>

    <?php
        AddJs();
    ?>

</body>

</html>