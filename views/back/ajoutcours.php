<?php
include_once "../../controller/coursc.php" ; 
include_once "../../model/cours.php" ; 

if(isset($_POST['id']) and isset($_POST['titre']) and isset($_POST['matiere']) and isset($_POST['annee']) )
{
	$errors=[] ; 
	if (empty($_POST['id'])) {
		$errors['id']='id  obligatoire' ; 
	}
	if (empty($_POST['titre'])) {
		$errors['titre']='titre obligatoire' ; 
	}
	if (empty($_POST['matiere'])) {
		$errors['matiere']='titre obligatoire' ; 
	}
	if (empty($_POST['annee'])) {
		$errors['annee']='date de naissance obligatoire' ; 
	}




	if (empty($errors)){
		echo "helllo" ;
	$cours= new cours( $_POST['id'],$_POST['titre'],$_POST['matiere'],$_POST['annee']);
	$coursC=new coursC();
	$coursC->ajoutcours($cours);
	
	header('Location:ajout.php');
			}
}
else
{echo"verifier les champs";}
?>
