<?php
include "../../config.php";
include '../../controller/userC.php';
$uc = new userC();

if (isset($_POST['id']))
{$uc->SupprimerUser($_POST['id']);
    ?>
    <script type=""> location.replace("../../controller/sup_etu_suc.html");</script>
 <?php   
    //header('Location:forms.php');
}
?>