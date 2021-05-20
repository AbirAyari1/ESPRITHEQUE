<?php 
include "../../config3.php";
include "../../config1.php";
include_once '../../model/cours.php';
include_once '../../controller/coursc.php';

$link = "";
$link_status = "display: none;";

if (isset($_POST['upload'])) { // If isset upload button or not
  // Declaring Variables
  $location = "uploads/";
  $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
  $file_name = $_FILES["file"]["name"]; // Get uploaded file name
  $file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
  $file_size = $_FILES["file"]["size"]; // Get uploaded file size

  /*
  How we can get mb from bytes
  (mb*1024)*1024

  In my case i'm 10 mb limit
  (10*1024)*1024
  */

  if ($file_size > 10485760) { // Check file size 10mb or not
    echo "<script>alert('Woops! File is too big. Maximum file size allowed for upload 10 MB.')</script>";
  } else {
    $sql = "INSERT INTO uploaded_files (name, new_name)
        VALUES ('$file_name', '$file_new_name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      move_uploaded_file($file_temp, $location . $file_new_name);
      echo "<script>alert('Wow! File uploaded successfully.')</script>";
      // Select id from database
      $sql = "SELECT id FROM uploaded_files ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);
      if ($row = mysqli_fetch_assoc($result)) {
        $link = $base_url . "download.php?id=" . $row['id'];
        $link_status = "display: block;";
      }
    } else {
      echo "<script>alert('Woops! Something wong went.')</script>";
    }
  }
}

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
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.3.6/css/autoFill.bootstrap4.min.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="../../verifadmin.js"></script>
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
            <li ><a href="../admin/forms.html"> <i class="icon-user"></i>Etudiants</a></li>
            <li><a href="../admin/cathegorieProd.php?page=1"> <i class="icon-bill"></i>Ouvrages</a></li>
            <li><a href="../admin/livres.php"> <i class="icon-check"></i>Livres</a></li>
            <li><a href="../admin/evenements.php"> <i class="icon-clock"></i>Evènements</a></li>
            <li class="active"><a href="ajout.php"> <i class="icon-pencil-case"></i>Cours </a></li>
            <li> <a href="../admin/ForumDash.php"> <i class="icon-paper-airplane"></i>Actualités</a></li>
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
                <li class="nav-item"><a href="logad.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Se déconnecter</span><i class="fa fa-sign-out"></i></a></li>
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
        <form name="f1" method="POST" onsubmit="return verif()"action="ajoutcours.php" >
                    <section id="main-container">
                        <div class="container">
                        
                          
                             <div class="row">
                                <div class="col-md-10">
                                  <div class="text-center">
                                    <h3>Ajouter des cours </h3>
                                  </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Identifiant</label>
                                                    <input class="form-control" name="id" id="id" placeholder="Votre Identifiant"required pattern="[0-9\.]{8}" type="text">
                                                </div>
                                            </div>
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Matiere</label>
                                                    <input class="form-control" name="matiere" id="matiere"required pattern="[0-9\a-zA-Z-\.]{3,20}" placeholder="Votre matiere" type="text">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Titre</label>
                                                    <input class="form-control" name="titre" id="titre" required pattern="[a-zA-Z-\&nbsp;\.]{3,20}" placeholder="Votre titre" type="text">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Classe</label>
                      <select class="form-control" name="annee" id="annee"  >
                  <option value="1ère Année">1ère Année</option>
                  <option value="2ème Année">2ème Année</option>
                  <option value="3ème Année">3ème Année</option>
                  <option value="4ème Année">4ème Année </option>
                  <option value="5ème Année">5ème Année</option>
                  

                 </select>
                                        </textarea>
                                           
                                        </div>
                                        
                                        <div class="text-right"><br>
                              
                                            <button class="btn btn-primary solid blank" type="submit" name="submit" onclick="test1()" >Ajouter</button>


                                        </div>
                                    
                                
                                    </form>
                                </div>

                                 <form name="f1" method="POST" onsubmit="return verif()"action="ajoutquiz.php" >
                    <section id="main-container">
                        <div class="container">
                        
                          
                             <div class="row">
                                <div class="col-md-10">
                                  <div class="text-center">
                                    <h3>Ajouter  quiz </h3>
                                  </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>id</label>
                                                    <input class="form-control" name="id" id="id" placeholder="question" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Question</label>
                                                    <input class="form-control" name="que" id="que" placeholder="question" type="text">
                                                </div>
                                            </div>
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>option 1 </label>
                                                    <input class="form-control" name="option1" id="option1"required pattern="[0-9\a-zA-Z-\.]" placeholder="Votre option" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>option 2 </label>
                                                    <input class="form-control" name="option2" id="option2"required pattern="[0-9\a-zA-Z-\.]" placeholder="Votre option" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>option 3 </label>
                                                    <input class="form-control" name="option3" id="option3"required pattern="[0-9\a-zA-Z-\.]" placeholder="Votre option" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>option 4 </label>
                                                    <input class="form-control" name="option4" id="option4"required pattern="[0-9\a-zA-Z-\.]" placeholder="Votre option" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>answer </label>
                                                    <input class="form-control" name="ans" id="ans"required pattern="[0-9\a-zA-Z-\.]" placeholder="Votre option" type="text">
                                                </div>
                                            </div>
                                               <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>user answer </label>
                                                    <input class="form-control" name="userans" id="userans"required pattern="[0-9\a-zA-Z-\.]" placeholder="Votre option" type="text">
                                                </div>
                                            </div>

                                            
                                       
                                     
                                        
                                        <div class="text-right"><br>
                              
                                            <button class="btn btn-primary solid blank" type="submit" name="submit" >Ajouter</button>


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
                         <td><a class="btn btn-sm btn-success" href="upload.php">UPLOAD</a></td>
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
              <div class="text-center">
                <br> 
                <h3>Liste des cours</h3> <br>
                  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>

                  

                   
               <div class="card-body">
                  <div class="table-responsive">
                    <table id="datatableid" class="table table-striped table-sm">
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

     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM cours WHERE matiere LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM cours";
     $result = $conn->query($sql);
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
                      <td><a class="btn btn-sm btn-success" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-sm btn-danger" href="delete.php?id=<?php 	 ; echo $row['id']; ?>">Delete</a></td>
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
           <div class="align-text-top">
          <div class="col-mg-6">
            <div class="card">
              <div class="text-center">
                <br> 
                <h3>Liste QUIZ</h3> <br>
                  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>

                  

                   
               <div class="card-body">
                  <div class="table-responsive">
                    <table id="datatableid" class="table table-striped table-sm">
                      <thead  class="thead-dark">
                        <tr>
                          
                        
                          <th>id</th>
                          <th>question</th>
                          <th>option 1 </th>
                          <th>option 2 </th>
                           <th>option 3 </th>
                          <th>option  4</th>
                          <th>answer </th>
                          <th>user answer</th>
                          <th>actions</th>
                        </tr>
                        <?php 
                

                //write the query to get data from users table

                $sql = "SELECT * FROM quizc";

                //execute the query

                $result =$conn->query($sql);


                ?>
                <?php 

     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM quizc WHERE que LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM quizc";
     $result = $conn->query($sql);
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
                      <td><?php echo $row['que']; ?></td>
                      <td><?php echo $row['option1']; ?></td>
                      <td><?php echo $row['option2']; ?></td>
                      <td><?php echo $row['option3']; ?></td>
                      <td><?php echo $row['option4']; ?></td>
                      <td><?php echo $row['ans']; ?></td>
                      <td><?php echo $row['userans']; ?></td>
                      <td><a class="btn btn-sm btn-success" href="updateQ.php?id=<?php echo $row['id']; ?>">edit</a>&nbsp;
                        <a class="btn btn-sm btn-danger" href="deletequiz.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                      
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
      <script src="https://cdn.datatables.net/autofill/2.3.6/js/dataTables.autoFill.min.js"></script>
                <script src="https://cdn.datatables.net/autofill/2.3.6/js/autoFill.bootstrap4.min.js"></script>
                <script>
                  $(document).ready(function() {
    $('#datatableid').DataTable();
} );
                </script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>