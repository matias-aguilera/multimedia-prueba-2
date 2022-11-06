<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba-2</title>
    
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div id="contenedor" class="container">
        <div id="header" class="container">
            <div class="mx-auto" style="width: 100px;">
           <h1>Inicio</h1>
            </div>
        </div>
        <div id="nav" class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ingresarP.php">Ingresar Persona</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listaP.php">Lista Personas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="estadisticas.php">Estadisticas</a>
                </li>
            </ul>
        </div>
        <div id="contenido2" class="container">
            <?php

                $host = "localhost";
                $user ="root";
                $pass="";
                $db="bd_prueba_2";

                $conexion= mysqli_connect($host, $user,$pass,$db);

                $rut = $_POST['rut']  ??NULL;

                $vista = "SELECT * FROM prueba_2 where rut=$rut";
                $resultado = mysqli_query($conexion, $vista);

                while($fila = mysqli_fetch_assoc($resultado)){
                    echo " 
                            <tr>
                                <td>
                                    <div class='card mb-3' style='max-width: 540px;'>
                                        <div class='row no-gutters'>
                                            <div class='col-md-4'>
                                                <br><img src='" . $fila['foto'] . "' class='card-img-top' alt='Card image' style='witdth:100px'>
                                            </div>
                                            <div class='col-md-8'>
                                                <div class='card-body'>
                                                    <h1><p class='card-text'>" . $fila['nombre']." ".$fila['apellido'] . "</h1></p>
                                                    <p class='card-text'>Rut: " .$fila['rut'] . "</p>
                                                    
                                                </div>
                                            </div>
                                            <div class='col'>
                                                <p class='card-text'>Fecha de Nacimiento: " . $fila['fecha'] . "<br></p>
                                                <p class='card-text'>Nacionalidad: " . $fila['nacionalidad'] . "<br></p>
                                                <p class='card-text'>Genero: " . $fila['genero'] . "<br></p>
                                                <p class='card-text'>Ciudad: " . $fila['ciudad'] . "<br></p>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                <form action='Pdf.php' method='POST'>
                                <input type='text' hidden name='rut' value='" . $fila['rut'] . "'/>
                                <input class='btn btn-danger' type='submit' name='PDF' value='PDF'/>
                                </form>
                                
                                </td>
                            </tr>";                    
                }


            ?>    


        </div>
        <div id="footer" class="container">
            <h3>TECNOLOGIA MULTIMEDIA  CIF:6459</h3> 
            <h4>Entrega: 06/11/2022 </h4>
            <h4>Integrantes: -Matias Aguilera - Arturo Rodriguez-</h4>
            <br>
        </div>
        
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>