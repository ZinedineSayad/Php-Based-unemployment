
<?php 
include_once "home_functions/login.func.php";
 if(isset($_POST['send']))
  {
    //header_remove("location: asEntrprise/index.php?");
    $E_mail = htmlspecialchars(trim($_POST['mail']));
    $pword = htmlspecialchars(trim($_POST['pword']));
    
    if(!empty($E_mail) && !empty($pword))
    {
      if (headers_sent() ) {
    header_remove();
}
      loginUser($E_mail, $pword);
    }else{
      ?>

          <div class="dashboardErrorAddEnt">
            <p><?php echo "Veuillez remplir toutes les cases";?></p>
          </div>
        <?php

    }
  }
?>


<!--Employee form-->
<script src="../js/myjs.js"></script>
<div class="loginAsFreeForm">
  <form action="index.php?page=login" method="POST">
  
    <div class="row">
      <div class="col s12 m12">
        <i class="material-icons prefix">account_circle</i><input type="email" name="mail" placeholder="email" autocomplete="off">
      </div>
    </div>

    <div class="row">
      <div class="col s12 m12">
        <input type="password" name="pword" placeholder="Mot de passe" maxlength="20">
      </div>


    </div>
      <div class="row">
        <div class="col s12 m6">
          <input type="submit" name="send" value="Se connecter" class="btn wave-effect wave-light green">
        </div>
      </div>
      <div class="col s12 m6">
          <a id="createFree" class="waves-effect  btn">Créer un compte <i class="material-icons right">account_circle</i></a>
      </div>

  </form>
</div>  
<?php 
	include_once "home_functions/login.func.php";
	if(isset($_POST['submit']))
	{
   // header_remove("location: asFreelance/index.php?");
		$email = htmlspecialchars(trim($_POST['eemail']));
		$password = htmlspecialchars(trim($_POST['ppword']));

		if(!empty($email) && !empty($password))
		{
      if (headers_sent() ) {
    header_remove();
}
			loginEntreprise($email, $password);
		}else{
			?>
          <div class="dashboardErrorAddEnt">
            <p><?php echo "Veuillez remplir toutes les cases";?></p>
          </div>
        <?php
		}
	}
?>


<!-- Admin Form-->
<div class="loginAsEntrepriseForm">
	<form action="index.php?page=login" method="POST">	
		<div class="row">
			<div class="col s12 m12">
			<i class="material-icons prefix">account_circle</i>	<input type="email" name="eemail" placeholder="Email" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12">
				<input type="password" name="ppword" placeholder="Mot de passe" maxlength="20">
			</div>
		</div>
			<div class="row">
				<div class="col s12 m6">
					<input type="submit" id="a" name="submit" value="Se connecter" class="btn wave-effect wave-light green">
				</div>
			</div>
			<div class="col s12 m6">
					<a id="createENt" class="waves-effect  btn">Créer un compte <i class="material-icons right">account_circle</i></a>
			</div>

		</form>
</div>

<?php 
  include_once "home_functions/login.func.php";
  if(isset($_POST['senring']))
  {
    $email = htmlspecialchars(trim($_POST['eemail']));
    $password = htmlspecialchars(trim($_POST['ppword']));

    if(!empty($email) && !empty($password))
    {
        
      if (headers_sent()) {
    header_remove();
          }
      loginClient($email, $password);
    }else{
      ?>
          <div class="dashboardErrorAddEnt">
            <p><?php echo "Veuillez remplir toutes les cases";?></p>
          </div>
        <?php
    }
  }
?>


<!-- client Form-->
<div class="loginAsClientForm">
  <form action="index.php?page=login" method="POST">
  
    <div class="row">
      <div class="col s12 m12">
      <i class="material-icons prefix">account_circle</i> <input type="email" name="eemail" placeholder="Email" autocomplete="off">
      </div>
    </div>

    <div class="row">
      <div class="col s12 m12">
        <input type="password" name="ppword" placeholder="Mot de passe" maxlength="20">
      </div>


    </div>
      <div class="row">
        <div class="col s12 m6">
          <input type="submit" id="a" name="senring" value="Se connecter" class="btn wave-effect wave-light green">
        </div>
      </div>
      <div class="col s12 m6">
          <a id="createClient" class="waves-effect  btn">Créer un compte <i class="material-icons right">account_circle</i></a>
      </div>

    </form>
</div>
<?php
  if(isset($_POST['addEntreprise']))
  {

    $Name=htmlspecialchars(trim($_POST['Ent_name']));
    $E_mail=htmlspecialchars(trim($_POST['email']));
    $Country=htmlspecialchars(trim($_POST['Pays']));
    $phone=htmlspecialchars(trim($_POST['phone']));
    $Password=htmlspecialchars(trim($_POST['Pword']));
    $adress=htmlspecialchars(trim($_POST['adress']));
    
    if(!empty($Name ) && !empty($E_mail) && !empty($Country) && !empty($adress) &&  !empty($Password) )
    {
       global $db;
            $t= $db-> prepare("SELECT Ent_name, Ent_email FROM entreprise_users where Ent_Name=:name");
            $t->execute(array('name' =>$Name));
            $answer= $t->fetch();

          if($answer){?>
            <div class="dashboardErrorAddEnt">
                  <p><?php echo "L'entreprise existe";?></p>
                </div><?php
          }
          else{ 
            CreatEnt($Name, $E_mail, $Country, $phone, $adress, $Password);
            ?>
              <div class="dashboardsuccessAddAddEnt">
                  <p><?php echo "Félicitation vous êtes inscrits";?></p>
                </div>
            <?php
          }
            

    }else{
      
        ?>

          <div class="dashboardErrorAddEnt">
            <p><?php echo "Veuillez remplir toutes les cases";?></p>
          </div>
        <?php
      
    }
  }
?>

<div class="CreateEntForm dashboardCore">
  <form action="index.php?page=login" method="POST">

    <h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>Créer un compte entreprise</h1>
      <div class="rows">
        
        <div class="a a1 input-field">
          <input id="nom" name="Ent_name" type="text" class="validate" autocomplete="off">
          <label class="active" for="nom">Nom d'entreprise</label>
        </div>
        
        <div class="a a1 input-field">
          <input id="pay" name="Pays" type="text" class="validate" autocomplete="off">
          <label class="active" for="pay">Pays</label>
        </div>
    </div>

    <div class="rows">
        <div class="a a1 input-field">
          <input id="cont" name="phone" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{1}" class="validate"  placeholder="012-345-678-9" maxlength="14" autocomplete="off">
          <label class="active" for="cont">Numéro</label>
        </div>
        <div class="a a1 input-field">
          <input id="Email" name="email" type="email" class="validate" autocomplete="off">
          <label class="active" for="Email">Email</label>
        </div>
    </div>   
      <div class="rows">
        <div class="input-field col s12 m6 ">
          <input id="ppa" name="adress" type="text" class="validate" placeholder="Adress of the company" autocomplete="off">
          <label class="active" for="ppa">Adresse</label>
        </div>
    </div>
    <div class="rows">
    	<div class="a input-field">
          <input id="pass" name="Pword" type="password" class="validate" autocomplete="off">
          <label class="active" for="pass">Mot de Passe</label>
        </div>
       </div>
      <div class="row">
				<div class="col s6 m4">
					<input type="submit" id="a" name="addEntreprise" value="Enregistrer" class="btn wave-effect wave-light black">
				</div>
			</div>
    </form>
</div>

<?php 
  if(isset($_POST['addfree']))
  {
    $Fname=htmlspecialchars(trim($_POST['Fname']));
    $Lname=htmlspecialchars(trim($_POST['Lname']));
    $Sexy=$_POST['sex'];
    $DofBirth=htmlspecialchars(trim($_POST['Fdate']));
    $Pay=htmlspecialchars(trim($_POST['coun']));
    $Tel=htmlspecialchars(trim($_POST['tele']));
    $Adress=htmlspecialchars(trim($_POST['adress']));
    $Email=htmlspecialchars(trim($_POST['mail']));
    $Password=htmlspecialchars(trim($_POST['pword']));
    
    if(!empty($Fname) & !empty($Lname) & !empty($Sexy) & !empty($DofBirth) & !empty( $Pay) & !empty($Adress) & !empty($Email) & !empty( $Password))
    {      
       global $db;
            $t= $db-> prepare("SELECT Free_name,Free_LastN,Free_email FROM freelance_users where Free_name= :fname and Free_LastN=:Lname and Free_email=:mail");
            $t->execute(array('fname'=>$Fname,'Lname'=>$Lname, 'mail'=>$Email));
            $answer= $t->fetch();

          if($answer){?>
            <div class="dashboardErrorAddEnt">
                  <p><?php echo "User already exists try to login";?></p>
                </div><?php
          }
        else{ 
            CreatFree($Fname, $Lname, $Sexy, $DofBirth, $Pay, $Tel, $Adress, $Email, $Password);
            ?>
              <div class="dashboardsuccessAddAddEnt">
                  <p><?php echo "Vous êtes inscrits";?></p>
                </div>
            <?php
          }
    }else{
      
        ?>

          <div class="dashboardErrorAddfree">
            <p><?php echo "Veuillez remplir tous les champs";?></p>
          </div>
        <?php
      
    }
  }
?>
<div class="CreateFreeForm dashboardCore">
  <form action="index.php?page=login" method="POST">

    <h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>Créer un compte Freelancer</h1>
      <div class="rows">
        
        <div class="a a1 input-field">
          <input id="nom" name="Fname" type="text" class="validate" autocomplete="off">
          <label class="active" for="nom">Nom</label>
        </div>
        
        <div class="a a1 input-field">
          <input id="lnom" name="Lname" type="text" class="validate" autocomplete="off">
          <label class="active" for="lnom">Prénom</label>
        </div>
    </div>
    <div class="rows">
      <div class="a a1">
      <label class="active" style="font-size: 0.7em;">Sex</label> <br>
      <input type="radio" name="sex" value="Masculin" id="mal" checked /> <label for="mal">Masculin</label>
      <input type="radio" name="sex" value="Feminin" id="female"/> <label for="female">Feminin</label>
      
        </div>
        <div class="a a1 input-field">
          <input id="dat" name="Fdate" type="date" class="validate" autocomplete="off">
          <label class="active" for="dat">Date de naissance</label>
        </div>
    </div>

    <div class="rows"> 
      <div class="a a1 input-field">
          <input id="pay" name="coun" type="text" class="validate" autocomplete="off">
          <label class="active" for="pay">Pays</label>
        </div>
        <div class="a a1 input-field">
          <input id="cont" name="tele" type="tel" pattern="213-[0-9]{3}-[0-9]{3}-[0-9]{1}" class="validate"  placeholder="+213-545-123-678-9" maxlength="14">
          <label class="active" for="cont">Numéro</label>
        </div>
      </div>
      <div class="rows">
        <div class="input-field col s12 m6 ">
          <input id="ppa" name="adress" type="text" class="validate" placeholder="Adress of the company" autocomplete="off"> <label class="active" for="ppa">Adresse </label>
        </div>
    </div>
      <div class="rows">
        <div class="a a1 input-field">
          <input id="Email" name="mail" type="email" class="validate" autocomplete="off">
          <label class="active" for="Email">Email</label>
        </div>

      <div class="a a1 input-field">
          <input id="pass" name="pword" type="password" class="validate" autocomplete="off">
          <label class="active" for="pass">Mot de passe</label>
        </div>
       </div>
      <div class="row">
        <div class="col s6 m4">
          <input type="submit" id="a" name="addfree" value="Enregistrer" class="btn wave-effect wave-light black">
        </div>
      </div>
    </form>
</div>

<?php
  if(isset($_POST['addClient']))
  {

    $nom=htmlspecialchars(trim($_POST['client_name']));
    $pnom=htmlspecialchars(trim($_POST['client_pname']));
    $mmail=htmlspecialchars(trim($_POST['email']));
    $pword=htmlspecialchars(trim($_POST['Pword']));
    
    if(!empty($nom ) && !empty($pnom) && !empty($mmail) &&  !empty($pword) )
    {
          creatClient($nom,$pnom, $mmail, $pword);
            ?>
              <div class="dashboardsuccessAddAddEnt">
                  <p><?php echo "client inscris avec succès";?></p>
                </div>
            <?php
    }else{
      
        ?>

          <div class="dashboardErrorAddEnt">
            <p><?php echo "Veuillez remplir toutes les cases";?></p>
          </div>
        <?php  
    }
  }
?>

<div class="CreateClienttForm dashboardCore">
  <form action="index.php?page=login" method="POST">

    <h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>Créer un compte Client</h1>
      <div class="rows">
        
        <div class="a a1 input-field">
          <input id="nom" name="client_name" type="text" class="validate" autocomplete="off">
          <label class="active" for="nom">Nom</label>
        </div>
        <div class="a a1 input-field">
          <input id="nom" name="client_pname" type="text" class="validate" autocomplete="off">
          <label class="active" for="nom">Prénom</label>
        </div>
      </div>
        <div class="a a1 input-field">
          <input id="Email" name="email" type="email" class="validate" autocomplete="off">
          <label class="active" for="Email">Email</label>
        </div>
        <div class="a a1 input-field">
          <input id="pass" name="Pword" type="password" class="validate" autocomplete="off">
          <label class="active" for="pass">Mot de passe</label>
        </div>   
      <div class="row">
        <div class="col s6 m4">
       <input type="submit" id="a" name="addClient" value="Valider" class="btn wave-effect wave-light black">
        </div>
      </div>
    </form>
</div>