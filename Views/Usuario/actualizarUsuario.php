<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/usuarioController.php';

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    $idUsuario = $_GET['q'];
    $resultado = ConsultarInfoUsuario($idUsuario);
    $rolesSistema = ConsultarRoles();
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
                                <h4 class="card-title">Actualizar Usuario</h4>
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
                                        <label class="col-sm-3 text-right control-label col-form-label">Identificación</label>
                                        <div class="col-lg-7">
                                            <input id="txtIdentificacion" name="txtIdentificacion" type="text" class="form-control"
                                            value="<?php echo $resultado["Identificacion"] ?>" 
                                            onkeyup="ConsultarNombreApi()">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-md-7">
                                            <input id="txtNombre" name="txtNombre" type="text" class="form-control"
                                            value="<?php echo $resultado["Nombre"] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Correo</label>
                                        <div class="col-md-7">
                                            <input id="txtCorreo" name="txtCorreo" type="email" class="form-control"
                                            value="<?php echo $resultado["Correo"] ?>">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Rol Sistema</label>
                                        <div class="col-md-7">
                                            <select id="listaRoles" name="listaRoles" class="form-control">

                                                <?php  
                                                    While($fila = mysqli_fetch_array($rolesSistema))
                                                    {
                                                        if($resultado["IdRol"] == $fila["IdRol"])
                                                        {
                                                            echo "<option selected value=". $fila["IdRol"] .">" . $fila["NombreRol"] . "</option>";
                                                        }
                                                        else
                                                        {
                                                            echo "<option value=". $fila["IdRol"] .">" . $fila["NombreRol"] . "</option>";
                                                        }   
                                                    }
                                                ?>
                        
                                            </select>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-10 text-right pb-2">
                                            <button id="btnActualizarPerfilUsuario" name="btnActualizarPerfilUsuario" class="btn btn-info" type="submit">Procesar</button>
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