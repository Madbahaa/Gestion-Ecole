<?php 
  require_once("connexion.php");
  $req1 = "select * from creaneau ";
  $rs1 = mysqli_query($conn,$req1) or die(mysql_error());
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
      <title>Emploi du temps</title>
    </head>

    <body>
          
    <?php require "sidenav.php"?>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
          <h5>L'emploi du temps</h5>
          <table class="bordered">
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
            <?php while($emp = mysqli_fetch_assoc($rs1)) {?>
            <tbody>
              <tr>
                <td><?php echo $emp['Jour'] ?></td>
                <td><?php echo $emp['HeureDebut'] ?></td>
                <td><?php echo $emp['HeureFin'] ?></td>
                <td><?php echo $emp['CodeEnseignant'] ?></td>
                <td><?php echo $emp['CodeMatiere'] ?></td>
                <td><?php echo $emp['CodeSalle'] ?></td>
                <td><?php echo $emp['CodeClasse'] ?></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          </div>
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

  