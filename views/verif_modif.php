<?php
include "../model/user.php";
include_once '../controller/userC.php';
include_once 'profil.php';


 if ( isset($_POST['mdp2'])) 
{   
        $mdp3=$_POST['mdp2'];
        if ($_POST['mdpv']==$mdp3)
     
        { 
          $user = new user($_POST["id2"],$_POST["first_name"],$_POST["last_name"],$_POST["email"],$_POST["phone"],$_POST["date"],$_POST["class"],$_POST["sexe"],$_POST["password"]);
           $b=$userC->updateUser($user,$_POST["id2"]); 
         
        ?>
        <script type=""> location.replace("../controller/update_user_suc.html");</script>
          <?php 
        //header('Location: profil.php');
   

          }  else  ?>
          <script type=""> location.replace("../controller/faux_pass.html");</script>
            <?php 

 }    else {
     echo "Sorry, there was an error ";
}


?>