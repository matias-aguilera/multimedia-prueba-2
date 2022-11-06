<?php


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$fecha = $_POST['fecha'];
$nacionalidad = $_POST['nacionalidad'];
$genero = $_POST['genero'];
$ciudad = $_POST['ciudad'];
$foto = $_FILES['foto'];

$nombre_archivo = $rut;

//revisar envio de imagen(foto)

$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';

$nAncho=100;
$nAlto=100;

if($_FILES['foto']['error']=== UPLOAD_ERR_OK){
    $imagen_original= $_FILES['foto']['tmp_name'];

    $img_original= imagecreatefromjpeg($imagen_original);

    $ancho_original= imagesx($img_original);
    $alto_original= imagesy($img_original);

    $tmp= imagecreatetruecolor($nAncho,$nAlto);
    imagecopyresized($tmp, $img_original,0,0,0,0,$nAncho,$nAlto,$ancho_original,$alto_original);

    imagejpeg($tmp,$target_file,100);

}




$check = getimagesize($foto["tmp_name"]);

if($check !== false) {
    include "index.php";
}else {
    echo "imagen no es formato jpeg";
}




//datos QR

$datos="Nombre:".$nombre." - Apellido:".$apellido." - Rut:".$rut." - Fecha de Nacimiento:".$fecha." - Nacionalidad:".$nacionalidad." - Genero:".$genero." - Ciudad:".$ciudad." - Foto:".$target_file ;

require ("phpqrcode/qrlib.php");

//$dir = 'temp/';
$d = dir("temp/");

$temp="temp/";

$filename=$temp.$rut.'.png';
$tamanio = 5;
$level= 'S';
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