<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Controllers/productoController.php';

    if($_SESSION["IdRol"] == "2")
    {
        header("location: ../../Views/Administracion/dashboard.php");
    }

    $resultado = ConsultarProductos(1);
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
                    <?php
                    while($fila = mysqli_fetch_array($resultado)) {
                        echo '<div class="col-lg-4 col-md-6 col-sm-12 mb-4">';
                        echo '    <div class="card h-100">';
                        echo '        <img class="card-img-top mt-3" src="' . $fila["Imagen"] . '" alt="Imagen del producto" style="height: 200px; object-fit: contain;">';
                        echo '        <div class="card-body">';
                        echo '            <h5 class="card-title">' . $fila["Nombre"] . '</h5>';
                        echo '            <p class="card-text">' . $fila["Descripcion"] . '</p>';
                        echo '            <p class="card-text"><strong>₡' . number_format($fila["Precio"], 2) . '</strong></p>';
                        echo '            <p class="card-text">Cantidad: ' . $fila["Cantidad"] . '</p>';
                        echo '            <div class="mt-auto text-center">';
                        echo '                <button class="btn btn-primary" onclick="AgregarCarrito(' . $fila["IdProducto"] .')">Agregar al carrito</button>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                    ?>
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

        function AgregarCarrito(idProducto)
        {
            $.ajax({
                url: "../../Controllers/carritoController.php",
                type: "POST",
                dataType: 'json',
                data: {
                    Accion: "AgregarCarrito",
                    IdProducto: idProducto
                },
                success: function(response) {
                   
                }
            });
        }

    </script>

</body>

</html>