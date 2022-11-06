<?php
    


    include("procesar.php");

    if (isset($_POST['Ver'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $rut = $_POST['rut'];
        $fecha = $_POST['fecha'];
        $nacionalidad = $_POST['nacionalidad'];
        $genero = $_POST['genero'];
        $ciudad = $_POST['ciudad'];
        $foto = $_FILES['foto'];

        $resultado= mysqli_query($conexion,"select * from prueba_2 where rut= $rut");
        while($consulta= mysqli_fetch_array($resultado)){
            echo $consulta['nombre'];
            echo"<br>";
        }
        
    }


?>