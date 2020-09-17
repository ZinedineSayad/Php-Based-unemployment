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

	<h1 class="flow-text" style="text-align: center;"><b>Liste des services disponibles</b></h1>

	
			<table class="highlight" style="font-size: 0.8em;">
		        <thead>
		          <tr class="blue-text text-darken">
		          	 <th>Propriétaire</th>
		              <th>Titre</th>
		              <th>Domaine</th>
		              <th>Prix</th>	
		              <th>Description</th>
		              <th>Date de création</th>
		              <th><a class="ne"  href="#"  id="plusDinf" ><b>plus D'info</b></a></th>
		          </tr>
		        </thead>
		        <?php
		foreach (display_Service() as $Service)
	{
		$namme=$_SESSION['name'];
		if($namme!=$Service['Ent']){
		?>
		        <tbody>
		          <tr> <?php if($Service['Ent']!=NULL){?>
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
		            <td> <?=$Service['prix']?></td>
		            <td><?=$Service['descr']?></td>
		            <td><?= date('Y-m-d', strtotime($Service['date_a']));?></td>
		            <td><i class="material-icons">add_box</i></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php
	}
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
<div class="loginAsformCLienr plusDinfohh">
	<form action="index.php?page=serviceAffich" method="POST">
			<p>Contact</p>
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
		</form>
</div>