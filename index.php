<html>

    <head>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
    </head>

    <body>

        <div class="row">
            <div class="col-3">

            </div>

            <div class="col-6">
            
                 <!-- contenido -->
                <h3>Identificación</h3>
                <input type="text" id="txtIdentificacion" class="form-control"
                onkeyup="ConsultarNombre2();">
                <input type="text" id="txtNombre" class="form-control" readOnly="true">

            </div>

        </div>
        
    </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="funciones.js"></script>

</html>