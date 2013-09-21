<html>
  <head>
    <link  rel="stylesheet" type="text/css" href="gastos.css" /> 
    <title>Mis Gastos</title>
  </head>
  <body>
    <div id="form">
<?php

  $gasto = $_POST["gasto"];
  $cantidad = $_POST["cantidad"];
  $fecha = date("m/d/y");
  if (strlen($cantidad) > 0) {
    require("connect_db.php");
    mysql_query("insert into gastos  (fecha, gasto, cantidad) values ('$fecha', '$gasto', '$cantidad')");
    mysql_close($link);
  } else {
    echo "Escriba una Cantidad<br />";
  }

echo "Gaste en $gasto esta cantidad $cantidad<br /><br />";
?>

<a href="gastos.html">Ir al formulario</a>
    </div>
  </body>
</html>
