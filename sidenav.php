<?php 
require_once("connexion.php");
$res1 = mysqli_query($conn,"select * from etudiant");
$etud = mysqli_num_rows($res1);
$res2 = mysqli_query($conn,"select * from enseignant");
$ens =  mysqli_num_rows($res2);

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
  <li><a href="ajoutMatiere.php" class="waves-effect"><i class="material-icons">library_books</i>Ajouter une matiere</a></li>
  <li><a href="ajoutClasse.php" class="waves-effect"><i class="material-icons">add_circle_outline</i>Ajouter une classe</a></li>
  <li><a href="#!" class="waves-effect"><i class="material-icons">insert_invitation</i>Emplois du temps</a></li>
  <li><div class="divider"></div></li>
  <li><a href="afficherEtudiant.php" class="waves-effect"><i class="material-icons">assignment_ind</i>Etudiants<span class="new badge" data-badge-caption=" "><?php echo $etud ?></span></a></li>
  <li><a href="afficherEns.php" class="waves-effect"><i class="material-icons">list</i>Enseignant<span class="new badge" data-badge-caption=" "><?php echo $ens ?></span></a></li>
</ul>