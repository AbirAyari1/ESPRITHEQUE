<?php
include_once "C:/xampp/htdocs/ESPRITHEQUE/config3.php" ; 

class quizC
{
	function ajoutquiz($quiz)
	{
       $sql = "INSERT INTO quiz (id,que,option1,option2,option3,option4,ans,userans) values (:id,:que,:option1,:option2,:option3,:option4,:ans,:userans)";//requete sql
        $db= config2::getConnexion();
        try {
            $id=$quiz->getid();
            $que=$quiz->getque();
        	$option1=$quiz->getoption1();
            $option2=$quiz->getoption2(); 
            $option3=$quiz->getoption3();
            $option4=$quiz->getoption4();
            $ans=$quiz->getans();
            $userans=$quiz->getuserans();
            $req = $db->prepare($sql);
            $req->bindValue(':que', $que);
            $req->bindValue(':option1', $option1);
            $req->bindValue(':option2', $option2);
            $req->bindValue(':option3', $option3);
            $req->bindValue(':option4', $option4);
           $req->bindValue(':ans', $ans);
           $req->bindValue(':userans', $userans);
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
    function afficher_return()
        {
            $config=new config();
            $instance=$config->getConnexion();

           $response=$instance->query('SELECT * FROM quiz');
            return $response;
        }
}
?>