<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){

    //1. Recibir los datos
    $descripcion=$_POST["descripcion"];
    $nombreproducto=$_POST["nombreproducto"];
    $color=$_POST["color"];
    $talla=$_POST["talla"];
    

    
    //2. crear un objeto(copia) de la clase BaseDatos()
    $operacionBD= new BaseDatos();
    
   

    //3.Necesito crear una consulta SQL para insertar datos
    $consultaSQL="INSERT INTO productos(nombreproducto, talla, color, descripcion) VALUES ('$descripcion','$nombreproducto','$color','$talla')";
    //4. llamar al metodo agregarDatos() de la clase BaseDatos
     $operacionBD->agergarDatos($consultaSQL);
}




?>