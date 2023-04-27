
function init() {
    $('#producto_form').on('submit', function(e) {
        guardaryeditar(e);
    });
}

function guardaryeditar(e) { 
    e.preventDefault();
    var formData = new FormData($('#producto_form')[0]);
    $.ajax({
        url: '../../controller/producto.php?op=guardaryeditar',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
            $('#producto_data').DataTable().ajax.reload();
            $('#mntmantenimiento').modal('hide');

            Swal.fire({
                title: 'Correcto!',
                text: 'Se Registro Correctamente el Producto',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        } 
    });


}


$(document).ready( function () {
    $('#producto_data').DataTable({
        "aProcessing": true,        //Activamos el procesamiento del datatables
        "aServerSide": true,        //Paginación y filtrado realizados por el servidor
        dom: "Bfrtip",              //Definimos los elementos del control de tabla
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
        "ajax":{
            url: '../../controller/producto.php?op=listar',
            type: "post",
            /* dataType: "json",
            error: function(e) {
                console.log(e.responseText);
            } */
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,        //Por cada 10 productos hace una páginación
        "order": [[ 0, "asc" ]],
        "language": {
            "sProcessing":          "Procesando...",
            "sLengthMenu":          "Mostrar _MENU_ productos",
            "sZeroRecords":         "No se encontraron resultados",
            "sEmptyTable":          "Ningún dato disponible en esta tabla",
            "sInfo":                "Mostrando un total de _TOTAL_ productos",
            "sInfoEmpty":           "Mostrando un total de 0 productos",
            "sInfoFiltered":        "(filtrado de un total de _MAX_ productos)",
            "sInfoPostFix":         "",
            "sSearch":              "Buscar:",
            "sUrl":                 "",
            "sInfoThousands":       ",",
            "sLoadingRecords":      "Cargando...",
            "oPaginate": {
                "sFirst":           "Primero",
                "sLast":            "Último",
                "sNext":            "Siguiente",
                "sPrevious":        "Anterior"
            },
            "oAria": {
                "sSortAscending":   ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending":  ": Activar para ordenar la columna de manera descendente"
            }
        } 
    });  
});

function eliminar(prod_id) {
    Swal.fire({
        title: 'Estas seguro de eliminar el registro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, bórralo!',
        cancelButtonText: '¡Cancelar!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../controller/producto.php?op=eliminar", {prod_id:prod_id}, function(data) {
                $('#producto_data').DataTable().ajax.reload();
            });
        
            Swal.fire(
                '¡Eliminado!',
                'El registro ha sido eliminado.',
                'success'
            )
        }
    })
}

function editar(prod_id) {
    console.log(prod_id);
}

function nuevo() {
    $('#lbltitulo').html('Nuevo Registro');
    $('prod_id').val('');
    $('#producto_form')[0].reset();
    $('#mntmantenimiento').modal('show');
}

init();