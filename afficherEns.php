<?php 
  require_once("connexion.php");
  $req = "select * from enseignant";
  $rs = mysqli_query($conn,$req) or die(mysql_error());
  
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
      <title>Enseignant</title>
    </head>

    <body>
          
    <?php require "sidenav.php"?>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
          <h5>Liste des enseignant</h5>
        <table class="bordered">
            <thead>
              <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>CIN</th>
                  <th>Email</th>
                  <th>Adresse</th>
                               
              </tr>
            </thead>
            <?php while($ens = mysqli_fetch_assoc($rs)) {?>
            <tbody>
              <tr>
                <td><?php echo $ens['Nom'] ?></td>
                <td><?php echo $ens['Prenom'] ?></td>
                <td><?php echo $ens['CIN'] ?></td>
                <td><?php echo $ens['Email'] ?></td>
                <td><?php echo $ens['Adresse'] ?><a href="supprimerEtudiant.php?code=<?php echo $et['CodeEtudiant'] ?>"><span class="new badge red" data-badge-caption="Supprimer"></a></span><a href="#"><span class="new badge orange" data-badge-caption="Editer"></span></a></td>
              </tr>
            </tbody>
            <?php } ?>
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
      padding-top: 20px;
      padding-left: 200px;
    }
  </style>