<?php
include_once "home_functions/connect_db.php";
$pages = scandir('home_pages/');
if(isset($_GET['page']) AND !empty($_GET['page'])){
	if(in_array($_GET['page'].'.php', $pages)){
		$page = $_GET['page'];
	}else{
		$page = "error";
	}
}else{
	$page = "login";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="refresh" content="">
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	<link rel="stylesheet" href="css/mterialize.css">
	<link rel="stylesheet" href="css/w3.css">
	<script>
   function load_js()
   {
      var head= document.getElementsByTagName('head')[0];
      var script= document.createElement('script');
      script.src= 'myjs.js';
      head.appendChild(script);
   }
   load_js();
</script>
	</head>
<body background="images/img.png">
<!-- include the the navigation bar -->
	
	<?php
		include_once "home_body/home_bodyNav.php";
	?>
	
<!-- apply a container for all the page -->
	<div class="container">
	<?php 	
		require_once 'home_pages/'.$page.'.php';
	?>
	</div>

<script
  src="js/j.js"></script>

<script src="js/myjs.js"></script>


</body>
</html>