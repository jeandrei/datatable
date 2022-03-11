<?php
   // Database Connection
   include 'connection.php';

   /**
    * Parâmetros datatable.php
    */
    //Tabela no banco de dados
    $table = "funcionarios";   
   
  
   // Reading value
   // Dados do datatable não meche nisso
   $draw = $_POST['draw'];
   $row = $_POST['start'];
   $rowperpage = $_POST['length']; // Rows display per page
   $columnIndex = $_POST['order'][0]['column']; // Column index
   $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
   $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
   $searchValue = $_POST['search']['value']; // Search value

  

   $searchArray = array();

   // Search
   //Os campos que a query ira buscar no campo buscar do datatable
   $searchQuery = " ";
   if($searchValue != ''){
      $searchQuery = " AND (nome LIKE :nome OR 
           posicao LIKE :posicao OR
           salario LIKE :salario ) ";
      $searchArray = array( 
           'nome'=>"%$searchValue%",
           'posicao'=>"%$searchValue%",
           'salario'=>"%$searchValue%"
      );
   }

   // Total number of records without filtering
   $stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM $table ");
   $stmt->execute();
   $records = $stmt->fetch();
   $totalRecords = $records['allcount'];

   // Total number of records with filtering
   $stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM $table WHERE 1 ".$searchQuery);
   $stmt->execute($searchArray);
   $records = $stmt->fetch();
   $totalRecordwithFilter = $records['allcount'];

   // Fetch records
   $stmt = $conn->prepare("SELECT * FROM $table WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT :limit,:offset");

   // Bind values
   foreach ($searchArray as $key=>$search) {
      $stmt->bindValue(':'.$key, $search,PDO::PARAM_STR);
   }

   $stmt->bindValue(':limit', (int)$row, PDO::PARAM_INT);
   $stmt->bindValue(':offset', (int)$rowperpage, PDO::PARAM_INT);
   $stmt->execute();
   $empRecords = $stmt->fetchAll();

   $data = array();
   
    /** 
    * 1 Atualize os campos que serão passados pelo sql e que deseja apresentar na tabela
    * aqui são todos os campos desejados independentemente se quer apresentar no detalhe ou na tabela principal
    * depois passe para o arquivo app_ajax
    */
   foreach ($empRecords as $row) {
      $data[] = array(
         "nome"=>$row['nome'],
         "posicao"=>$row['posicao'],
         "salario"=>$row['salario'],
         "extn" => $row['extn'],
         "escritorio"=>$row['escritorio']
      );
   }

   // Response
   $response = array(
      "draw" => intval($draw),
      "iTotalRecords" => $totalRecords,
      "iTotalDisplayRecords" => $totalRecordwithFilter,
      "aaData" => $data
   );

   
   echo json_encode($response);