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
                                                     echo "<td></td>";
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

        $(document).ready(function() {

            new DataTable('#tablaDatos', {
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/2.3.2/i18n/es-ES.json',
                },
            });
            
        });

    </script>

</body>

</html>