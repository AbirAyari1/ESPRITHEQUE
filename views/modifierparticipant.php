<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Esprithèque</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="admin/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="admin/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="admin/css/style.red.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <script src="../../verifadmin.js"></script>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="admin/img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Esprithèque</h2><span>Espace Admin</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li ><a href="admin/forms.php"> <i class="icon-user"></i>Etudiants</a></li>
            <li><a href="admin/cathegorieProd.php?page=1"> <i class="icon-bill"></i>Ouvrages</a></li>
            <li ><a href="admin/livres.php"> <i class="icon-check"></i>Gestion des livres</a></li>

              
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                              class="icon-clock"></i>Gestion des evenements </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                      <li class="active" ><a href="admin/afficherparticipant.php"> Participants</a></li>
                      <li><a href="admin/evenements.php">evenement</a></li>

                  </ul>
              </li>
            
            <li><a href="login.html"> <i class="icon-pencil-case"></i>Cours </a></li>
            <li> <a href="admin/ForumDash.php"> <i class="icon-paper-airplane"></i>Actualités</a></li>
          </ul>
        </div>
        
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary"> Esprit</strong><span>thèque </span></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                

                          
                    
               
                <!-- Log out-->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Se déconnecter</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>







   <!--            xttttttt          -->
   <?php
include "../controller/participantC.php";
include "../model/participant.php";
include "../config.php";
if (isset($_GET['Idparticipant'])){
    $participantC=new participantC();
      $result=$participantC->recupererParticipant($_GET['Idparticipant']);
    foreach($result as $row){
      $Idparticipant=$row['Idparticipant'];
      $Idevenement=$row['Idevenement'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
$email=$row['email'];
   
?>


   <div class="ms-content-wrapper"  >
      <div class="row">

            <div class="col-md-12" >
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons"></i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">participant</a></li>
                  <li class="breadcrumb-item active" aria-current="page">modifier un participant</li>
                </ol>
              </nav>
            </div>





        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              <form method="POST"  class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                          <h5>modifier participant</h5><br>

               <label>Idparticipant</label>
                  <div class="input-group">
                       <input type="number" name="Idparticipant" class="form-control" id="Idparticipant" placeholder="Entrer Idparticipant"  value="<?PHP echo $Idparticipant ?>">
                       <div class="invalid-feedback">
                       </div>
                     </div>
         

              <label>Idevenement</label>
                <div class="input-group">
                  <input type="number" name="Idevenement" class="form-control" id="Idevenement" placeholder="Entrer Idevenement" value="<?PHP echo $Idevenement ?>">
                  <div class="invalid-feedback">
                  </div>
                </div>


                <label>nom</label>
                  <div class="input-group">
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer la nom "value="<?PHP echo $nom ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>


                  <label>prenom</label>
                  <div class="input-group">
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Entrer prenom "value="<?PHP echo $prenom ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>

                 <label>email</label>
                  <div class="input-group">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Entrer email "value="<?PHP echo $email ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>
                
              
            
             </div>

              <div class="col-md-12">
              <input type="submit" name="modifier" value="Modifier participant!">
              </div>
         
                  </div>
                </div>
              </form>
              <?PHP
  }

if (isset($_POST['modifier'])){
  $participant = new participant($_POST['Idparticipant'],$_POST['Idevenement'],$_POST['nom'],$_POST['prenom'],$_POST['email']);
  $participantC->modifierParticipant($participant,$_POST['Idparticipant']);
echo'<script>location.replace("admin/afficherparticipant.php")</script>';  
}
}?>

            </div>
          </div>
        </div>
      </div>
    </div> 



 <!--            xttttttt          -->



 </section>
<footer class="main-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <p> Esprithèque &copy; 2020-2021</p>
      </div>
      <div class="col-sm-6 text-right">
        <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
      </div>
    </div>
  </div>
</footer>
</div>
<!-- JavaScript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Main File-->
<script src="js/front.js"></script>
</body>
</html>