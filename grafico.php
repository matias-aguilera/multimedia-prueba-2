<html>
  <head>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Paises', 'Cantidad'],
          ['Chilena',   <?php echo $Chile['cant']?>],
          ['Canadiense', <?php echo $Canada['cant']?>],
          ['Uruguaya ', <?php echo $Uruguay['cant']?>]
        ]);

        var options = {
          title: 'nacionalidades'
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