<?php
	include_once "Entreprise_functions/affichService.func.php";
?>
<div class="dashboardMenu">
 
  <a href="index.php?page=addOffer" class="waves-effect waves-light btn">Offre de service<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addJob" class="waves-effect waves-light btn">Offre d'emploi<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=emploiDemande" class="waves-effect waves-light btn">Demandes d'emploi<i class="material-icons right">list</i></a>
  <a href="index.php?page=serviceAffich" class="waves-effect waves-light btn">Services<i class="material-icons right">list</i></a>
  <a href="index.php?page=affichage" class="waves-effect waves-light btn">gerer Mes Services<i class="material-icons right">list</i></a>
  <a href="index.php?page=affichemp" class="waves-effect waves-light btn">gerer les emplois<i class="material-icons right">list</i></a>

</div>
<div class="dashboardCoreA">

	<h1 class="flow-text" style="text-align: center;"><b>Demandeurs d'emploi</b></h1>

	
			<table class="highlight" style="font-size: 0.8em;">
		        <thead>
		          <tr class="blue-text text-darken">
		              <th>User</th>
		              <th>Domaine</th>
		              <th>qualifications</th>	
		              <th>discription</th>
		              <th>discription</th>
		              <th>date</th>
		              <th><a class="ne"  href="#"  id="plusDinfo" ><b>Plus d'infos</b></a></th>
		          </tr>
		        </thead>
		       <?php
		foreach (display_emp() as $emploi)
	{
		
		?>
		        <tbody>
		          <tr>
		            <td><?=$emploi['name']?></td>
		            <td> <?=$emploi['domain']?></td>
		            <td> <?=$emploi['titre']?></td>
		            <td> <?=$emploi['discription']?></td>
		            <td> <?=$emploi['client_comp']?></td>
		            <td><?= date('Y-m-d', strtotime($emploi['date_crt']));?></td>
		            <td><i class="material-icons">info</i></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php
}
	?>