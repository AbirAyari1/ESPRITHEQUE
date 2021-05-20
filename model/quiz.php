<?php
class quiz
{
    private $id;
	private $que;
	private $option1;
    private $option2;
    private $option3;
    private $option4;
    private $ans;
    private $userans;
	function __construct($id,$que,$option1,$option2,$option3,$option4,$ans,$userans)
	{
        $this->id=$id;
        $this->que=$que;
        $this->option1=$option1;
        $this->option2=$option2;
         $this->option3=$option3;
        $this->option4=$option4;
        $this->ans=$ans;
        $this->userans=$userans;
        
	}
    function getid()
    {
        return $this->id;
    }
    function getque()
    {
        return $this->que;
    }

    
    function getoption1()
    {
        return $this->option1;
    }
    function getoption2()
    {
        return $this->option2;
    }
    function getoption3()
    {
        return $this->option3;
    }
    function getoption4()
    {
        return $this->option4;
    }
    function getans()
    {
        return $this->ans;
    }
   
    function getuserans()
    {
        return $this->userans;
    } 
    function setid($que)
    {
        $this->id = $id;
    }  
    function setque($que)
    {
        $this->que = $que;
    }

     function setoption1($option1)
    {
        $this->option1 = $option1;
    }
    function setoption2($option2)
    {
        $this->option2 = $option2;
    }
    function setoption3($option3)
    {
        $this->option3 = $option3;
    }
    function setoption4($option4)
    {
        $this->option4 = $option4;
    }
     function setans($ans)
    {
        $this->ans = $ans;
    }

    function setuserans($userans)
    {
        $this->userans = $userans;
    }
}
?>