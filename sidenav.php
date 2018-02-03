<?php 
require_once("connexion.php");
$res1 = mysqli_query($conn,"select * from etudiant");
$etud = mysqli_num_rows($res1);
$res2 = mysqli_query($conn,"select * from enseignant");
$ens =  mysqli_num_rows($res2);
$res3 = mysqli_query($conn,"select * from classe");
$cls =  mysqli_num_rows($res3);
$res4 = mysqli_query($conn,"select * from matiere");
$mtr =  mysqli_num_rows($res4);
$res5 = mysqli_query($conn,"select * from salle");
$sal =  mysqli_num_rows($res5);

?>
<ul id="slide-out" class="side-nav fixed">
  <li><div class="user-view">
    <div class="background" style="background-size:cover">
      <img src="images/office.gif">
    </div>
    <a href="dashboard.php"><img class="circle" src="images/person.png"></a>
    <span class="white-text name">Mouad Baha-eddine</span>
    <span class="white-text email">madbahaa@gmail.com</span>
  </div></li>
  <li><a href="ajoutEtudiant.php" class="waves-effect"><i class="material-icons">group_add</i>Ajouter un étudiant</a></li>
  <li><a href="ajoutEns.php" class="waves-effect"><i class="material-icons">person_add</i>Ajouter un enseignant</a></li>
  <li><a href="ajoutMatiere.php" class="waves-effect"><i class="material-icons">library_books</i>Ajouter matiere<span class="new badge" data-badge-caption=" "><?php echo $mtr ?></span></a></li>
  <li><a href="ajoutClasse.php" class="waves-effect"><i class="material-icons">add_circle_outline</i>Ajouter une classe<span class="new badge" data-badge-caption=" "><?php echo $cls ?></span></a></li>
  <li><a href="ajoutSalle.php" class="waves-effect"><i class="material-icons">home</i>Ajouter une salle<span class="new badge" data-badge-caption=" "><?php echo $sal ?></span></a></li>
  <li><a href="#!" class="waves-effect"><i class="material-icons">playlist_add</i>Ajouter une emploi</a></li>  
  <li><div class="divider"></div></li>
  <li><a href="afficherEtudiant.php" class="waves-effect"><i class="material-icons">assignment_ind</i>Etudiants<span class="new badge" data-badge-caption=" "><?php echo $etud ?></span></a></li>
  <li><a href="afficherEns.php" class="waves-effect"><i class="material-icons">list</i>Enseignant<span class="new badge" data-badge-caption=" "><?php echo $ens ?></span></a></li>
  <li><a href="#!" class="waves-effect"><i class="material-icons">insert_invitation</i>Emplois du temps</a></li>
</ul>