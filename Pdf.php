<?php
ob_start();
?>


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
    <table>
    <?php

        $host = "localhost";
        $user ="root";
        $pass="";
        $db="bd_prueba_2";

        $conexion= mysqli_connect($host, $user,$pass,$db);

        $rut = $_POST['rut']  ??NULL;

        $vista = "SELECT * FROM prueba_2 where rut='$rut'";
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
                        
                    </tr>";                    
        }/*http://<?php echo $_SERVER['HTTP_HOST'];?>*/
    ?> 
    
    </table>
    <script src="js/bootstrap.js"></script>
</body>

</html>

<?php
$html= ob_get_clean();
//echo $html;


require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf= new Dompdf();

$options = $dompdf->getOptions();
$options ->set(array('isRemoteEnabled' => true));
$dompdf ->setOptions($options);

$dompdf ->loadHtml($html);

$dompdf ->setPaper('A6','landscape');

$dompdf-> render();

$dompdf -> stream("archivo_.pdf", array("Attachment" => false));





?>




