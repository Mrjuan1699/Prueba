function agregardatos(dni, nombre, fecnac, dir, telefono) {

    info = "dni=" + dni +
        "&nombre=" + nombre +
        "&fecnac=" + fecnac +
        "&dir=" + dir +
        "&telefono=" + telefono;


    $.ajax({
        type: "POST",
        url: "php/agregarpersonas.php",
        data: info,
        success: function(j) {
            if (j == 1) {
                alertify.success("Se ha guardado la información.");


            } else {
                alertify.error("No se pudo guardar la información.");
            }
        }
    });

}

function mandardatosform(datos) {

    j = datos.split('||');
    $('#idpersona').val(j[0]);
    $('#dniEdit').val(j[1]);
    $('#nombreEdit').val(j[2]);
    $('#fecnacEdit').val(j[3]);
    $('#dirEdit').val(j[4]);
    $('#telEdit').val(j[5]);

}

function actualizarinformacion() {
    id = $('#idpersona').val();
    dni = $('#dniEdit').val();
    nombre = $('#nombreEdit').val();
    fecnac = $('#fecnacEdit').val();
    dir = $('#dirEdit').val();
    telefono = $('#telEdit').val();

    info =
        "IdPersona= " + id +
        "&dni=" + dni +
        "&nombre=" + nombre +
        "&fecnac=" + fecnac +
        "&dir=" + dir +
        "&telefono=" + telefono;


    $.ajax({
        type: "POST",
        url: "php/actualizarinformacion.php",
        data: info,
        success: function(j) {
            if (j == 1) {
                alertify.success("Se ha actualizado la información.");
            } else {
                alertify.error("No se pudo actualizar la información.");
            }
        }
    });

}

function PreguntaSiNo(id) {
    alertify.confirm('Eliminar información', '¿Está seguro de eliminar este registro?',
        function() { eliminarregistro(id) },
        function() { alertify.error('Cancel') });

}

function eliminarregistro(id) {
    cadena = "id= " + id;

    $.ajax({
        type: "POST",
        url: "php/eliminarregistro.php",
        data: cadena,
        succes: function(j) {
            if (j == 1) {
                alertify.success("Registro eliminado.");
            } else {
                alertify.error("No se pudo eliminar el registro.");
            }

        }
    });
}