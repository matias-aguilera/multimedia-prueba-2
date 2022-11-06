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
        <div id="contenido" class="container">
            <div class="row">
                <div id="section" class="col-8"><br>
                    <form action="procesar.php" name="" method="POST" enctype="multipart/form-data">
                        <table border="0" align="center">
                        <tr>
                            <td>
                            Nombre:
                            </td>
                            <td>
                            <label for="nombre"></label>
                            <input type="text" name="nombre"  required  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Apellido:
                            </td>
                            <td>
                            <label for="apellido"></label>
                            <input type="text" name="apellido"  required  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Rut (Sin -):
                            </td>
                            <td>
                            <label for="rut"></label>
                            <input type="text" name="rut"   required />
                            </td>
                        </tr>
                        <tr>
                        <td>
                            Fecha De Nacimiento:
                            </td>
                            <td>
                            <label for="fecha naciemiento"></label>
                            <input type="date" name="fecha"   />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Nacionalidad:
                            </td>
                            <td>
                            <label for="nacionalidad"></label>
                            <select id="select" name="nacionalidad">
                                <option>Chilena</option>
                                <option>Canadiense</option>
                                <option>Uruguaya</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                            Genero:
                            </td>
                            <td>
                            <label for="genero"></label>
                                <select id="select" name="genero">
                                    <option>Hombre</option>
                                    <option>Mujer</option>
                                    <option>Otros</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                            Ciudad De Recidencia:
                            </td>
                            <td>
                            <label for="ciudad"></label>
                            <input type="text" name="ciudad"  required  />
                            </td>
                        </tr>
                        <tr>
                        <tr>
                        <td>
                            Foto:
                            </td>
                            <td>
                            <label for="foto"></label>
                            <input type="file" name="foto"   required />
                            </td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input class="btn btn-info" type="submit" value="Enviar" name="enviar" id="enviar">
                            </td>
                        </tr>
                        </table>
                    </form>
                    <br>
                </div>
                <div id="aside" class="col-4" >
                PDF
                </div>
            </div>   
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

