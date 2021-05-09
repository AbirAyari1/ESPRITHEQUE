<?php 
include "../../config2.php";
include "../../config.php";
include_once '../../model/cours.php';
include_once '../../controller/coursc.php';

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
        <form name="f1" method="POST" onsubmit="return verif()" action="ajoutcours.php" >
                    <section id="main-container">
                        <div class="container">
                        
                          
                             <div class="row">
                                <div class="col-md-10">
                                    <p>Ajouter des cours </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Identifiant</label>
                                                    <input class="form-control" name="id" id="id" placeholder="Votre Identifiant" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Matiere</label>
                                                    <input class="form-control" name="matiere" id="matiere" placeholder="Votre matiere" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Titre</label>
                                                    <input class="form-control" name="titre" id="titre" placeholder="Votre titre" type="text">
                                                </div>
                                            </div>

                                            
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="annee">Annee</label>
                                           
                                            <input class="form-control" name="annee" id="annee" placeholder="Votre annee" rows="10" type="texts"  
                                            >
                                        </textarea>
                                           
                                        </div>
                                        
                                        <div class="text-right"><br>
                                            <button class="btn btn-primary solid blank" type="submit" onclick="test1()" >Ajouter</button>
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
      <header>
          <h1 class="text-center">Tables </h1>
        </header>

        <div class="align-text-top">
          <div class="col-mg-6">
            <div class="card">
              <div class="card-header">
                <h4>Liste des cours</h4> <br>
                  <form method="POST">
                  <input type="text" name="valueToSearch" placeholder="valeur à chercher" style="width:150px; height:39px;">
                 
                 <button type="submit"  class="btn btn-dark" name="search"  >  <i class="fa fa-search" > </i></button>
                 <button type="submit" class="btn btn-danger pull-right " name="ASCU" value="ASCU">  <i class="fa fa-sort-up"> </i></button>
                  <button type="submit" class="btn btn-danger pull-right" style="margin-right:10px;"  name="DSCU" value="DSCU" >  <i class="fa fa-sort-down"> </i></button><br><br>
                
              </form>
                <h4>Cours</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                     
                                                           </thead>
                    <tbody>

                  

                   
               <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-sm">
                      <thead  class="thead-dark">
                        <tr>
                          
                        
                          <th>id</th>
                          <th>matiere</th>
                          <th>titre</th>
                          <th>annee</th>
                        </tr>
                        <?php 
								

								//write the query to get data from users table

								$sql = "SELECT * FROM cours";

								//execute the query

								$result =$conn->query($sql);


								?>
								<?php
						if ($result->num_rows > 0) {
						//output data of each row
						while ($row = $result->fetch_assoc()) {
								?>
                      
                    </thead>
                    <tbody>

                      <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['matiere']; ?></td>
                      <td><?php echo $row['titre']; ?></td>
                      <td><?php echo $row['annee']; ?></td>
                      <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php 	 ; echo $row['id']; ?>">Delete <a class="btn btn-danger" href="search.php?id=<?php 	 ; echo $row['id']; ?>">rechercher</a></td>
                      
				
                      </tr>
                      <?php	
                       
                      	}
			}
		?>
                                 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      
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