<?php
    include('consulta1.php');
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          
          ['Pais', 'CantidadP'],
          ['Chilenos', <?php echo $chilenos['total']?>],
          ['Canadienses', <?php echo $canadienses['total']?>],
          ['Uruguayos', <?php echo $uruguayos['total']?>]

        ]);

        var options = {
          title: 'Cantidad de personas Registradas por Pais'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

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
            <div id="piechart" ></div>

        </div>
        <div id="footer" class="container">
            <h3>TECNOLOGIA MULTIMEDIA  CIF:6459</h3> 
            <h4>Entrega: 06/11/2022 </h4>
            <h4>Integrantes: -Matias Aguilera - Arturo Rodriguez-</h4>
            <br>
        </div>
        
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script src="js/bootstrap.js"></script>
</body>
</html>

