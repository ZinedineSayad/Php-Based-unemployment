<?php
	include_once "Free_functions/addAnn.func.php";
?>
<div class="dashboardMenu">
 
  <a href="index.php?page=addOffer" class="waves-effect waves-light btn">Offre de service<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=serviceAffich" class="waves-effect waves-light btn">Services<i class="material-icons right">list</i></a>
  <a href="index.php?page=affichage" class="waves-effect waves-light btn">gerer Mes Services<i class="material-icons right">list</i></a>

</div>
<div class="dashboardCoreA">

	<h1 class="flow-text" style="text-align: center;"><b>Mes Service</b></h1>

	
			<table class="highlight" style="font-size: 0.8em;">
		        <thead>
		          <tr class="blue-text text-darken">
		          	<th>Nmiro</th>
		              <th>Titre</th>
		              <th>Domaine</th>
		              <th>Prix</th>	
		              <th>Date de création</th>
		              <th><a href="#"  id="plusInfo" ><b>Supprimer</b></a></th>
		          </tr>
		        </thead>
		        <?php
		        $namme=$_SESSION['Free_id'];
		foreach (display_Service() as $Service)
	{
		
		if($namme==$Service['user']){
		?>
		        <tbody>
		          <tr> 
		          	<td><?=$Service['id_service']?></td>
		            <td><?=$Service['name']?></td>
		            <td> <?=$Service['type']?></td>
		            <td> <?=$Service['prix']?></td>
		            <td><?= date('Y-m-d', strtotime($Service['date_a']));?></td>
		            <td><a class="ne"  href="#"  id="plusInfo" ><i class="material-icons">delete</i></a></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php }
}
		
		if(isset($_POST['delateSer'])){
			if(!empty($_POST['id'])){
			global $db;
			$identi=htmlentities(trim($_POST['id']));
			$aaa= $db->query(" SELECT * FROM services_added_by  where user=$namme and id_service=$identi");
			$on=$aaa->fetch();
			if($on){
						$stmt = $db->prepare("DELETE FROM services WHERE  id_service=:id");
						$requst =$stmt->execute(array('id' =>$identi));
						$stmt->closeCursor();
					?>
				<div class="dsucess">
						<p><?php echo "succès";?></p>
					</div>
			<?php

				}else{
				?>
						<div class="dashboardError">
							<p><?php echo "try a valid id";?></p>
						</div>
				<?php
			}
			
		}
		else {
			?><div class="dashboardError">
							<p><?php echo "please rmplir le champ";?></p>
						</div>
		<?php }}
		?>



<div class="loginAsClientForm delateSerForm">
<p>do you want to delate service ? please set the the idetifier</p>
	<form action="index.php?page=affichage" method="POST">
		<div class="row">
				<div class="col s12 m12">
					<input type="number" name="id" placeholder="identifier" autocomplete="off">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12"  http-equiv="refresh" >
					<input type="submit" name="delateSer" value="Remove" class="btn wave-effect wave-light red">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12">
					<input type="submit" name="concelSer" value="concel" class="btn wave-effect wave-light red">
				</div>
			</div>

	</form>
</div>