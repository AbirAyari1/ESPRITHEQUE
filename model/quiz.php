<?php
class cours
{
    private $idquiz;
	private $titrequiz;
	private $options;
	function __construct($idquiz,$titrequiz,$options)
	{
        $this->idquiz=$idquiz;
        $this->titrequiz=$titrequiz;
        $this->options=$options;
        
	}
    function getIdquiz()
    {
        return $this->idquiz;
    }

    }
    function gettitre()
    {
        return $this->titrequiz;
    }
    function getoptions()
    {
        return $this->options;
    }
   
    function getquiz()
    {
        return $this->quiz;
    }   
    function setIdquiz($idquiz)
    {
        $this->idquiz = $idquiz;
    }

     function settitrequiz($titrequiz)
    {
        $this->titrequiz = $titrequiz;
    }
     function setoptions($options)
    {
        $this->options = $options;
    }

    function setquiz($quiz)
    {
        $this->quiz = $quiz;
    }
}
?>