<?php 

if (isset($_POST['submit'])) {
    include "../../config1.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);
    $que = validate($_POST['que']);
    $option1 = validate($_POST['option1']);
    $option2 = validate($_POST['option2']);
    $option3 = validate($_POST['option3']);
    $option4 = validate($_POST['option4']);
    $ans = validate($_POST['ans']);
    $userans = validate($_POST['userans']);


    $quiz_data = 'id='.$id. 'que='.$que. 'option1='.$option1. 'option2='.$option2. 'option3='.$option3. 'option4='.$option4. 'ans='.$ans. 'userans='.$userans;


    if (empty($id)) {
        header("Location: ajout.php?error=id is required&$quiz_data");
    }else if (empty($email)) {
        header("Location: ajout.php?error=ans is required&$quiz_data");
    }else {

       $sql = "INSERT INTO quizc (id,que,option1,option2,option3,option4,ans,userans) 
               VALUES('$id', '$que','$option1','$option2','$option3','$option4','$ans','$userans')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
          header("Location: ajout.php?success=successfully created");
       }else {
          header("Location: ajout.php?error=unknown error occurred&$quiz_data");
       }
    }

}