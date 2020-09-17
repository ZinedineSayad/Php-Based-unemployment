<?php
//create a functionn to insert data into the database
function insertRegisterData($n, $t, $Descreiption, $prix)
{
	global $db;
	
		$ent=$_SESSION['nom'];
	$sql = "INSERT INTO services(name,type, descr, prix, date_a) VALUES (:name,:type,:dessc, :rix, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array(
		"name" => $n,
		"type" =>$t,
		"dessc" =>$Descreiption,
		"rix" =>$prix
		));//
	$query->closeCursor();
	$s = "INSERT INTO services_added_by(Ent,id_service) VALUES (:ent, LAST_INSERT_ID())";

	$qu = $db->prepare($s);
	$qu->execute(array("ent" => $ent));
	$qu->closeCursor();
}


function insertDatService($n, $t, $Descreiption)
{
	global $db;
	
		$et=$_SESSION['id_client'];
	$sql = "INSERT INTO client_services(titre,domaine,descri,client) VALUES (:name,:type,:dessc, :id)";

	$query = $db->prepare($sql);
	$query->execute(array(
		"name" => $n,
		"type" =>$t,
		"dessc" =>$Descreiption,
		"id" =>$et
		));//
	$query->closeCursor();
}

function insertEmploiData($n, $t, $Descreiption, $vv)
{
	global $db;
	
		$user=$_SESSION['id_client'];
	$sql = "INSERT INTO client_emp(id_client,domain, titre, discription, client_comp, date_crt) VALUES (:id,:name,:type,:dessc,:omp, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array(
		"id" => $user,
		"name" => $n,
		"type" =>$t,
		"dessc" =>$Descreiption,
		"omp" =>$vv
		));//
	$query->closeCursor();
	
}
//desplay all services
function display_Service()
	{
		global $db;

		$req = $db->query("  SELECT b.Ent, b.user, b.id_service, a.name, a.type,a.descr,a.prix, a.date_a FROM services_added_by AS b, services AS a where a.id_service=b.id_service ORDER BY a.date_a");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}
//job
function display_job()
	{
		global $db;

		$req = $db->query("  SELECT b.Ent_name, a.Intut, a.comp, a.adr, a.secteur, a.t_contrat, a.descreiption, a.date_cre FROM job AS a, entreprise_users AS b where a.ent=b.Ent_name ORDER BY a.date_cre");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}
	
function display_emp()
	{
		global $db;

		$req = $db->query("  SELECT id_emploi, id_client,domain,titre,date_crt FROM client_emp");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}
	function display_serCLient()
	{
		global $db;

		$req = $db->query("  SELECT Id,titre,domaine,descri,client FROM client_services");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}



?>