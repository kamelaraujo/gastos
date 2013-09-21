<html>
  <head>
    <link  rel="stylesheet" type="text/css" href="reset.css" /> 
    <link  rel="stylesheet" type="text/css" href="gastos.css" /> 
    <title>Mis Gastos</title>
  </head>
  <body>
 <?php
  require("connect_db.php");

  $consulta = "select * from gastos";


  $resultado = mysql_query ($consulta);

  if (!$resultado) {
    die ("No se pudo hacer la consulta sobre la base de datos: <br />".mysql_error());  
  }

  var_dump($resultado_row = mysql_fetch_array($resultado, MYSQL_ASSOC));
?>
<table border = "5px">
<tr>
  <td>ID</td>
  <td>FECHA</td>
  <td>GASTO</td>
  <td>CANTIDAD</td>
</tr>
<?php
  while ($resultado_row = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
?> 
<tr>  
  <td><?php echo $resultado_row['id']."<br />";?></td>
  <td><?php echo $resultado_row['fecha']."<br />";?></td>
  <td><?php echo $resultado_row['gasto']."<br />";?></td>
  <td><?php echo $resultado_row['cantidad']."<br />";?></td>
</tr>

<?php
  }
?>
  <td colspan = "3">Gastos totales:</td>
  <td>100</td>

</table>
</body>
</html>
