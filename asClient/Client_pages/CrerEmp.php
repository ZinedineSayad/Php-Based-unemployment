<?php
	include_once "Client_functions/addAnn.func.php";
	if(isset($_POST['added']))
	{
	
		$n = htmlspecialchars(trim($_POST['domain']));
		$t = htmlspecialchars(trim($_POST['titre']));
		$Descreiption = htmlspecialchars(trim($_POST['discription']));
		$vv = htmlspecialchars(trim($_POST['client_cv']));
		if(!empty($n)  && !empty($t) && !empty($Descreiption) && !empty($vv))
		{
			insertEmploiData($n, $t, $Descreiption, $vv);
			?>
				<div class="dsucess">
						<p><?php echo "Annonce ajouté avec succès";?></p>
					</div>
			<?php

		}else{
			
				?>

					<div class="dashboardError">
						<p><?php echo "Veuillez remplir toutes les cases";?></p>
					</div>
				<?php
			
		}
	}

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
	
<form action="index.php?page=CrerEmp" method="POST" enctype="multipart/form-data">
	<h1 class="flow-text">Ajouter une demande d'emlpoi'</h1>
		<div class="row">
			<div class="col s12 m6">Domain
				<input type="text" name="domain" placeholder="Titre de service" autocomplete="off">
			</div>
			<div class="col s12 m6">Titre
				<input type="text" name="titre" placeholder="Titre de service" autocomplete="off">
			</div>
		</div>

		<div class="row">
			<div class="col s12 m6">Discription
				<input type="text" name="discription" placeholder="Domaine service" autocomplete="off">
			</div>

		<div class="col s12 m6">Compitance
				<input type="text" name="client_cv" placeholder="Compitance" autocomplete="off">
			</div>
		</div>

		<div class="row">
				<div class="col s12 m6">
					<input type="submit" name="added" value="Enregistrer" class="btn wave-effect wave-light green"> 
					<input type="reset" value="Reset" class=" wave-light grey">
				</div>
			</div>

	</form>
</div>

