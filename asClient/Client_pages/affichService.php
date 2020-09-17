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

	<h1 class="flow-text" style="text-align: center;"><b>Liste des services disponibles</b></h1>
			<table class="highlight" style="font-size: 0.7em;">
		        <thead>
		          <tr class="blue-text text-darken">
		          	 <th>Propriétaire</th>
		              <th>Titre</th>
		              <th>Domaine</th>
		              <th>Prix</th>	
		              <th>Description</th>
		              <th>Date de création</th>
		              <th><b>Contat</b></a></th>
		          </tr>
		        </thead>
		        <?php
		foreach (display_Service() as $Service)
	{
		?>
		        <tbody>
		          <tr> 
		          	<?php if($Service['Ent']!=NULL){?>
		          	<td><?=$Service['Ent']?></td>
		          	<?php } else {
		          		$v=$Service['user'];
		          		$aaa= $db->query(" SELECT Free_name FROM freelance_users  where Free_id=$v");
						$on=$aaa->fetch();
		          		?>
		          	<td><?=$on['Free_name']?></td>
		          	<?php } ?>
		            <td><?=$Service['name']?></td>
		            <td> <?=$Service['type']?></td>
		            <td class="a1"> <?=$Service['prix']?></td>
		            <td><?=$Service['descr']?></td>
		            <td><?= date('Y-m-d', strtotime($Service['date_a']));?></td>
		            <td><a class="ne"  href="#"  id="plusDinfo" ><i class="material-icons">add_box</i></a></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php
	}

		?>