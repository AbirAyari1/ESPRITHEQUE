<?php 

include ('../../config1.php') ; 
session_start();
 $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
  $q = $conn->query(
     "SELECT titre, matiere FROM cours
      WHERE titre LIKE '%$recherche%'
      OR matiere LIKE '%$recherche%'
      LIMIT 10");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="index.html"><span>E</span>T<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar ml-auto order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto " href="index2.html">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="profil.php">Profil</a></li>
          

                <?php
                if (isset($_SESSION['e']))
                {
                    ?>
                <li><a class="nav-link scrollto" href="deconnexion.php">Déonnexion</a></li>
                <?php
                }
                else {
                    ?>
                    <li><a class="nav-link scrollto" active href="connexion.php">Connexion</a></li>
                <?php
                }
                ?>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        

    </div>
</header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1><span>ESPRIT</span>thèque<span>.</span></h1>
          <h2>Se documenter autrement</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bx bx-library"></i>
            <h3><a href="Revues.php">Ouvrages</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bx bx-brain"></i>
            <h3><a href="">Cours</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bx bx-message-rounded-detail"></i>
            <h3><a href="forum-details.php">Actualités</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="http://localhost/ESPRITHEQUE/views/evenements.php">Evènements</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bx bx-book"></i>
            <h3><a href="Livres.php">Livres</a></h3>
          </div>
        </div>
        
      </div>
      <br> <br>
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <div class="col-xl-2 col-md-4"> <h2><a href="">1ère anneé</a></h2> </div>
      <div class="col-xl-2 col-md-4"> <h2><a href="">2ème anneé</a></h2> </div>
      <div class="col-xl-2 col-md-4"> <h2><a href="">3ème anneé</a></h2> </div>
      <div class="col-xl-2 col-md-4"> <h2><a href="">4ème anneé</a></h2> </div>
      <div class="col-xl-2 col-md-4"> <h2><a href="quiz.php">Quiz</a></h2> </div>
              </div>
        
    </div>
  </section>
                       
                <!-- End Hero -->


                <!-- ======= About Section ======= -->

                   <?php 

     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM cours WHERE matiere LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM cours";
     $result = $conn->query($sql);
   ?>
         
  <form action="" class="formulaire">
    <div class="col-md-12">
         <input type="text" name="search" class='form-control' placeholder="Search By Name"
                                    value=<?php echo @$_GET['search']; ?>>
     </div>
        <div class="col-md-12 text-center">
             <button class="btn btn-dark">Search</button>
         </div>
     
  </form>
  </div>
  <?php 
    if(isset($_GET['search'])){
   while( $row = $result->fetch_object() ): ?>

                    <table id="tableid"  class="table table-bordered table-dark">
                        <tr>
                            
                            <th>matiere</th>
                            <th>titre</th>
                            
                        </tr>
                        
                        <tr>
                            
                            <td><?php echo $row->matiere; ?></td>
                            <td><?php echo $row->titre; ?></td>
                        </tr>
                        <?php endwhile; 

                        }?>
                        }
                    </table>     


                <section id="about" class="about">
                    <div class="container" data-aos="fade-up">

                        <div class="row">
                            <div class="col-lg-12 order-2 order-lg-3" data-aos="fade-left" data-aos-delay="100">
                                <img src="assets/img/asma50.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                                data-aos-delay="100">
                                <h3>ESPRITHEQUE vous permet de créer votre propre CLASSROOM en consultant tous les cours
                                    souhaités</h3>

                                <ul>
                                    <li><i class="ri-check-double-line"></i> 1ére année et 2éme année (tronc commun TIC)
                                    </li>
                                    <li><i class="ri-check-double-line"></i> 3éme année et 4éme année (options
                                        télécommunication).</li>

                                </ul>

                            </div>
                        </div>

                    </div>
                </section><!-- End About Section -->

                <!-- ======= Clients Section ======= -->
                <section id="clients" class="clients">
                    <div class="container" data-aos="zoom-in">

                        <div class="clients-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide"><img src="assets/img/clients/logo1.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/logo2.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/logo3.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/logo4.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/logo5.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/logo6.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/logo7.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/logo8.jpg" class="img-fluid"
                                        alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </section><!-- End Clients Section -->

                
                <!-- ======= Footer ======= -->
                <footer id="footer">
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">


                                <div class="col-lg-3 col-md-6 footer-links">
                                    <h4>Contact:</h4>
                                    <ul>
                                        <li><i class="bx bx-chevron-right"></i> <a href="#"> <strong>
                                                    Téléphone:</strong> +216 55 622 768<br></a></li>
                                        <li><i class="bx bx-chevron-right"></i> <a href="#"><strong> Adresse:</strong>
                                                El Ghazela<br></a></li>
                                        <li><i class="bx bx-chevron-right"></i> <a href="#"><strong> Email:</strong>
                                                Esprithèque@esprit.tn <br></a></li>
                                        <div class="social-links mt-3">
                                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                        </div>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </footer><!-- End Footer -->

                <div id="preloader"></div>
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                        class="bi bi-arrow-up-short"></i></a>

                <!-- Vendor JS Files -->
                <script src="assets/vendor/aos/aos.js"></script>
                <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
                <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                <script src="assets/vendor/php-email-form/validate.js"></script>
                <script src="assets/vendor/purecounter/purecounter.js"></script>
                <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
                <script src="https://cdn.datatables.net/autofill/2.3.6/js/dataTables.autoFill.min.js"></script>
                <script src="https://cdn.datatables.net/autofill/2.3.6/js/autoFill.bootstrap4.min.js"></script>
                <script>
                  $(document).ready(function() {
    $('#tableid').DataTable();
} );
                </script>

            <!-- Template Main JS File -->
                <script src="assets/js/main.js"></script>

    </body>

</html>