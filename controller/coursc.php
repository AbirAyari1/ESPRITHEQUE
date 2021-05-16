<?php
include_once "C:/wamp64/www/ESPRITHEQUE/config3.php" ; 

class coursC
{
	function ajoutcours($cours)
	{
       $sql = "INSERT INTO cours (id,matiere,titre,annee) values (:id,:matiere,:titre,:annee)";//requete sql
        $db= config2::getConnexion();
        try {

            $id=$cours->getId();
        	$matiere=$cours->getmatiere();
            $titre=$cours->gettitre(); 
            $annee=$cours->getannee();
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->bindValue(':matiere', $matiere);
            $req->bindValue(':titre', $titre);
            $req->bindValue(':annee', $annee);
           
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
    function afficher_return()
        {
            $config=new config();
            $instance=$config->getConnexion();

           $response=$instance->query('SELECT * FROM cours');
            return $response;
        }
}
?>