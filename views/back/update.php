<?php 
           include("updatefun.php") ; 
?>
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
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.red.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.3.6/css/autoFill.bootstrap4.min.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <script src="../../verif.js"></script>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/asma.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Esprithèque</h2><span>Espace Admin</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li ><a href="forms.html"> <i class="icon-user"></i>Etudiants</a></li>
            <li><a href="index.html"> <i class="icon-bill"></i>Ouvrages</a></li>
            <li><a href="charts.html"> <i class="icon-check"></i>Livres</a></li>
            <li><a href="tables.php"> <i class="icon-clock"></i>Evènements</a></li>
            <li class="active"><a href="ajout.php"> <i class="icon-pencil-case"></i>Cours </a></li>
            <li> <a href="#"> <i class="icon-paper-airplane"></i>Actualités</a></li>
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
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                
                <!-- Log out-->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Forms       </li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->


          <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container" data-aos="fade-up">
              <br><br><br>
              <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-8 col-lg-8">
                  
                </div>
              </div>
        <form name="f1" method="POST" action="updatefun.php" >
                    <section id="main-container">
                        <div class="container">
                        
                          
                             <div class="row">
                                <div class="col-md-10">
                                    <p>UPDATE</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Identifiant</label>
                                                    <input class="form-control" name="id" id="id" value="<?php echo $id; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Titre</label>
                                                    <input class="form-control" name="titre" id="titre"   type="text" value="<?php echo $titre; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Matiere</label>
                                                    <input class="form-control" name="matiere" id="matiere"   type="text" value="<?php echo $matiere; ?>">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Classe</label>
                      <select class="form-control" name="annee" id="annee" value="<?php echo $annee; ?>" >
                  <option value="1ère Année">1ère Année</option>
                  <option value="2ème Année">2ème Année</option>
                  <option value="3ème Année">3ème Année</option>
                  <option value="4ème Année">4ème Année </option>
                  <option value="5ème Année">5ème Année</option>
                  

                 </select>
                                           
                                             
                                           
                                        </textarea>
                                           
                                        </div>
                                        
                                        <div class="text-right"><br>
                                          <input class="btn btn-primary solid blank" type="submit" value="Update" name="update">
                                            
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-1"></div>
                                <!--<div class="col-md-4">
                                    <h1>Login</h1>
                                    <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" name="email" id="email" placeholder="Votre Email" rows="10" type="texts" required></textarea>
                                        </div>
                                        
                                        <div class="text-right"><br>
                                            <button class="btn btn-primary solid blank" type="submit">Login</button>
                                        </div>
                                </div>-->
                            </div>
                        </div>
                        <!--/ container end -->
                     </section>
                    </form>
              
            </div>
          </section>
          
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2020</p>
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