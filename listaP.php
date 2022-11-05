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
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Rut</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $host = "localhost";
                        $user ="root";
                        $pass="";
                        $db="bd_prueba_2";
        
                        $conexion= mysqli_connect($host, $user,$pass,$db);

                        $sql = "Select * From prueba_2 ";
                        $result = mysqli_query($conexion, $sql);
                        if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            
                            <td>" . $row['nombre'] . "</td>
                            <td>" . $row['apellido'] . "</td>
                            <td>" . $row['rut'] . "</td>


                            <td>

                                <input class='btn btn-info' type='submit' name='ver' value='Ver'/>
                                
                                <a href='crearPdf.php? id_usuario=" . $row['rut'] . "' target='_self' class='btn btn-danger'>PDF</a>
                                

                            </td>
                        </tr>";
                        }
                        } else {
                        echo "0 resultados";
                        }
                        

                    ?>

                </tbody>
            </table>
            
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

