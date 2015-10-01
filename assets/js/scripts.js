$(document).ready( function() {

    $('#tableController').DataTable({
        "paging":   true,
        "ordering": true,
        "info":     true,
        "order": [[ 3, "desc" ]],
        "language": {
            "lengthMenu": "Display _MENU_ resultados por página",
            "zeroRecords": "Nothing found - nada registrado",
            "info": "Páginas _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });

  
 // End document ready
});
