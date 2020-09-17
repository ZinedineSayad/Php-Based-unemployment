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
		          	 <th>Identifier</th>
		              
		              <th>Domaine</th>
		              <th>Titre</th>
		              <th><a class="ne"  href="#"  id="plusDinfo" >Suprimer</a></th>
		          </tr>
		        </thead>
		        <?php
		         $ne=$_SESSION['id_client'];
		foreach (display_serCLient() as $MesSr)
	{

		if($ne==$MesSr['client']){ ?>
		        <tbody>
		          <tr> 		        	
		          	<td><?=$MesSr['Id']?></td>
		           	<td><?=$MesSr['domaine']?></td>
		            <td><?=$MesSr['descri']?></td>
		            <td><i class="material-icons">add_box</i></a></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php
	}}

		?>