<?php
  function array_push_assoc($array, $key, $value){
    $array[$key] = $value;
    return $array;
    }


  function array_teste($array, $key, $value){
    $array[$key] = $value;
  }



  function arrayInsert($array, $position, $insertArray)
{
    $ret = [];

    if ($position == count($array)) {
        $ret = $array + $insertArray;
    }
    else {
        $i = 0;
        foreach ($array as $key => $value) {
            if ($position == $i++) {
                $ret += $insertArray;
            }

            $ret[$key] = $value;
        }
    }

    return $ret;
}

  
 /* 
  $fields = ["nome", "posicao","salario","extn","escritorio"];
  var_dump($fields);
  echo("<hr>");
*/

  $add[] = array("nome"=>NULL, "posicao"=>NULL,"salario"=>NULL,"extn"=>NULL,"escritorio"=>NULL);  
  array_merge($add,["Campo" => "Valor"]);


  /*
  foreach($add as $a){
    $fields2[]=[$a => null];
  }
  */
  var_dump($add);





  echo("<hr>");

  $data2[] = array(
    "nome"=>$row['nome'],
    "posicao"=>$row['posicao'],     
    "salario"=>$row['salario'],  
    "extn"=>$row['extn'],
    "escritorio"=>$row['escritorio'] 
 );


 var_dump($data2);



?>