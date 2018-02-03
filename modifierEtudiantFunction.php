<?php 
    require_once("connexion.php");

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $cne = $_POST['cne'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $verif = "select CodeEtudiant from etudiant where CodeEtudiant = '$cne'";
    $result = mysqli_query($conn, $verif);
    $num_rows = mysqli_num_rows($result);
    $req = "update etudiant set Nom='$nom',Prenom='$prenom',Email='$email',Adresse='$adresse',CodeEtudiant='$cne'";
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
          <i class="material-icons small teal-text">check_circle</i> Modifié avec succés !
          </h3>
          <br><br>
          <table>
            <thead>
              <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Code National</th>
                  <th>Email</th>
                  <th>Adresse</th>
                               
              </tr>
            </thead>

            <tbody>
              <tr>
                <td><?php echo $nom ?></td>
                <td><?php echo $prenom ?></td>
                <td><?php echo $cne ?></td>
                <td><?php echo $email?></td>
                <td><?php echo $adresse?></td>
                
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
   


 