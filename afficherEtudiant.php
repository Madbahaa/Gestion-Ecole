<?php 
  require_once("connexion.php");
  $req1 = "select * from etudiant where CodeClasse='DSI 2'";
  $rs1 = mysqli_query($conn,$req1) or die(mysql_error());
  $req2 = "select * from etudiant where CodeClasse='DSI 1'";
  $rs2 = mysqli_query($conn,$req2) or die(mysql_error());
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
      <title>Etudiants</title>
    </head>

    <body>
          
    <?php require "sidenav.php"?>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
          <h5>Classe DSI 2</h5>
        <table class="bordered">
            <thead>
              <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Code National</th>
                  <th>Email</th>
                  <th>Adresse</th>
                  <th>Classe</th>              
              </tr>
            </thead>
            <?php while($et = mysqli_fetch_assoc($rs1)) {?>
            <tbody>
              <tr>
                <td><?php echo $et['Nom'] ?></td>
                <td><?php echo $et['Prenom'] ?></td>
                <td><?php echo $et['CodeEtudiant'] ?></td>
                <td><?php echo $et['Email'] ?></td>
                <td><?php echo $et['Adresse'] ?></td>
                <td><?php echo $et['CodeClasse'] ?><a  onclick="display('<?php echo $et['CodeEtudiant'] ?>')" ><span class="new badge red" data-badge-caption="Supprimer"></a></span><a href="modifierEtudiant.php?code=<?php echo $et['CodeEtudiant'] ?>"><span class="new badge orange" data-badge-caption="Editer"></span></a></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m12">
          <h5>Classe DSI 1</h5>
        <table class="bordered">
            <thead>
              <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Code National</th>
                  <th>Email</th>
                  <th>Adresse</th>
                  <th>Classe</th>              
              </tr>
            </thead>
            <?php while($et = mysqli_fetch_assoc($rs2)) {?>
            <tbody>
              <tr>
                <td><?php echo $et['Nom'] ?></td>
                <td><?php echo $et['Prenom'] ?></td>
                <td><?php echo $et['CodeEtudiant'] ?></td>
                <td><?php echo $et['Email'] ?></td>
                <td><?php echo $et['Adresse'] ?></td>
                <td><?php echo $et['CodeClasse'] ?><a  onclick="display('<?php echo $et['CodeEtudiant'] ?>')" ><span class="new badge red" data-badge-caption="Supprimer"></a></span><a href="modifierEtudiant.php?code=<?php echo $et['CodeEtudiant'] ?>"><span class="new badge orange" data-badge-caption="Editer"></span></a></td>
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

  <script>
    function display(e){
    var $toastContent = $('<span>Voulez vous supprimer cet etudiant ?</span>').add($('<a href="supprimerEtudiant.php?code='+e+'"><button class="btn-flat toast-action">OUI</button></a>'));
     Materialize.toast($toastContent);}
     
  </script>