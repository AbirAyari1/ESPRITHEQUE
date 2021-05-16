<?php
include "../../config.php";
include '../../controller/reclamationC.php';
$rc = new reclamationC();

if (isset($_POST['idr']))
{$rc->SupprimerReclamation($_POST['idr']);
    ?>
        <script type=""> location.replace("../../controller/sup_rec_suc.html");</script>
     <?php   
    //header('Location:forms.php');
}
?>