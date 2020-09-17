<?php
//create a functionn to insert data into the database
function insertRegisterData($n, $t, $Descreiption, $prix)
{
	global $db;
	
		$ent=$_SESSION['name'];
	$sql = "INSERT INTO services(name,type, descr, prix, date_a) VALUES (:name,:type,:dessc, :rix, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array(
		"name" => $n,
		"type" =>$t,
		"dessc" =>$Descreiption,
		"rix" =>$prix
		));
	$query->closeCursor();
	$s = "INSERT INTO services_added_by(Ent,id_service) VALUES (:ent, LAST_INSERT_ID())";

	$qu = $db->prepare($s);
	$qu->execute(array("ent" => $ent));
	$qu->closeCursor();
}
?>