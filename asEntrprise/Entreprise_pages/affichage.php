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

	<h1 class="flow-text" style="text-align: center;"><b>Mes Service</b></h1>

	
			<table class="highlight" style="font-size: 0.8em;">
		        <thead>
		          <tr class="blue-text text-darken">
		              <th>Titre</th>
		              <th>Domaine</th>
		              <th>Prix</th>	
		              <th>Date de création</th>
		              <th><b>Supprimer</b></a></th>
		          </tr>
		        </thead>
		        <?php
		foreach (display_Service() as $Service)
	{
		$namme=$_SESSION['name'];
		if($namme==$Service['Ent']){
		?>
		        <tbody>
		          <tr> 
		            <td><?=$Service['name']?></td>
		            <td> <?=$Service['type']?></td>
		            <td> <?=$Service['prix']?></td>
		            <td><?= date('Y-m-d', strtotime($Service['date_a']));?></td>
		            <td><a class="ne"  href="#"  id="plusDinfo" ><i class="material-icons">delete</i></a></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php }
}
		/*if(isset($_POST['adddd']))
		{
			$name_emp = htmlspecialchars($_POST['name_emp']);
			$password_emp = htmlspecialchars($_POST['password_emp']);
			$id_emp= htmlspecialchars($_POST['id_emp']);
			if(!empty($name_emp) && !empty($password_emp))
			{
				update($id_emp, $name_emp, $password_emp);
			}else{?>
				<div class="dashboardErrorAddEmployee">
						<p><?php echo "Fill all the fields";?></p>
					</div><?php
			}
		}
	*/

	?>
       		</table>
	<!--
	<div class="dashboardErrorAddEmployee">
		<p>lk,lknlnln</p>
	</div>

</div>

		<?php
		if(isset($_POST['adddd'])){
			global $db;
			$sql = "DELETE FROM employee WHERE id_emp =  :id";
			$stmt = $db->prepare($sql);
			  
			$stmt->execute(array('id' =>$_POST['id_emp']));
		}
		?>



<div class="updatePostSer">

	<form action="index.php?page=affichage" method="POST">
		<div class="row">
				<div class="col s12 m12">
					<input type="text" name="dd" placeholder="ddd" autocomplete="off">
				</div>
			</div>
		<div class="row">
			<div class="col s12 m12">
				<input type="text" name="ddd" placeholder="ddd" autocomplete="off">
			</div>
		</div>

		<div class="row">
			<div class="col s12 m12">
				<input type="text" name="dd" placeholder="dddd" maxlength="12">
			</div>

		</div>
			<div class="row">
				<div class="col s12 m12">
					<button type="submit" name="adddd" id="reload" class="btn wave-effect wave-light green" onclick="location.reload();">Save</button>
					
				</div>
			</div>
			<div class="row">
				
				<div class="col s12 m6">
				<input type="submit" name="concel" value="Concel" class="btn wave-effect wave-light red"></a>
				</div>
			</div>
		</form>
	</div>
<div class="delateSz">
<p>do you want to delate service ? please set the the idetifier</p>
	<form action="index.php?page=affichage" method="POST">
		<div class="row">
				<div class="col s12 m12">
					<input type="text" name="id" placeholder="identifier" autocomplete="off">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12">
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