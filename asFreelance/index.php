<?php
session_start();
if(isset($_SESSION['nam'])){
include_once "../home_functions/connect_db.php";
$pagess = scandir('Free_pages/');
if(isset($_GET['page']) AND !empty($_GET['page'])){
	if(in_array($_GET['page'].'.php', $pagess)){
		$page = $_GET['page'];
	}else{
		$page = "FreeError";
	}
}else{
	$page = "dashboard";
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="../css/mycss.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" href="../css/mterialize.css">
	
</head>
	
<body>

<!-- include the the navigation bar -->
	
	<?php
		include_once "Free_body/FreeNavigation.php";
	?>
	
<!-- apply a container for all the page -->
	<div class="container">
	<?php 	
		include_once 'Free_pages/'.$page.'.php';
	?>
	</div>

<script
  src="../js/j.js"></script>
<script src="../js/myjs.js"></script>


<?php  }?>
</body>
</html>