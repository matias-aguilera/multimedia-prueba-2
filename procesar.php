<?php


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$fecha = $_POST['fecha'];
$nacionalidad = $_POST['nacionalidad'];
$genero = $_POST['genero'];
$ciudad = $_POST['ciudad'];
$foto = $_FILES['foto'];

$nombre_archivo = $nombre.$apellido;

//revisar envio de imagen(foto)

$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$check = getimagesize($foto["tmp_name"]);

if($check !== false) {
    include "index.php";
} else {
    echo "el archivo no es una imagen";
}

move_uploaded_file($foto["tmp_name"], $target_file);


//datos QR

$datos="Nombre:".$nombre." - Apellido:".$apellido." - Rut:".$rut." - Fecha de Nacimiento:".$fecha." - Nacionalidad:".$nacionalidad." - Genero:".$genero." - Ciudad:".$ciudad." - Foto:".$target_file ;

require ("phpqrcode/qrlib.php");

//$dir = 'temp/';
$d = dir("temp/");

$temp="temp/";

$filename=$temp.$nombre.$apellido.'.png';
$tamanio = 15;
$level= 'M';
$frameSize = 3;
$contenido= $datos;

QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);



//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "bd_prueba_2";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO prueba_2 (nombre, apellido, rut ,fecha,nacionalidad, genero, ciudad ,foto ) 
            VALUES('$nombre', '$apellido', '$rut' , '$fecha', '$nacionalidad','$genero', '$ciudad','$target_file')";

//3.- Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    echo "registro ingresado";
}else{
    echo "error al ingresar";
}
 



?>