<?php
$host = "localhost";
$user ="root";
$pass="";
$db="bd_prueba_2";

$conexion= mysqli_connect($host, $user,$pass,$db);

$Chilena = mysqli_query($conexion, "SELECT count(*) as total FROM prueba_2 where nacionalidad='Chilena'");
$chilenos = mysqli_fetch_array($Chilena);


$Canadiense = mysqli_query($conexion, "SELECT count(*) as total FROM prueba_2 where nacionalidad='Canadiense'");
$canadienses = mysqli_fetch_array($Canadiense);


$Uruguaya = mysqli_query($conexion, "SELECT count(*) as total FROM prueba_2 where nacionalidad='Uruguaya'");
$uruguayos = mysqli_fetch_array($Uruguaya);


?>