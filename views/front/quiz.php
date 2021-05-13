<?php
    include_once '../../config.php';
   
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
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>

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

            <nav id="navbar" class="navbar order-last order-lg-0">

                <ul>
                    <li><a class="nav-link scrollto " active href="index.html">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="">Ouvrages</a></li>
                    <li><a class="nav-link scrollto" href="">Cours</a></li>
                    <li><a class="nav-link scrollto " href="">Actualités</a></li>
                    <li><a class="nav-link scrollto" href="">Evènements</a></li>
                    <li><a class="nav-link scrollto" href="">Livres</a></li>
                    <li><a class="nav-link scrollto" href="partie_cours_visiteur.html">déconnexion</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->



        </div>
    </header>
    <!-- End Header -->
    

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


    </section>
        <a class="navbar-brand" href="#"><b>Online Quiz System</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
            <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="quiz.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>&nbsp;
            <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>> <a href="quiz.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>&nbsp;
            <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>> <a href="quiz.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li>&nbsp;
        </div>
    </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(@$_GET['q']==1) 
                {
                    $result = mysqli_query($conn,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                    <tr><td><center><b>S.N.</b></center></td><td><center><b>Topic</b></center></td><td><center><b>Total question</b></center></td><td><center><b>Marks</center></b></td><td><center><b>Action</b></center></td></tr>';
                    $c=1;
                    while($row = mysqli_fetch_array($result)) {
                        $title = $row['title'];
                        $total = $row['total'];
                        $sahi = $row['sahi'];
                        $eid = $row['eid'];
                    $q12=mysqli_query($conn,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);	
                    if($rowcount == 0){
                        echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$title.'</center></td><td><center>'.$total.'</center></td><td><center>'.$sahi*$total.'</center></td><td><center><b><a href="quiz.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn sub1" style="color:black;margin:0px;background:#1de9b6"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></center></td></tr>';
                    }
                    else
                    {
                    echo '<tr style="color:#99cc32"><td><center>'.$c++.'</center></td><td><center>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></center></td><td><center>'.$total.'</center></td><td><center>'.$sahi*$total.'</center></td><td><center><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="color:black;margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></center></td></tr>';
                    }
                    }
                    $c=0;
                    echo '</table></div></div>';
                }?>

                <?php
                    if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) 
                    {
                        $eid=@$_GET['eid'];
                        $sn=@$_GET['n'];
                        $total=@$_GET['t'];
                        $q=mysqli_query($conn,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
                        echo '<div class="panel" style="margin:5%">';
                        while($row=mysqli_fetch_array($q) )
                        {
                            $qns=$row['qns'];
                            $qid=$row['qid'];
                            echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br /><br />'.$qns.'</b><br /><br />';
                        }
                        $q=mysqli_query($conn,"SELECT * FROM options WHERE qid='$qid' " );
                        echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
                        <br />';

                        while($row=mysqli_fetch_array($q) )
                        {
                            $option=$row['option'];
                            $optionid=$row['optionid'];
                            echo'<input type="radio" name="ans" value="'.$optionid.'">&nbsp;'.$option.'<br /><br />';
                        }
                        echo'<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
                    }

                    if(@$_GET['q']== 'result' && @$_GET['eid']) 
                    {
                        $eid=@$_GET['eid'];
                        $q=mysqli_query($conn,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
                        echo  '<div class="panel">
                        <center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

                        while($row=mysqli_fetch_array($q) )
                        {
                            $s=$row['score'];
                            $w=$row['wrong'];
                            $r=$row['sahi'];
                            $qa=$row['level'];
                            echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
                                <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
                                <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
                                <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
                        }
                        $q=mysqli_query($conn,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
                        while($row=mysqli_fetch_array($q) )
                        {
                            $s=$row['score'];
                            echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
                        }
                        echo '</table></div>';
                    }
                ?>

                <?php
                    if(@$_GET['q']== 2) 
                    {
                        $q=mysqli_query($conn,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
                        echo  '<div class="panel title">
                        <table class="table table-striped title1" >
                        <tr style="color:black;"><td><center><b>S.N.</b></center></td><td><center><b>Quiz</b></center></td><td><center><b>Question Solved</b></center></td><td><center><b>Right</b></center></td><td><center><b>Wrong<b></center></td><td><center><b>Score</b></center></td>';
                        $c=0;
                        while($row=mysqli_fetch_array($q) )
                        {
                        $eid=$row['eid'];
                        $s=$row['score'];
                        $w=$row['wrong'];
                        $r=$row['sahi'];
                        $qa=$row['level'];
                        $q23=mysqli_query($conn,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');

                        while($row=mysqli_fetch_array($q23) )
                        {  $title=$row['title'];  }
                        $c++;
                        echo '<tr><td><center>'.$c.'</center></td><td><center>'.$title.'</center></td><td><center>'.$qa.'</center></td><td><center>'.$r.'</center></td><td><center>'.$w.'</center></td><td><center>'.$s.'</center></td></tr>';
                        }
                        echo'</table></div>';
                    }

                    if(@$_GET['q']== 3) 
                    {
                        $q=mysqli_query($conn,"SELECT * FROM rank ORDER BY score DESC " )or die('Error223');
                        echo  '<div class="panel title"><div class="table-responsive">
                        <table class="table table-striped title1" >
                        <tr style="color:red"><td><center><b>Rank</b></center></td><td><center><b>Name</b></center></td><td><center><b>Email</b></center></td><td><center><b>Score</b></center></td></tr>';
                        $c=0;

                        while($row=mysqli_fetch_array($q) )
                        {
                            $e=$row['email'];
                            $s=$row['score'];
                            $q12=mysqli_query($conn,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
                            while($row=mysqli_fetch_array($q12) )
                            {
                                $name=$row['name'];
                            }
                            $c++;
                            echo '<tr><td style="color:black"><center><b>'.$c.'</b></center></td><td><center>'.$name.'</center></td><td><center>'.$e.'</center></td><td><center>'.$s.'</center></td></tr>';
                        }
                        echo '</table></div></div>';
                    }
                ?>
 

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
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

    </body>
</html>