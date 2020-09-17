<?php
//desplay all product
function display_Service()
	{
		global $db;

		$req = $db->query("  SELECT b.Ent,b.user, b.id_service, a.name, a.type,a.descr,a.prix, a.date_a FROM services_added_by AS b, services AS a where a.id_service=b.id_service ORDER BY a.date_a");
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

		$req = $db->query("  SELECT b.Ent_name, a.id_job ,a.Intut,a.t_contrat, a.date_cre FROM job AS a, entreprise_users AS b where a.ent=b.Ent_name ORDER BY a.date_cre");
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
		$req = $db->query("  SELECT b.name,a.id_client,a.domain,a.titre,a.discription,a.client_comp,a.date_crt FROM client_emp as a, client_user as b where a.id_client=b.id_client");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}
	?>

