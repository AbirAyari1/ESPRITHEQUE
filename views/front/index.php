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

    <title>partie_cours_client</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.6/css/autoFill.bootstrap4.min.css">

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
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

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
                    <h1><span>Cours.</span></h1>
                    <h2>Se documenter autrement</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="bx bx-library"></i>
                        <h3><a href="#1ere annee">1ère année</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="bx bx-brain"></i>
                        <h3><a href="#2eme annee">2ème année</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="bx bx-message-rounded-detail"></i>
                        <h3><a href="#3eme annee">3ème année</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="#4eme annee">4ème année</a></h3>
                    </div>


                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="quiz.php">QUIZ</a></h3>
                    </div>


                </div>
                                              <?php 

     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM cours WHERE matiere LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM cours";
     $result = $conn->query($sql);
   ?>
         <h1>Que voulez-vous chercher?</h1>
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
                    </table>
  }


    </section>


    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
                    <div class="row">
                        <form action="" method="GET">
                            <div class="col-md-6">


                            </div>
                            <div class="col-md-6 text-left">
                    
                            </div>
                        </form>

                        <br>
                        <br>
                    </div>
                    <div class="card-body">
                        
                                    
                <!-- End Hero -->


                <!-- ======= About Section ======= -->

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


                <!-- ======= 1ere annee Section ======= -->
                <section id="1ere annee" class="services">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>1ére année</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href="">mathématiques de base 1 </a></h4>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="">Communication,culture et citoyenneté f1</a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                                    <h4><a href="">électronique</a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-world"></i></div>
                                    <h4><a href="">Programmation C </a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-slideshow"></i></div>
                                    <h4><a href="">mathématiques de base 2</a></h4>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-arch"></i></div>
                                    <h4><a href="">Projet SDL</a></h4>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End 1ere annee Section -->

                <!-- ======= 2eme annee Section ======= -->
                <section id="2eme annee" class="services">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>2éme année</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href="">mathématiques de base 3</a></h4>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="">Communication,culture et citoyenneté f2</a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                                    <h4><a href="">Architecture des microcontrolleur</a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-world"></i></div>
                                    <h4><a href="">Programmation C++ </a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-slideshow"></i></div>
                                    <h4><a href="">mathématiques de base 4</a></h4>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-arch"></i></div>
                                    <h4><a href="">Projet WEB</a></h4>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End 2eme annee Section -->

                <!-- ======= 3eme annee Section ======= -->
                <section id="3eme annee" class="services">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>3éme année</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href=""></a></h4>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href=""></a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                                    <h4><a href=""></a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-world"></i></div>
                                    <h4><a href=""> </a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-slideshow"></i></div>
                                    <h4><a href=""></a></h4>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-arch"></i></div>
                                    <h4><a href=""></a></h4>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End 3eme annee Section -->

                <!-- ======= 4eme annee Section ======= -->
                <section id="4eme annee" class="services">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>4éme année</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href=""></a></h4>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href=""></a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                                    <h4><a href=""></a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-world"></i></div>
                                    <h4><a href=""> </a></h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-slideshow"></i></div>
                                    <h4><a href=""></a></h4>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-arch"></i></div>
                                    <h4><a href="">s</a></h4>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End 4eme annee Section -->






                <!-- ======= Testimonials Section ======= -->
                <section id="testimonials" class="testimonials">
                    <div class="container" data-aos="zoom-in">

                        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h3>Saul Goodman</h3>

                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            je suis trés satisfait du service de ce site,je vous remercie pour vos
                                            efforts
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                            alt="">
                                        <h3>Sara Wilsson</h3>

                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Un simple mot pour vous remercier du service courtois et professionnel dont
                                            vous nous avez fait bénéficier.
                                            Votre expérience combinée à vos talents de visionnaire vont nous permettre
                                            de réaliser ce projet avec la conviction que ce qui devait être pensé,
                                            planifié et retravaillé aura été fait.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                            alt="">
                                        <h3>Jena Karlis</h3>

                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Ca fait plaisir de voir un tel succés
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->


                            </div>
                </section><!-- End Testimonials Section -->

                <!-- ======= Team Section ======= -->
                <section id="team" class="team">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>Team</h2>
                            <p>Notre équipe</p>
                        </div>

                        <div class="row">

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        <img src="assets/img/team/abir (1).jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Ayari Abir</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member-img">
                                        <img src="assets/img/team/asma.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Srairi Asma</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member-img">
                                        <img src="assets/img/team/benmami.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Ben mami Ahmed</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member-img">
                                        <img src="assets/img/team/boussema.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Boussema Ahmed</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member-img">
                                        <img src="assets/img/team/franck.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Franck patrick </h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member-img">
                                        <img src="assets/img/team/yesmine1.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>El adab Yesmine </h4>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section><!-- End Team Section -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>Contact</h2>
                            <p>contactez nous</p>
                        </div>

                        <div>
                            <iframe style="border:0; width: 100%; height: 270px;"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" allowfullscreen></iframe>
                        </div>

                        <div class="row mt-5">

                            <div class="col-lg-4">
                                <div class="info">
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Location:</h4>
                                        <p>El Ghazela</p>
                                    </div>

                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p> Esprithèque@esprit.tn</p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Call:</h4>
                                        <p>+216 55 622 768</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-8 mt-5 mt-lg-0">

                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                            required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>

                            </div>

                        </div>

                    </div>
                </section><!-- End Contact Section -->
                </main><!-- End #main -->

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