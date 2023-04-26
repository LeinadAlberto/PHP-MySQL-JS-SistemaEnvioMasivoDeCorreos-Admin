
$(document).ready( function () {
    $('#usuario_data').DataTable({
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
            url: '../../controller/usuario.php?op=listar',
            type: "post",
            /* dataType: "json",
            error: function(e) {
                console.log(e.responseText);
            } */
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,        //Por cada 10 usuarios hace una páginación
        "order": [[ 0, "asc" ]],
        "language": {
            "sProcessing":          "Procesando...",
            "sLengthMenu":          "Mostrar _MENU_ usuarios",
            "sZeroRecords":         "No se encontraron resultados",
            "sEmptyTable":          "Ningún dato disponible en esta tabla",
            "sInfo":                "Mostrando un total de _TOTAL_ usuarios",
            "sInfoEmpty":           "Mostrando un total de 0 usuarios",
            "sInfoFiltered":        "(filtrado de un total de _MAX_ usuarios)",
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

function eliminar(usu_id) {
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
            $.post("../../controller/usuario.php?op=eliminar", {usu_id:usu_id}, function(data) {
                $('#usuario_data').DataTable().ajax.reload();
            });
        
            Swal.fire(
                '¡Eliminado!',
                'El registro ha sido eliminado.',
                'success'
            )
        }
    })
}