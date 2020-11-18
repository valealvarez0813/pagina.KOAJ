<?php 

//Incluir el archivo donde esta mi clase
include("Ropa.php");

//Tengo que sacar la copia (Instancia de la clase)
//Crear un Objeto
$camisanasa= new Ropa();


//Acceder a un atributo
$camisanasa->cantidaddecamisas="16";
echo($camisanasa->cantidaddecamisas);


//Accder a un metodo
$camisanasa->cantidad();





?>