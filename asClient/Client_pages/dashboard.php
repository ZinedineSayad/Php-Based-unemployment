<?php //?>
<div class="dashboardMenu">
 

  <a href="index.php?page=CrerEmp" class="waves-effect waves-light btn">demander emploi<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=CrerService" class="waves-effect waves-light btn">demander service<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=affichService" class="waves-effect waves-light btn">Service disponibles<i class="material-icons right">list</i></a>
  <a href="index.php?page=AffichOffer" class="waves-effect waves-light btn">Offres d'emploi<i class="material-icons right">list</i></a>
  <a href="index.php?page=afficheMesServ" class="waves-effect waves-light btn">Mes dem Services<i class="material-icons right">list</i></a>

  <a href="index.php?page=affichMesEmp" class="waves-effect waves-light btn">Mes demandes d'emploi<i class="material-icons right">list</i></a>



</div>
<div class="dashboardCoreA">
  
  <p>Welcom <?php 
          $nan=$_SESSION['nom'];
  			print_r($nan);


   ?>
</p>