<?php 
  require_once("connexion.php");
  $pseudo = $_POST['pseudo'];
  $pass = $_POST['pass'];
  $req = "select * from utilisateur where Pseudo='$pseudo' and MotDePasse='$pass'";
  $rs = mysqli_query($conn,$req) or die(mysql_error());
  if($u = mysqli_fetch_assoc($rs)){
    session_start();
    $_SESSION['niv']=$u['Niveau'];
    header("location:dashboard.php");
  }else{
    header("location:index.html");
    
  }
?>