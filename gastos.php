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

echo "Gaste en $gasto esta cantidad $cantidad<br /><br />";
?>

<a href="gastos.html">Ir al formulario</a>
    </div>
  </body>
</html>
