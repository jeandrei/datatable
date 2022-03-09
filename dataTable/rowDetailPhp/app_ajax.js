/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    /* aqui expande os dados na tabela ao clicar */
    
   
    /**
     * 3 Coloque os campos que irao aparecer no detalhe
     * 
     */
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Nome completo:</td>'+
            '<td>'+d.nome+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Número da extencao:</td>'+
            '<td>'+d.extn+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Escritório:</td>'+
            '<td>'+d.escritorio+'</td>'+
        '</tr>'+
    '</table>';
}
 
$(document).ready(function() {
    var table = $('#example').DataTable( {
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
            'url':'datatable.php'//Arquivo php que faz a consulta no banco de dados
        },
        "oLanguage": {
            "sProcessing":      "Procesando...",
            "sLengthMenu":      "Mostrando _MENU_ registros por página",
            "sEmptyTable":      "Nenhum dado disponível na tabela",
            "sZeroRecords":     "Ops! Nada encontrado.",
            "sInfo":            "Mostrando de _START_ a _END_ de _TOTAL_ registros",
            "sInfoEmpty":       "Mostrando de 0 até 0 de 0 records",
            "sInfoFiltered":    "(filtrado de _MAX_ total de registros)",
            "sSearch":          "Buscar:",
            "sUrl":             "",
            "sInfoThousands":   ",",
            "sLoadingRecords":  "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            }
        },
        /* colunas da tabela que queremos expandir vem lá do array.json */
       
        /**
         * 2 Atualize os campos que irão aparecer na tabela principal 
         * depois aqui mesmo vá para o passo 3
         */
        "columns": [
            {
                "className":      'dt-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "nome" },
            { "data": "posicao" },
            { "data": "escritorio" },
            { "data": "salario" }
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.dt-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );