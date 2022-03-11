<!-- IMPORTANTICIMO SÓ VAI FUNCIONAR RODANDO EM UM SERVIDOR
LOCALMENTE NÃO FUNCIONA VAI DAR O ERRO  Access to XMLHttpRequest at from origin 'null' has been blocked by CORS
SE QUISER RODAR LOCAL NO VISUAL STUDIO CODE INSTALE O LIVE SERVER DEPOIS APERTE F1
PESQUISE POR LIVE SERVER E CLIQUE EM OPEN WITH LIVE SERVER-->


<?php
/**
 ********************************************* Parâmetros index.php **********************************************
 */

 
 $settings = array(
     //Cabeçalho e roda pé da tabela
     "tableFields" => [
        "Nome do funcionário",
        "Posição",
        "Escritório",
        "Salário"
     ],
     //Título da página
     "title" => "Modelo Datatable php com parâmetros"
 );


 
 /************************************************************************************************************* */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($settings["title"]); ?></title>
    <!-- jquery.dataTable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
   
    
</head>
<body>

    <table id="example" class="display" style="width:100%">
        <!-- cabeçalho da tabela -->
        <thead>
            <tr>
                <th></th>               
                <?php foreach($settings['tableFields'] as $field) : ?>                                  
                    <th><?php echo $field; ?></th>
                <?php endforeach; ?>                
            </tr>
        </thead>
        <!-- rodapé da tabela -->
        <tfoot>
             <tr>
                <th></th>               
                <?php foreach($settings['tableFields'] as $field) : ?>                                  
                    <th><?php echo $field; ?></th>
                <?php endforeach; ?>                
            </tr>
        </tfoot>
    </table>
     <!-- jquery.js -->
     <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <!-- jquery.dataTable.min.js -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="app_ajax.js"></script>
</body>
</html>