<?php
	include_once "Free_functions/addAnn.func.php";
?>
<div class="dashboardMenu">
 
  <a href="index.php?page=addOffer" class="waves-effect waves-light btn">Offre de service<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=serviceAffich" class="waves-effect waves-light btn">Services<i class="material-icons right">list</i></a>
  <a href="index.php?page=affichage" class="waves-effect waves-light btn">gerer Mes Services<i class="material-icons right">list</i></a>

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
		              <th><a class="ne"  href="#"  id="plusDinfo" ><b>plus D'info</b></a></th>
		          </tr>
		        </thead>
		        <?php
		foreach (display_Service() as $Service)
	{
		$namme=$_SESSION['Free_id'];
		if($namme!=$Service['user']){
		?>
		        <tbody>
		          <tr>  <?php if($Service['Ent']!=NULL){?>
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
		            <td class="a1"> <?=$Service['prix']?></td>
		            <td><?=$Service['descr']?></td>
		            <td><?= date('Y-m-d', strtotime($Service['date_a']));?></td>
		            <td><i class="material-icons">add_box</i></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php
	}
}
if(isset($_POST['cont'])){
			global $db;
			$ident=htmlspecialchars(trim($_POST['fff']));
			if(!empty($ident)){
				
			$bbb= $db->query("SELECT Ent FROM services_added_by WHERE Ent='$ident'");
			$fn=$bbb->fetch();
			$bbbb= $db->query("SELECT b.user FROM services_added_by AS b, freelance_users AS a WHERE b.user=a.Free_id AND a.Free_name='$ident'");
			$fnn=$bbbb->fetch();
			$namee=$fn['Ent'];
			$user=$fnn[0];
					
			if($fn){
					$stmt = $db->query("SELECT Ent_email FROM entreprise_users WHERE Ent_name='$namee'");
				$reqt =$stmt->fetch();
				
				
				if($reqt){
						$w=$reqt[0];	
					?>
				<div class="dsucess">
						<p><?php echo $w;?></p>
					</div>
			<?php }
			 }elseif ($fnn) {
			 	$stmt2 = $db->query("SELECT Free_email FROM freelance_users  WHERE Free_id='$user'");
				$reqt2 =$stmt2->fetch();
			 
			if($reqt2) {
				$q=$reqt2[0];
				?>
				<div class="dsucess">
						<p><?php echo $q;?></p>
					</div>
			<?php }
				
				}
					else{
				?>
						<div class="dashboardError">
							<p><?php echo "try a valid Freename";?></p>
						</div>
				<?php
			}
			}else {
			?><div class="dashboardError">
							<p><?php echo "please rmplir le champ";?></p>
						</div>
		<?php }
		}

		?>
<div class="loginAsClientForm  plusDinfoForm">
<p>Contact</p>

	<form action="index.php?page=serviceAffich" method="POST">

		<div class="row">
				<input type="text" name="fff" placeholder="nome de letreprise ou Freelance" autocomplete="off">
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