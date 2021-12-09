<!DOCTYPE html>
<html lang="en">
<head>

<?php

if(isset($_POST['btn']) && $_POST['btn'] == 'Generar'){
$host = 'localhost';
$bdd = 'pozos_petroleros';
$user = 'root';
$pass = '';

$conex = new mysqli ($host, $user, $pass, $bdd);
if($conex->connect_errno){

    die("La conexión falló".$conex->connect_errno);


}

$consultaDatos1 = "SELECT * FROM pozosid WHERE ID = 1";
$queryDatos1 = $conex->query($consultaDatos1);

     while($filaDatos1 = $queryDatos1->fetch_array(MYSQLI_BOTH)){

        $pruebita1 = $filaDatos1['Medidas'];
        $pruebitaN1 = $filaDatos1['Nombres'];
        $pruebitaF1 = $filaDatos1['Fecha'];

     }

     $consultaDatos2 = "SELECT * FROM pozosid WHERE ID = 2";
     $queryDatos2 = $conex->query($consultaDatos1);
     
          while($filaDatos2 = $queryDatos2->fetch_array(MYSQLI_BOTH)){
     
             $pruebita2 = $filaDatos2['Medidas'];
             $pruebitaN2 = $filaDatos2['Nombres'];
             $pruebitaF2 = $filaDatos2['Fecha'];

          }

          $consultaDatos3 = "SELECT * FROM pozosid WHERE ID = 3";
$queryDatos3 = $conex->query($consultaDatos3);

     while($filaDatos3 = $queryDatos3->fetch_array(MYSQLI_BOTH)){

        $pruebita3 = $filaDatos3['Medidas'];
        $pruebitaN3 = $filaDatos3['Nombres'];
        $pruebitaF3 = $filaDatos3['Fecha'];

     }

     $consultaDatos4 = "SELECT * FROM pozosid WHERE ID = 4";
$queryDatos4 = $conex->query($consultaDatos4);

     while($filaDatos4 = $queryDatos4->fetch_array(MYSQLI_BOTH)){

        $pruebita4 = $filaDatos4['Medidas'];
        $pruebitaN4 = $filaDatos4['Nombres'];
        $pruebitaF4 = $filaDatos4['Fecha'];

     }

     $consultaDatos5 = "SELECT * FROM pozosid WHERE ID = 5";
$queryDatos5 = $conex->query($consultaDatos5);

     while($filaDatos5 = $queryDatos5->fetch_array(MYSQLI_BOTH)){

        $pruebita5 = $filaDatos5['Medidas'];
        $pruebitaN5 = $filaDatos5['Nombres'];
        $pruebitaF5 = $filaDatos5['Fecha'];

     }

     $consultaDatos6 = "SELECT * FROM pozosid WHERE ID = 6";
$queryDatos6 = $conex->query($consultaDatos6);

     while($filaDatos6 = $queryDatos6->fetch_array(MYSQLI_BOTH)){

        $pruebita6 = $filaDatos6['Medidas'];
        $pruebitaN6 = $filaDatos6['Nombres'];
        $pruebitaF6 = $filaDatos6['Fecha'];

     }

     $consultaDatos7 = "SELECT * FROM pozosid WHERE ID = 7";
$queryDatos7 = $conex->query($consultaDatos7);

     while($filaDatos7 = $queryDatos7->fetch_array(MYSQLI_BOTH)){

        $pruebita7 = $filaDatos7['Medidas'];
        $pruebitaN7 = $filaDatos7['Nombres'];
        $pruebitaF7 = $filaDatos7['Fecha'];

     }
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 | Gráficas</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', '<?php echo $pruebitaN1 ?>', '<?php echo $pruebitaN2 ?>', '<?php echo $pruebitaN3 ?>','<?php echo $pruebitaN4 ?>', '<?php echo $pruebitaN5 ?>', '<?php echo $pruebitaN6 ?>', '<?php echo $pruebitaN7 ?>'] ,
          ['0', 0, 0, 0, 0, 0, 0, 0] ,
          ['<?php echo $pruebitaF1?>', <?php echo $pruebita1 ?>, 0, 0, 0, 0, 0, 0],
          ['<?php echo $pruebitaF2?>', 0, <?php echo $pruebita2 ?>, 0, 0, 0, 0, 0],
          ['<?php echo $pruebitaF3?>', 0, 0, <?php echo $pruebita3 ?>, 0, 0, 0, 0],
          ['<?php echo $pruebitaF4?>', 0, 0, 0, <?php echo $pruebita4 ?>, 0, 0, 0],
          ['<?php echo $pruebitaF5?>', 0, 0, 0, 0, <?php echo $pruebita5 ?>, 0, 0], 
          ['<?php echo $pruebitaF6?>', 0, 0, 0, 0, 0, <?php echo $pruebita6 ?>, 0],
          ['<?php echo $pruebitaF7?>', 0, 0, 0, 0, 0, 0, <?php echo $pruebita7 ?>],
          ['2022', 0, 0, 0, 0, 0, 0, 0]
        ]);

        var options = {
          title: 'Medidas de Pozos Petroleros',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="curve_chart" style="width: 900px; height: 500px"></div>

</body>
</html>