<?php 
  require_once("connexion.php");
  $req = "select CodeClasse from classe";
  $rs= mysqli_query($conn,$req) or die(mysql_error());
  
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
      <title>Ajouter une classe</title>
    </head>

    <body>
          
    <?php require "sidenav.php"?>
    <div class="row">
    <h5 class="teal-text" style="margin-left: 20px;">Ajouter une Classe</h5>
    <form class="col s8" method="post" action="ajoutClasseFunction.php">
      <div class="row">
        <div class="input-field col s12">
          <input id="first_name" name="code" type="text" class="validate" required>
          <label for="first_name">Code classe</label>
        </div>
        
      </div>
      
      
        <br>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter
          <i class="material-icons right">send</i>
        </button>
              
    </form>
    
    <div class="row">
      <div class="col s8">
      
    <br><br>
      <h4>Liste des Classes</h4>
      <table>
        <thead>
          <tr>
              <th>Classe</th>
          </tr>
        </thead>

        <tbody>
        <?php while($classe = mysqli_fetch_assoc($rs)){?>
          <tr>
            <td><?php echo $classe['CodeClasse']?></td>
          </tr>
          <?php }?>
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
      padding-top: 20px;
      padding-left: 400px;
    }
  </style>