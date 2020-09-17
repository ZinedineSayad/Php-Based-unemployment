<?php
	include_once "Entreprise_functions/affichService.func.php";
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

	<h1 class="flow-text" style="text-align: center;"><b>mes job</b></h1>

	
			<table class="highlight" style="font-size: 0.8em;">
		        <thead>
		          <tr class="blue-text text-darken">
		              <th>id</th>
		              <th>Titre</th>
		              <th>conntrat</th>
		              <th>Date de création</th>
		              <th><a class="ne"  href="#"  id="plusDinfo" ><b>Supprimer</b></a></th>
		              
		          </tr>
		        </thead>
		        <?php
		foreach (display_job() as $job)
	{
		$namme=$_SESSION['name'];
		if($namme==$job['Ent_name']){
		?>
		        <tbody>
		          <tr> 	
		          	<td> <?=$job['id_job']?></td>
		            <td> <?=$job['Intut']?></td>
		            <td><?=$job['t_contrat']?></td>
		            <td><?= date('Y-m-d', strtotime($job['date_cre']));?></td>
		            <td><i class="material-icons">delete</i></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php }
}

	?>
       		</table>
	<?php 
	if(isset($_POST['cont'])){
			global $db;
			$ident=htmlentities(trim($_POST['fff']));
			if(!empty($ident)){
			$bbb= $db->query("SELECT Ent FROM services_added_by WHERE Ent=$ident");
			$fn=$bbb->fetch();

			$w[]='';				
			if($fn){
					$stmt = $db->query("DELETE Ent_email FROM entreprise_users WHERE Ent_name=$ident");
						$reqt =$stmt->fetchAll();
						$w=$reqt;
					?>
				<div id="contactForm">
						<p><?php echo $w[0];?></p>
					</div>
			<?php $stmt->closeCursor();

				}else{
				?>
						<div class="dashboardError">
							<p><?php echo "try a valid name";?></p>
						</div>
				<?php
			}}
		}

		?>
<div class="loginAsClientForm  plusDinfoForm">
<p>Contact</p>

	<form action="index.php?page=serviceAffich" method="POST">

		<div class="row">
				<input type="text" name="fff" placeholder="nome de letreprise" autocomplete="off">
			</div>
			<div class="row">
				<div class="col s12 m12">
					<input type="submit" name="cont" value="Contact" class="btn wave-effect wave-light black">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12">
					<input type="submit" value="Concel" class="btn wave-effect wave-light blue">
				</div>
			</div>
</div>
<div class="loginAsClientForm onfoForm">
<p>Contact</p>

	<form action="index.php?page=serviceAffich" method="POST">
			<div class="row">
				dsgfdgdd
			</div>
			<div class="row">
				<div class="col s12 m12">
					<input type="submit" value="done" class="btn wave-effect wave-light blue">
				</div>
			</div>
</div>