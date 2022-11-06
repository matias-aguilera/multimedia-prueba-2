<?php

$host = "localhost";
$user ="root";
$pass="";
$db="bd_prueba_2";  

$conexion= mysqli_connect($host, $user,$pass,$db);
return $conexion;


//datos para grafico circular
//select de chilenos
$Chilena = mysqli_query($conexion, "SELECT count(rut) as cant FROM prueba_2 WHERE nacionalidad='Chilena'") or
die("Problemas en el select:" . mysqli_error($conexion));
$chile = mysqli_fetch_array($Chilena);


//select de canadienses
$Canadiense= mysqli_query($conexion, "SELECT  count(rut) as cant FROM prueba_2 WHERE nacionalidad='Canadiense'") or
die("Problemas en el select:" . mysqli_error($conexion));
$Canada= mysqli_fetch_array($Canadiense);

//select para uruguay
$Uruguaya = mysqli_query($conexion, "SELECT  count(rut) as cant FROM prueba_2 WHERE nacionalidad='Uruguaya'") or
die("Problemas en el select:" . mysqli_error($conexion));
$Uruguay = mysqli_fetch_array($Uruguaya );

?>