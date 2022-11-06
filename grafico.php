<?php

$host = "localhost";
$user ="root";
$pass="";
$db="bd_prueba_2";  

$conexion= mysqli_connect($host, $user,$pass,$db);
return $conexion;


//datos para grafico circular
$Chilena = mysqli_query($conexion, "SELECT count(rut) as cant FROM prueba_2 WHERE nacionalidad='Chilena'") or
die("Problemas en el select:" . mysqli_error($conexion));
$chile = mysqli_fetch_array($Chilena);
//select de chilenos

$Canadiense= mysqli_query($conexion, "SELECT  count(rut) as cant FROM prueba_2 WHERE nacionalidad='Canadiense'") or
die("Problemas en el select:" . mysqli_error($conexion));
$Canadiense = mysqli_fetch_array($Canadiense);
//select de canadienses

$Uruguaya = mysqli_query($conexion, "SELECT  count(rut) as cant FROM prueba_2 WHERE nacionalidad='Uruguaya'") or
die("Problemas en el select:" . mysqli_error($conexion));
$Uruguaya = mysqli_fetch_array($Uruguaya );

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Pais', 'Cantidad'],
          ['Chilena',     <?php echo $Chilena['cant']?>],
          ['Canadiense',  <?php echo $Canadiense['cant']?>],
          ['Uruguaya ',  <?php echo $Uruguaya ['cant']?>]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>