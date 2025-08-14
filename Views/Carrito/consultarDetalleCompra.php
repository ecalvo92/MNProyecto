<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/carritoController.php';

    $IdMaestro = $_GET['q'];
    $resultado = ConsultarDetalleCompra($IdMaestro);
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
                                <h4 class="card-title">Factura # <?php echo $IdMaestro ?></h4>
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

                                    <table id="tablaDatos" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Nombre</th>  
                                                <th>Cantidad</th>
                                                <th>Precio</th>                                             
                                                <th>SubTotal</th>
                                                <th>Impuesto</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                                
                                                While($fila = mysqli_fetch_array($resultado))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>". $fila["IdProducto"] ."</td>";
                                                    echo "<td>". $fila["Nombre"] ."</td>";
                                                    echo "<td>". $fila["Cantidad"] ."</td>";
                                                    echo "<td> $ ". number_format($fila["Precio"],2) ."</td>";
                                                    echo "<td> $ ". number_format($fila["SubTotal"],2) ."</td>";
                                                    echo "<td> $ ". number_format($fila["Impuesto"],2) ."</td>";
                                                    echo "<td> $ ". number_format($fila["Total"],2) ."</td>";
                                                    echo "</tr>";
                                                }

                                            ?>

                                        </tbody>
                                    </table>
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

    <script>
    $(function() {

        new DataTable('#tablaDatos', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.3.2/i18n/es-ES.json',
            },
        });

    });

    </script>

</body>

</html>