<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 | Medidas en Pozos</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<div>
<h1 align="center"><span style= "color: white">Medidas en Pozos Petroleros</span></h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <table border="2" align="center">
        <tr>
            <td>Ingrese el nombre del pozo:</td>
            <td><input required type="text" name="nombre"></td>
        </tr>
        <tr>
            <td>Ingrese la medida PSI del pozo:</td>
            <td><input required type="text" name="medida"></td>
        </tr>
    </table>
    <table align="center">
        <tr>
    <td><input type="submit" name="btn" value="Guardar Datos">
    </tr>
    <br><br>
    </table>
</form>

</div>
</header>

<?php

///////////////////////////////////////////////////  CONEXIÓN BDD  //////////////////////////////////////////////////////

$host = 'localhost';
$bdd = 'pozos_petroleros';
$user = 'root';
$pass = '';

$conex = new mysqli ($host, $user, $pass, $bdd);
if($conex->connect_errno){

    die("La conexión falló".$conex->connect_errno);

}

///////////////////////////////////////////////// INSERTANDO POZOS ///////////////////////////////////////////////////////

if(isset($_POST['btn']) && $_POST['btn'] == 'Guardar Datos'){


    $pozo = $_POST['nombre'];
    $medida = $_POST['medida'];

    $conex->query("INSERT INTO pozosid (ID, Nombres, Fecha, Medidas) VALUES ( (SELECT ID FROM pozosid t ORDER BY t.Id DESC LIMIT 1)+1, '$pozo', NOW(), '$medida')");

    echo "<h3 align='center'> Datos insertados satisfactoriamente </h3>";

}

//////////////////////////////////////////////// CONSULTA DE DATOS EN LA BDD //////////////////////////////////////////////

echo "<h3 align='Center'> Datos guardados: </h3>";


$consultaDatos = "SELECT * FROM pozosid ORDER BY ID";
$queryDatos = $conex->query($consultaDatos);

echo "<table align='center' border='1'>

    <tr>
    <th> ID </th>
    <th> NOMBRES </th>
    <th> MEDIDAS</th>
    <th> FECHA/HORA </th>
    </tr>";

     while($filaDatos = $queryDatos->fetch_array(MYSQLI_BOTH)){

        echo "<tr>
            <td>".$filaDatos['ID']."</td>
            <td>".$filaDatos['Nombres']."</td>
            <td>".$filaDatos['Medidas']."</td>
            <td>".$filaDatos['Fecha']."</td>       
        </tr>";

     }

     echo "</table>";

///////////////////////////////////////////////// GENERAR GRÁFICAS /////////////////////////////////////////////////////////

     echo " <br><br>
            <h5 align='center'>Generar Gráficas (Ingrese 2 pozos más):</h5>
            <form align ='center' method='post' action='prueba.php'>
            <input type='submit' name='btn' value='Generar'>
            </form>   
     ";


    ?>

    <div id="miTabla">

    </div>

</body>
</html>