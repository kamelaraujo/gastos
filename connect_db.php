<?php
  $link = mysql_connect ("localhost","root","password");

  if ($link) {
    mysql_select_db ("gastos",$link);
  }


?>
