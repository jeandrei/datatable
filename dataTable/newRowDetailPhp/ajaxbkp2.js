
/*Campos que vem do banco de dados tem que ser igual ao que está no
arquivo que faz a busca no banco de dados nesse caso datatable.php
foreach ($empRecords as $row) {
    $data[] = array(
        "nome"=>$row['nome'],
        "posicao"=>$row['posicao'],
*/

let campos = ["nome", "posicao", "escritorio", "salario"];

let details = {
    "Nome Completo" : "nome",
    "Número da Extenção" : "extn",
    "Escritório" : "escritorio"
}



//console.log(details);


/**
 * Array columns e valores padrão className, orderable, data e defaultContent não se altera
 * Depis na linha abaixo do for vamos adicionar os campos no array data
 * que se mantivesse horiginal estaria assim
 * 
 * {
        "className":      'dt-control',
        "orderable":      false,
        "data":           null,
        "defaultContent": ''
    }
    ,
    { "data": "nome" },
    { "data": "posicao" },
    { "data": "escritorio" },
    { "data": "salario" }
 * 
 * 
 * 
 */
let columns =  [
    {
        "className":      'dt-control',
        "orderable":      false,
        "data":           null,
        "defaultContent": ''
    }
  
];


/**
 * 
 * For vai adicionar os campos ao array data
 *  { "data": "nome" },
    { "data": "posicao" },
    { "data": "escritorio" },
    { "data": "salario" }
 * 
 */
for(let row of campos){
    columns.push({data : row});
}




/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    
   
    let labels = new Array();
    //pego o que vai aparecer como label Nome Completo, Número de Extenção e Escritorio
    for(let key in details){
        labels.push(key);
    }

       
    //codigo+='<tr>'+'<td>'+ labels[0]+':</td>'+'<td>'+d.details[labels[0]]+'</td>'+'</tr>';

    //console.log(details[labels[0]]);

   console.dir(details);

    let value = `d.${details[labels[0]]}`;
    console.log(value);
    code='<tr>'+'<td>'+ labels[0]+':</td>'+'<td>'+eval(value)+'</td>'+'</tr>';
    console.log(code);


    /* aqui expande os dados na tabela ao clicar  
     * 3 Coloque os campos que irao aparecer no detalhe
     * 
     */
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        code+
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
        "columns": columns,
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