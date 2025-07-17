function ConsultarNombreApi() {
    $("#txtNombre").val("");
    let identificacion = $("#txtIdentificacion").val();

    if (identificacion.length >= 9) {
        $.ajax({
            url: 'https://apis.gometa.org/cedulas/' + identificacion,
            type: 'GET',
            dataType: 'json',
            success: function (respuesta) {
                $("#txtNombre").val(respuesta.nombre);
            }
        });
    }
}

function permitirSoloNumeros() {
    $(this).on('keypress', function (e) {
        const code = e.which || e.keyCode;
        if (code < 48 || code > 57) {
            e.preventDefault();
        }
    });
}