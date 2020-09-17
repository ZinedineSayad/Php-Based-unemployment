<?php
	include_once "Entreprise_functions/addAnn.func.php";
	if(isset($_POST['added']))
	{
		
		$n = htmlspecialchars(trim($_POST['name']));
		$t = htmlspecialchars(trim($_POST['type']));
		$Descreiption = htmlspecialchars(trim($_POST['bb']));
		$p= htmlspecialchars(trim($_POST['prix']));
		if(!empty($n)  && !empty($t) && !empty($Descreiption))
		{
			insertRegisterData($n, $t, $Descreiption, $p);
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
 
  <a href="index.php?page=addOffer" class="waves-effect waves-light btn">Offre de service<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addJob" class="waves-effect waves-light btn">Offre d'emploi<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=emploiDemande" class="waves-effect waves-light btn">Demandes d'emploi<i class="material-icons right">list</i></a>
  <a href="index.php?page=serviceAffich" class="waves-effect waves-light btn">Services<i class="material-icons right">list</i></a>
  <a href="index.php?page=affichage" class="waves-effect waves-light btn">gerer Mes Services<i class="material-icons right">list</i></a>
  <a href="index.php?page=affichemp" class="waves-effect waves-light btn">gerer les emplois<i class="material-icons right">list</i></a>

</div>
<div class="dashboardCoreA">

	
	<form action="index.php?page=addOffer" method="POST">
	<h1 class="flow-text">Ajouter une offre de service</h1>
		<div class="row">
			<div class="col s12 m12">Titre
				<input type="text" name="name" placeholder="Titre de service" autocomplete="off">
			</div>
		</div>

		<div class="row">
			<div class="col s12 m6">Domaine
				<input type="text" name="type" placeholder="Domaine service" autocomplete="off">
			</div>

	<div class="col s12 m6">Prix
				<input type="number" name="prix" placeholder="Prix de service" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12">Description
				<input type="text" id="usrform" name="bb" placeholder="Descreiption" autocomplete="off">
			</div>


		</div>
		
			<div class="row">
				<div class="col s12 m6">
					<input type="submit" name="added" value="Enregistrer" class="btn wave-effect wave-light green"> 
					<input type="reset" value="Reset" class=" wave-light grey">
				</div>
			</div>

	</form>
	<!--
	<div class="dashboardErrorAddOffer">
		<p>lk,lknlnln</p>
	</div>
	-->
</div>