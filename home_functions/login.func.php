<?php
//login as entreprise
function loginEntreprise($email, $password)
    {
       // ob_start(); 
    global $db;
    $rss[]='';
    $sql= "SELECT Ent_name,Ent_email, Password FROM entreprise_users where Ent_email=:email and Password=:password";
        $query = $db->prepare($sql);
        $query->execute(array('email' =>$email, 'password'=>$password));
        $row = $query->fetch();
       $rss=$row;
        
     //$_SESSION["name"] = $found_admin["username"];
        //$cookie_name = "user";
        //$cookie_value = $rss[0];
        if($row) {
            session_start();
            $_SESSION['name']=$rss[0];
            $_SESSION['logged'] = true;
            $_SESSION['Ent_email'] = $email;
            if(!headers_sent() && isset($_SESSION['name'])){
                
           // header("location: asEntrprise/index.php?");          
            header("location: asEntrprise/index.php?"); 
            
        }exit;}
        else {
            ?>
        <div class="loginError">
        <div class="card red">
            <div class="card-content white-text">
                <p>Email ou mot de passe incorrect</p>
            </div>
        </div>
        </div>
        <?php

    
}
}
//login as free
function loginUser($email, $password)
{
       // ob_end_flush();
        global $db;
        
         $rs[]='';
    $query = $db->prepare("SELECT Free_id, Free_name, Free_email, Free_password FROM Freelance_Users  where Free_email=:email and Free_password=:password");
        $query->execute(array('email' =>$email,'password'=>$password ));
        $row = $query->fetch();
       $rs=$row;
if($row) {
    session_start();
            $_SESSION['Free_id']=$rs[0];
            $_SESSION['nam']=$rs[1];

            $_SESSION['logged'] = true;
            $_SESSION['Free_email'] = $email;
            if(!headers_sent() && isset($_SESSION['Free_id']))
            header("location: asFreelance/index.php?");
    exit;
}
else { ?>
        <div class="loginError">
        <div class="card black">
            <div class="card-content white-text">
                <p>Email ou mot de passe incorrect</p>
            </div>
        </div>
        </div>
        <?php
    

}}

//login as client
function loginClient($eemail, $pasrd)
{
       // ob_end_flush();
        global $db;
               
         $prs[]='';
    $query = $db->prepare("SELECT id_client, p_name, email, pass FROM client_user  where email=:mail and pass=:password");
        $query->execute(array('mail' =>$eemail,
                                'password'=>$pasrd
                            ));
        $row = $query->fetch();
       $prs=$row;
if($row) {
    session_start();
            $_SESSION['id_client']=$prs[0];
            $_SESSION['nom']=$prs[1];
            $_SESSION['logged'] = true;
            $_SESSION['C_email'] = $eemail;
            if(!headers_sent() && isset($_SESSION['id_client']))
            header("location: asClient/index.php?");
    exit;
}
else { ?>
        <div class="loginError">
        <div class="card black">
            <div class="card-content white-text">
                <p>Email ou mot de passe incorrect</p>
            </div>
        </div>
        </div>
        <?php  

}
}
//creat entreprise
function CreatEnt($Name, $Email, $Country, $phone, $adress, $pword)
 {
global $db;
    $sql= "INSERT INTO entreprise_users (Ent_name, Ent_email, Ent_Contact, Ent_pays, Ent_Adresse, Password,  date_De_creation) 
    VALUES (:E_name, :E_email,:E_contact, :E_pays, :E_adress, :E_pwd, CURRENT_TIMESTAMP)";
        $query = $db->prepare($sql);
        $query->execute(array(
            "E_name" => $Name,
             "E_email"=> $Email,
             "E_contact" => $phone,
             "E_pays" => $Country,
             "E_adress" => $adress,
             "E_pwd" => $pword
            ));
        $query->closeCursor();
    }
//Create free
function CreatFree($Name, $last,$sex, $birth, $Country, $phone, $adress, $Email, $pword)
 {
global $db;
    $sql= "INSERT INTO Freelance_users (Free_name,Free_LastN, Free_BirthDate, Free_sex, Free_email,Free_pays, Free_adress,Free_contact, Free_password,  date_De_creation) 
    VALUES (:F_name,:F_last,:F_birth,:F_sex,:F_email,:F_pays, :F_adress,:F_phone, :F_pwd, CURRENT_TIMESTAMP)";
        $query = $db->prepare($sql);
        $query->execute(array(
            "F_name" => $Name,
            "F_last"=>$last,
            "F_birth"=>$birth,
            "F_sex"=>$sex,
             "F_email"=> $Email,
             "F_pays" => $Country,
             "F_adress" => $adress,
             "F_phone" => $phone,
             "F_pwd" => $pword
            ));
        $query->closeCursor();
    }
//creat Client    
    function creatClient($Nome,$pnom, $mmail, $pword)
 {
global $db;
    $sql= "INSERT INTO client_user (name, p_name, email, pass , date_cr) 
    VALUES (:c_name, :c_pname,:c_email, :c_pwd, CURRENT_TIMESTAMP)";
        $query = $db->prepare($sql);
        $query->execute(array(
            "c_name" => $Nome,
             "c_pname"=> $pnom,
             "c_email" => $mmail,
             "c_pwd" => $pword
            ));
        $query->closeCursor();
    }
?>