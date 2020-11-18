<?php 

//arreglo 1 dimension
$precios=array(1600,5000,2500);
$nombres=array("arroz","salchichas","azucar");
$marcas=array("Diana","Zenú","Incauca");


//arreglo multidimensional
$productos=array(
    "producto1"=>array("camisa",1600,"nasa"),
    "producto2"=>array("gorra",5000,"plana"),
    "producto3"=>array("tennis",2500,"blancos"),
    "producto4"=>array("camiseta",7000,"cuello redondo")
);

//Abrir cada cajon del arreglo y sacare los elementos de ese cajon:
foreach($productos as $producto){

    
    echo($producto[0]);
    echo("<br>");


}








?>