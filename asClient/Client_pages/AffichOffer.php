<?php
	include_once "Client_functions/addAnn.func.php";
?>
<div class="dashboardMenu">

  <a href="index.php?page=CrerEmp" class="waves-effect waves-light btn">demander emploi<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=CrerService" class="waves-effect waves-light btn">demander service<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=affichService" class="waves-effect waves-light btn">Service dispo<i class="material-icons right">list</i></a>
  <a href="index.php?page=AffichOffer" class="waves-effect waves-light btn">Offres d'emploi<i class="material-icons right">list</i></a>
  <a href="index.php?page=afficheMesServ" class="waves-effect waves-light btn">Mes dem Services<i class="material-icons right">list</i></a>

  <a href="index.php?page=affichMesEmp" class="waves-effect waves-light btn">Mes dem d'emploi<i class="material-icons right">list</i></a>

</div>
<div class="dashboardCoreA">

	<h1 class="flow-text" style="text-align: center;"><b>Liste des emplois proposés</b></h1>
			<table class="highlight" style="font-size: 0.7em;">
		        <thead>
		          <tr class="black-text text-darken">
		          	 <th>Entreprise</th>
		              <th>Intitulé</th>
		              <th>Compétences</th>
		              <th>Adresse</th>
		              <th>Secteur</th>
		              <th>Type contrat</th>
		              <th>Date de création</th>
		              <th><b>contact</b></a></th>
		          </tr>
		        </thead>
		        <?php
		foreach (display_job() as $job)
	{
		?>
		        <tbody>
		          <tr> 
		          	<td><?=$job['Ent_name'] ?></td>
		            <td><?=$job['Intut']?></td>
		            <td> <?=$job['comp']?></td>
		            <td> <?=$job['adr']?></td>
		            <td> <?=$job['secteur']?></td>
		            <td> <?=$job['t_contrat']?></td>
		            <td><?=date('Y-m-d', strtotime($job['date_cre']));?></td>
		            <td><a href="#"  id="plusDinfo" ><i class="material-icons">add_box</i></a></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php
	}
		?>
	</table>
</div>