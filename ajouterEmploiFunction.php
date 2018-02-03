<?php 
    require_once("connexion.php");

    $jour = $_POST['jour'];
    $heuredebut = $_POST['heuredebut'];
    $heurefin = $_POST['heurefin'];
    $classe = $_POST['classe'];
    $enseignant = $_POST['enseignant'];
    $salle = $_POST['salle'];
    $matiere = $_POST['matiere'];
    $req = "insert into creaneau(CodeClasse,CodeSalle,CodeMatiere,CodeEnseignant,HeureDebut,HeureFin,Jour) values('$classe','$salle','$matiere','$enseignant','$heuredebut','$heurefin','$jour')";
    mysqli_query($conn,$req) or die(mysql_error());
  
    
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
      <title>Ajouter un etudiant</title>
    </head>

    <body>
          
    <?php require "sidenav.php"?>
   
    <div class="container">
      <div  class="row">
        <div class="col s12 m12">
       
          <h3 class="center teal-text">
          <i class="material-icons small teal-text">check_circle</i> Ajoutée avec succés !
          </h3>
          <br><br>
          <table>
            <thead>
              <tr>
                  <th>Jour</th>
                  <th>Heure debut</th>
                  <th>Heure fin</th>
                  <th>Enseignant</th>
                  <th>Matiere</th>
                  <th>Salle</th>
                  <th>Classe</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td><?php echo $jour ?></td>
                <td><?php echo $heuredebut ?></td>
                <td><?php echo $heurefin ?></td>
                <td><?php echo $enseignant?></td>
                <td><?php echo $matiere?></td>
                <td><?php echo $salle?></td>
                <td><?php echo $classe?></td>
              </tr>
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
    
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
  </html>

  <style>
    body {
      background: url("images/bacon.png") no-repeat ;
      background-position-x: 35%;
      background-position-Y: -75%;
      padding-top: 20px;
      padding-left: 320px;
    }
  </style>
   


 