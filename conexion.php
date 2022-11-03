<?php
//conexion para bd



    $host = "localhost";
    $user ="root";
    $pass="";
    $db="bd_prueba_2";  

    $conexion= mysqli_connect($host, $user,$pass,$db);
    return $conexion;


     




?>