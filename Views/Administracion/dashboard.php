<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/carritoController.php';

    if($_SESSION["IdRol"] == "1")
    {
        header("location: ../../Views/Home/principal.php");
    }

    $resultadoProductosTop = ConsultarProductosTop();
    $resultadoClientesTop = ConsultarClientesTop();
    $resultadoResumenTop = ConsultarResumenTop();

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



                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="mdi mdi-emoticon font-20 text-muted"></i>
                                            <p class="font-16 m-b-5">Clientes Activos</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h1 class="font-light text-right">
                                                <?php echo $resultadoResumenTop["ClientesActivos"] ?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 75%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="mdi mdi-image font-20  text-muted"></i>
                                            <p class="font-16 m-b-5">Clientes Inactivos</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h1 class="font-light text-right">
                                                <?php echo $resultadoResumenTop["ClientesInactivos"] ?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="mdi mdi-currency-eur font-20 text-muted"></i>
                                            <p class="font-16 m-b-5">Productos Activos</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h1 class="font-light text-right">
                                                <?php echo $resultadoResumenTop["ProductosActivos"] ?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar"
                                            style="width: 65%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="mdi mdi-poll font-20 text-muted"></i>
                                            <p class="font-16 m-b-5">Productos inactivos</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h1 class="font-light text-right">
                                                <?php echo $resultadoResumenTop["ProductosInactivos"] ?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                            style="width: 70%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">ID</th>
                                                <th class="border-top-0">PRODUCTO</th>
                                                <th class="border-top-0">PRECIO</th>
                                                <th class="border-top-0">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                                
                                                While($fila = mysqli_fetch_array($resultadoProductosTop))
                                                {
                                                    echo '<tr>';
                                                    echo '<td class="txt-oflo">' . $fila["IdProducto"] . '</td>';
                                                    echo '<td><span class="label label-success label-rounded">' . $fila["Nombre"] . '</span> </td>';
                                                    echo '<td class="txt-oflo"> $ ' . number_format($fila["Precio"],2) . '</td>';
                                                    echo '<td><span class="font-medium"> $ ' . number_format($fila["Total"],2) . '</span></td>';
                                                    echo '</tr>';
                                                }

                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">IDENTIFICACIÓN</th>
                                                <th class="border-top-0">NOMBRE</th>
                                                <th class="border-top-0">MONT FACTURAS</th>
                                                <th class="border-top-0">CANT FACTURAS</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                
                                                While($fila = mysqli_fetch_array($resultadoClientesTop))
                                                {
                                                    echo '<tr>';
                                                    echo '<td class="txt-oflo">' . $fila["Identificacion"] . '</td>';
                                                    echo '<td><span class="label label-success label-rounded">' . $fila["Nombre"] . '</span> </td>';
                                                    echo '<td class="font-medium"> $ ' . number_format($fila["Total"],2) . '</td>';
                                                    echo '<td><span>' . $fila["Cantidad"] . '</span></td>';
                                                    echo '</tr>';
                                                }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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