$(document).ready( function() {

    $('#tableController').DataTable({

        "order": [[ 3, "desc" ]],
        "language": {
            "lengthMenu": "Exibir _MENU_ resultados por página",
            "zeroRecords": "Nada encontrado",
            "info": "Páginas _PAGE_ de _PAGES_",
            "infoEmpty": "Não há registros disponíveis",
            "infoFiltered": "(Filtros para _MAX_ total de registros)",
            "loadingRecords": "Carregando...",
            "processing":     "Processando...",
            "search":         "Pesquisar: ",
            "paginate": {
                "first":      "Primeiro",
                "last":       "Último",
                "next":       "Próximo",
                "previous":   "Anterior"
            }
        }
    });
    
    $('#tableController_length, #tableController_filter').addClass('col-md-6 col-xs-12 not-padding');
    $('#tableController_info').addClass('col-md-3 col-sm-4 col-xs-12 not-padding');
    $('#tableController_paginate').addClass('col-md-9 col-sm-8 col-xs-12 not-padding');
  

  
 // End document ready
});
