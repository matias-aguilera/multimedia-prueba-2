<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>ver </h1>
      <table border="0" align="center">
        <tr>
          <td>
          <?php

$host = "localhost";
    $user ="root";
    $pass="";
    $db="bd_prueba_2";

    $conexion= mysqli_connect($host, $user,$pass,$db);
   

    $vista = "SELECT * FROM prueba_2";
    $resultado = mysqli_query($conexion, $vista);

        while($fila = mysqli_fetch_assoc($resultado)){
         
        echo "----  ----  ----  ----  ---<br>";
         echo "nombre: " .$fila["nombre"] . "<br>";
         echo "apellido: " .$fila["apellido"] . "<br>";
         echo "rut: " .$fila["rut"] ."<br>";
         echo "fecha de nacimiento: " .$fila["fecha"] ."<br>";
         echo " nacionalidad: " .$fila["nacionalidad"] ."<br>";  
         echo " genero: " .$fila["genero"] ."<br>";    
         echo " ciudad: " .$fila["ciudad"] ."<br>";     
         echo " foto: " .$fila["foto"] ."<br>"; 
         echo "----  ----  ----  ----  ---<br>";

    }


?>
          </td>
          <td>
            
      </table>
    </form>

</body>
</html>