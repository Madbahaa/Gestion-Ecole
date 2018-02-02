<?php
  $conn = mysqli_connect("localhost","root","") or die(mysql_error());
  mysqli_select_db($conn,"gestionecole") or die(mysql_error());
?>