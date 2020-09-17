<nav>
    <div class="nav-wrapper black darken-4">
    	<div class="container">
		      <a href="#!" class="brand-logo"><?php 
		      $naom=$_SESSION['name'];
		      print_r($naom);
		      ?></a>
		      <ul class="right hide-on-med-and-down">
		       <li> <a href="index.php?page=pro" class="waves-effect waves-light btn">Profile<i class="material-icons right">edit</i></a></li>
		        <li> <a href="index.php?page=" class="waves-effect waves-light btn">Accueil<i class="material-icons right">home</i></a></li>
		        <li><a href="index.php?page=logout" id="logout" class="waves-effect waves-light btn">Deconnecter<i class="material-icons right">person</i></a></li>
		      </ul>
		</div>
    </div>
  </nav>