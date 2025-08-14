<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/carritoController.php';

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    $resultado = ConsultarCompras();
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
                                <h4 class="card-title">Mis Compras</h4>
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
                                                <th># Factura</th>
                                                <th>Fecha</th>                                               
                                                <th>SubTotal</th>
                                                <th>Impuesto</th>
                                                <th>Total</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                                
                                                While($fila = mysqli_fetch_array($resultado))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>". $fila["IdMaestro"] ."</td>";
                                                    echo "<td>". $fila["fecha"] ."</td>";
                                                    echo "<td> $ ". number_format($fila["SubTotal"],2) ."</td>";
                                                    echo "<td> $ ". number_format($fila["Impuesto"],2) ."</td>";
                                                    echo "<td> $ ". number_format($fila["Total"],2) ."</td>";
                                                    
                                                    echo '<td>
                                                    
                                                        <a href="consultarDetalleCompra.php?q=' . $fila["IdMaestro"] . '" class="btn">
                                                            <i class="fa fa-check" style="font-size:1.5em;"></i>
                                                        </a>

                                                     </td>';
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