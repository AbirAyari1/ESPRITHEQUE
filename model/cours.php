<?php
class cours
{
    private $id;
	private $matiere;
	private $titre;
	private $annee;
	function __construct($id,$matiere,$titre,$annee)
	{
        $this->id=$id;
		$this->matiere=$matiere;
        $this->titre=$titre;
        $this->annee=$annee;
        
	}
    function getId()
    {
        return $this->id;
    }
	function getmatiere()
    {
        return $this->matiere;
    }
    function gettitre()
    {
        return $this->titre;
    }
    function getannee()
    {
        return $this->annee;
    }
   
    function setId($id)
    {
        $this->id = $id;
    }
     function setmatiere($matiere)
    {
        $this->matiere = $matiere;
    }
     function settitre($titre)
    {
        $this->titre = $titre;
    }
     function setannee($annee)
    {
        $this->annee = $annee;
    }
}
?>