<!-- IMPORTANTICIMO SÓ VAI FUNCIONAR RODANDO EM UM SERVIDOR
LOCALMENTE NÃO FUNCIONA VAI DAR O ERRO  Access to XMLHttpRequest at from origin 'null' has been blocked by CORS
SE QUISER RODAR LOCAL NO VISUAL STUDIO CODE INSTALE O LIVE SERVER DEPOIS APERTE F1
PESQUISE POR LIVE SERVER E CLIQUE EM OPEN WITH LIVE SERVER-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable com dados do banco de dados em php</title>
    <!-- jquery.dataTable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">       
</head>

<body>

	<!-- Tabela com os campos de cabeçalho -->
	<div class="container mt-5">
		<h2 style="margin-bottom: 30px;">DataTable com dados do banco de dados em php</h2>
		<table id="jquery-datatable-ajax-php" class="display" style="width:100%">
	        <thead>
	            <tr>
	                <th>Email</th>
	                <th>Firstname</th>
	                <th>Lastname</th>
	                <th>Address</th>
	            </tr>
	        </thead>
	    </table>
	</div>


	<!-- jquery.js -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- jquery.dataTable.min.js -->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<!-- app_ajax.js onde está a função que vai carregar os dados -->
	<script type="text/javascript" src="app_ajax.js"></script>


</body>
</html>