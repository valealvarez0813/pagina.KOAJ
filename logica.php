<?php 

//Cajoneras o arreglos donde los cajones o elementos tienen nombres asignados por numeros
//ARREGLOS INDEXADOS
$productos=array("camisa","gorra","tennis","camiseta");
print_r($productos);
echo("<br>");
echo($productos[0]);

//ARREGLOS ASOCIATIVOS
echo("<br>");
echo("<br>");
$productosAsociativos=array("producto1"=>"camisa","producto2"=>"gorra","producto3"=>"tennis","producto4"=>"camiseta");

print_r($productosAsociativos);
echo("<br>");
echo($productosAsociativos["producto1"]);

//CICLO FOREACH
echo("<br>");
echo("<br>");
foreach($productosAsociativos as $clave=>$valor){

    echo($clave.": ".$valor);
    echo("<br>");
  

}


?>