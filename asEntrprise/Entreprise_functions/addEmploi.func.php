<?php
//create a functionn to insert emploi to base de donnée
function insertEmploi($Intut,$comp,$adr,$secteur,$t_contrat,$Descreiption)
{
	global $db;
	$ent=$_SESSION['name'];
	$sql = "INSERT INTO job(ent,Intut,comp,adr,secteur,t_contrat,Descreiption, date_cre) VALUES (:ent,:Intut,:comp,:adr,:secteur,:t_contrat,:Descreiption, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array(
			"ent"=>$ent,
			"Intut"=>$Intut,
			"comp"=>$comp,
			"adr"=>$adr,
			"secteur"=>$secteur,
			"t_contrat"=>$t_contrat,
			"Descreiption"=>$Descreiption));
	$query->closeCursor();
}
?>