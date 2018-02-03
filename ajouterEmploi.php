<?php 
  require_once("connexion.php");
  $req1 = "select Nom from enseignant";
  $rs1= mysqli_query($conn,$req1) or die(mysql_error());
  $req2 = "select NomMatiere from matiere";
  $rs2= mysqli_query($conn,$req2) or die(mysql_error());
  $req3 = "select CodeSalle from salle";
  $rs3= mysqli_query($conn,$req3) or die(mysql_error());
  $req4 = "select CodeClasse from classe";
  $rs4= mysqli_query($conn,$req4) or die(mysql_error());
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
      <title>Ajouter une emploi </title>
    </head>

    <body>
          
    <?php require "sidenav.php"?>
      
  <div class="row">
    <h5 class="teal-text" style="margin-left: 20px;">Ajouter une emploi</h5>
    <form class="col s8" method="post" action="ajouterEmploiFunction.php">
        <label>Jour</label>
        <select class="browser-default" name="jour" required>
          <option value=""  selected>Choisir un jour</option>
          <option value="Lundi">Lundi</option>
          <option value="Mardi">Mardi</option>
          <option value="Mercredi">Mercredi</option>
          <option value="Jeudi">Jeudi</option>
          <option value="Vendredi">Vendredi</option>
        </select>
        <label>Heure de debut</label>
        <select class="browser-default" name="heuredebut" required>
          <option value=""  selected>Choisir une heure</option>
          <option value="8h">8h</option>
          <option value="9h">9h</option>
          <option value="10h">10h</option>
          <option value="11h">11h</option>
          <option value="14h">14h</option>
          <option value="15h">15h</option>
          <option value="16h">16h</option>
          <option value="17h">17h</option>
        </select>
        <label>Heure de fin</label>
        <select class="browser-default" name="heurefin" required>
          <option value=""  selected>Choisir une heure</option>
          <option value="9h">9h</option>
          <option value="10h">10h</option>
          <option value="11h">11h</option>
          <option value="12h">12h</option>
          <option value="15h">15h</option>
          <option value="16h">16h</option>
          <option value="17h">17h</option>
          <option value="18h">18h</option>
        </select>
        <label>Enseignant</label>
        <select class="browser-default" name="enseignant" required>
          <option value=""  selected>Choisir un enseignant</option>
          <?php while($ens = mysqli_fetch_assoc($rs1)){?>
          <option value="<?php echo $ens['Nom']?>"><?php echo $ens['Nom']?></option>
          <?php }?>
        </select>
        <label>Matiere</label>
        <select class="browser-default" name="matiere" required>
          <option value=""  selected>Choisir une matiere</option>
          <?php while($mat = mysqli_fetch_assoc($rs2)){?>
          <option value="<?php echo $mat['NomMatiere']?>"><?php echo $mat['NomMatiere']?></option>
          <?php }?>
        </select>
        <label>Salle</label>
        <select class="browser-default" name="salle" required>
          <option value=""  selected>Choisir une salle</option>
          <?php while($sal = mysqli_fetch_assoc($rs3)){?>
          <option value="<?php echo $sal['CodeSalle']?>"><?php echo $sal['CodeSalle']?></option>
          <?php }?>
        </select>
        <label>Classe</label>
        <select class="browser-default" name="classe" required>
          <option value=""  selected>Choisir une classe</option>
          <?php while($cls = mysqli_fetch_assoc($rs4)){?>
          <option value="<?php echo $cls['CodeClasse']?>"><?php echo $cls['CodeClasse']?></option>
          <?php }?>
        </select>
        <br>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter
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


 