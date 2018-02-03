<?php 
  require_once("connexion.php");
  $code=$_GET['code'];
  $req = "select * from etudiant where CodeEtudiant='$code'";
  $rs = mysqli_query($conn,$req) or die(mysql_error());
  $ET = mysqli_fetch_assoc($rs);
  
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Modifier</title>
    </head>

    <body>
          
    <?php require "sidenav.php"?>
    
  <div class="row">
    <h5 class="teal-text" style="margin-left: 20px;">Modifier un etudiant</h5>
    <form class="col s8" method="post" action="modifierEtudiantFunction.php">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" name="prenom" value="<?php echo $ET['Prenom']; ?>" type="text" class="validate" required>
          <label for="first_name">Prenom</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="nom" value ="<?php echo ($ET['Nom']) ?>" type="text" class="validate" required>
          <label for="last_name">Nom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="CNE" name="cne" value ="<?php echo $ET['CodeEtudiant']?>" type="text" readonly class="validate" required>
          <label for="CNE">Code National</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" value ="<?php echo $ET['Email']?>" class="validate" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="adresse" name="adresse" type="text" value ="<?php echo $ET['Adresse']?>" class="validate" required>
          <label for="adresse">Adresse</label>
        </div>
      </div>
      <label>Classe</label>
        <select class="browser-default" disabled name="classe">
          <option value="" disabled selected>Choisir une classe</option>
          <?php while($classe = mysqli_fetch_assoc($rs)){?>
          <option value="value ="<?php echo $ET['CodeClass']?>""><?php echo $ET['CodeClasse']?></option>
          <?php }?>
        </select>
        <br>
        <button class="btn waves-effect waves-light" type="submit" name="action">Modifer
          <i class="material-icons right">send</i>
        </button>
              
    </form>
  </div>
        



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
  </html>

  <style>
    body {
      padding-top: 20px;
      padding-left: 400px;
    }
  </style>


 