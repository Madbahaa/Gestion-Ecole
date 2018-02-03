<?php 
  require_once("connexion.php");
  $code = $_GET['code'];
  $req = "delete from etudiant where CodeEtudiant = '$code'";
  mysqli_query($conn,$req) or die (mysql_error());
  header("location:afficherEtudiant.php");
?>