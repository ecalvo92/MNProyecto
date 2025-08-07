<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/carritoController.php';

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    $resultado = ConsultarCarrito();
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
                                <h4 class="card-title">Mi Carrito</h4>
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
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>SubTotal</th>
                                                <th>Impuesto</th>
                                                <th>Total</th>
                                                <th>Fecha</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                                
                                                While($fila = mysqli_fetch_array($resultado))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>". $fila["IdCarrito"] ."</td>";
                                                    echo "<td>". $fila["Nombre"] ."</td>";
                                                    echo "<td>". $fila["Cantidad"] ."</td>";
                                                    echo "<td> $ ". number_format($fila["Precio"],2) ."</td>";
                                                    echo "<td> $ ". number_format($fila["SubTotal"],2) ."</td>";
                                                    echo "<td> $ ". number_format($fila["Impuesto"],2) ."</td>";
                                                    echo "<td> $ ". number_format($fila["Total"],2) ."</td>";
                                                    echo "<td>". $fila["FechaCarrito"] ."</td>";
                                                    echo '<td>
                                                    
                                                        <a class="btn btnAbrirModal" data-toggle="modal" data-target="#CambiarEstadoProducto"
                                                            data-id="' . $fila["IdCarrito"] . '" data-nombre="' . $fila["Nombre"] . '">
                                                            <i class="fa fa-trash" style="font-size:1.5em;"></i>
                                                        </a>

                                                     </td>';
                                                    echo "</tr>";
                                                }

                                            ?>

                                        </tbody>
                                    </table>

                                    <div class="row mt-5">
                                        <div class="col-3">
                                            <p class="mt-2" style="font-size:12pt">El monto a cancelar es de: <b> $ <?php echo number_format($_SESSION["Total"],2) ?> </b></p>
                                        </div>
                                        <div class="col-9">

                                            <?php 
                                                if($_SESSION["Total"] != "0")
                                                {
                                                    echo '<input type="button" class="btn btn-primary" value="Procesar Pago">';
                                                }
                                            ?>

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


    <!-- Modal -->
    <div class="modal fade" id="CambiarEstadoProducto" tabindex="-1" role="dialog" aria-labelledby="tituloModal"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloModal">Confirmación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="POST">
                    <div class="modal-body">

                        <input type="hidden" id="IdProducto" name="IdProducto" class="form-control">
                        <Label id="lblNombre" name="lblNombre"></Label>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnCambiarEstadoProducto" name="btnCambiarEstadoProducto"
                            class="btn btn-primary">Procesar</button>
                    </div>
                </form>

            </div>
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

        $('.btnAbrirModal').on('click', function() {
            const id = $(this).data('id');
            const nombre = $(this).data('nombre');

            $('#IdProducto').val(id);
            $('#lblNombre').text("¿Desea cambiar el estado del producto " + nombre + "?");
        });

    });
    </script>

</body>

</html>