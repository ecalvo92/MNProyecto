<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/productoController.php';

    $resultado = ConsultarProductos();
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
                                <h4 class="card-title">Consulta de Productos</h4>
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

                                    <div class="row">
                                        <div class="col-md-12 text-right pb-4">
                                            <a href="registrarProducto.php" class="btn btn-info">Agregar</a>
                                        </div>
                                    </div>

                                    <table id="tablaDatos" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>Imagen</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                                
                                                While($fila = mysqli_fetch_array($resultado))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>". $fila["IdProducto"] ."</td>";
                                                    echo "<td>". $fila["Nombre"] ."</td>";
                                                    echo "<td>". $fila["Descripcion"] ."</td>";
                                                    echo "<td>". $fila["Precio"] ."</td>";
                                                    echo "<td>". $fila["Cantidad"] ."</td>";
                                                    echo "<td><img src=". $fila["Imagen"] ." width='125' height='125'></td>";
                                                    echo "<td>". $fila["EstadoDescripcion"] ."</td>";
                                                    echo '<td>
                                                    
                                                        <a class="btn btnAbrirModal" data-toggle="modal" data-target="#CambiarEstadoProducto"
                                                            data-id="' . $fila["IdProducto"] . '" data-nombre="' . $fila["Nombre"] . '">
                                                            <i class="fa ' . ($fila["Estado"] ? 'fa-toggle-on text-success' : 'fa-toggle-off text-danger') . '" style="font-size:1.5em;"></i>
                                                        </a>
                                                        
                                                        <a class="btn">
                                                            <i class="fa fa-edit" style="font-size:1.5em;"></i>
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


    <!-- Modal -->
    <div class="modal fade" id="CambiarEstadoProducto" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
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
                        <button type="submit" id="btnCambiarEstadoProducto" name="btnCambiarEstadoProducto" class="btn btn-primary">Procesar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <?php
        AddJs();
    ?>

    <script>
    $(document).ready(function() {

        new DataTable('#tablaDatos', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.3.2/i18n/es-ES.json',
            },
        });

        $('.btnAbrirModal').on('click', function () {
            const id = $(this).data('id');
            const nombre = $(this).data('nombre');

            $('#IdProducto').val(id);
            $('#lblNombre').text("¿Desea cambiar el estado del producto " + nombre + "?");
        });

    });
    </script>

</body>

</html>