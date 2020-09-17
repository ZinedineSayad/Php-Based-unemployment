<?php
	include_once "Entreprise_functions/addEmploi.func.php";
	if(isset($_POST['addEmp']))
	{
		$Intut=htmlspecialchars(trim($_POST['intit']));
		$comp=htmlspecialchars(trim($_POST['comp']));
		$adr=htmlspecialchars(trim($_POST['adr']));
		$secteur=htmlspecialchars(trim($_POST['secteur']));
		$t_contrat=htmlspecialchars(trim($_POST['t_contrat']));
		$Descreiption=htmlspecialchars(trim($_POST['Descreiption']));

		if(!empty($Intut)  && !empty($comp)  && !empty($adr)  && !empty($secteur)  && !empty($Descreiption))
		{
			insertEmploi($Intut,$comp,$adr,$secteur,$t_contrat,$Descreiption);
			?>
				<div class="dsucess">
						<p><?php echo "L'annonce est ajouté avec succès";?></p>
					</div>
			<?php

		}else{
			
				?>

					<div class="dashboardError">
						<p><?php echo "veuillez remplir toutes les cases";?></p>
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
<div class="dashboardCoreA" >
		<h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>Ajouter une offre d'emploi</h1>
<div class="row">
	<form class="col s12" action="index.php?page=addJob" method="POST">
      <div class="rows">
        
        <div class="a a1 input-field">
          <input id="nlot" name="intit" type="text" class="validate" autocomplete="off">
          <label class="active" for="nlot">Intitulé du poste</label>
        </div>
        <div class="a a1 input-field">
          <input id="pname" name="comp" type="text" class="validate" autocomplete="off">
          <label class="active" for="pname">Compétences recquises</label>
        </div>
      </div>
      <div class="rows">
        <div class="input-field">
          <input class="datepicker"  id="adr" name="adr" type="text" class="validate" autocomplete="off">
          <label class="active" for="edate">Adresse</label>
        </div>
      </div>
      <div class="rows">
      	<div class="a input-field">
          <input id="ppa" name="secteur" type="text" class="validate" autocomplete="off">
          <label class="active" for="ppa">Secteur d'activité</label>
        </div>
		<div class="a a1 input-field">
          <input id="qtt" name="t_contrat" type="text" class="validate" autocomplete="off">
          <label class="active" for="qtt">Type de contrat</label>
        </div>
        
      <div class="rows">
        
        <div class="a input-field">
          <input id="dosage" name="Descreiption" type="text" class="validate" autocomplete="off">
          <label class="active" for="dosage">Description</label>
        </div>
      </div>
      <div class="rows">
        <button class="btn waves-effect waves-light green" type="submit" name="addEmp">Enregistrer
    	<i class="material-icons right">send</i></button>
      <input type="reset" value="Reset" class=" wave-light grey">
      </div>
  </div>
    </form>

  </div>
	<!--
	<div class="dashboardErrorAddser">
		<p>lk,lknlnln</p>
	</div>
	-->
</div>