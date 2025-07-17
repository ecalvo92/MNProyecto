<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/productoController.php';
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
                                <h4 class="card-title">Registro de Productos</h4>
                            </div>
                            <hr>
                            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                <div class="card-body">

                                    <?php
                                        if(isset($_POST["txtMensaje"]))
                                        {
                                            echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
                                        }
                                    ?>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-lg-7">
                                            <input id="txtNombre" name="txtNombre" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Descripción</label>
                                        <div class="col-md-7">
                                            <textarea id="txtDescripcion" name="txtDescripcion" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Precio</label>
                                        <div class="col-md-7">
                                            <input id="txtPrecio" name="txtPrecio" maxlength="10" type="text" class="form-control"
                                            onkeypress="permitirSoloNumeros()">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Cantidad</label>
                                        <div class="col-md-7">
                                            <input id="txtCantidad" name="txtCantidad" maxlength="5" type="text" class="form-control"
                                            onkeypress="permitirSoloNumeros()">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Imagen</label>
                                        <div class="col-md-7">
                                            <input id="txtImagen" accept="image/png" name="txtImagen" type="file" class="form-control">
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-10 text-right pb-2">
                                            <button id="btnRegistrarProducto" name="btnRegistrarProducto" class="btn btn-info" type="submit">Procesar</button>
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