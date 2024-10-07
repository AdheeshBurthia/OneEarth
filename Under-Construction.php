<?php 
    $_SESSION["home"] =false;
    $_SESSION["aboutus"] =false;
    $_SESSION["contactus"] =true;
    $_SESSION["projects"] =false;
    require 'includes/navbar.php';
?>
<style>
     ul { 
    margin-bottom: 0rem !important;
}
    body::before { 
     background: none !important; 
}
.bi-brightness-high::before,.bi-bar-chart::before,.bi-briefcase::before { 
    color: var(--title-color) !important;
}

</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UNDER-CONSTRUCTION | One Earth</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="css/UnderConstructionCss/img/favicon.png" rel="icon">
  <link href="css/UnderConstructionCss/img/apple-touch-icon.png" rel="apple-touch-icon">
 
  <!-- Vendor CSS Files -->
  <link href="css/UnderConstructionCss/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/UnderConstructionCss/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/UnderConstructionCss/css/Under-Construction-Css.css" rel="stylesheet">
 
</head>

<body>

  <!-- ======= countdown ======= -->
  <countdown id="countdown" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>We're working on it. ;D</h1>
      <h2>We're working hard to build our website. We'll soon have new items</h2>
      <div class="countdown d-flex justify-content-center" data-count="2023/1/15">
        <div>
          <h3>%d</h3>
          <h4>Days</h4>
        </div>
        <div>
          <h3>%h</h3>
          <h4>Hours</h4>
        </div>
        <div>
          <h3>%m</h3>
          <h4>Minutes</h4>
        </div>
        <div>
          <h3>%s</h3>
          <h4>Seconds</h4>
        </div>
      </div>
 

    </div>
  </countdown><!-- End #countdown -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>A little profit free "non-Governmental organisation".</p>
        </div>

        <div class="row mt-2">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Our Message</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">
            Our Vision</a></h4>
            <p class="description">A clean and least problematic Earth. One-Earth</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">But as you observe</a></h4>
            <p class="description">To be in a better world, thats where we need your help. Together we can do it.</p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->
 

  </main><!-- End #main -->
 


  <!-- Vendor JS Files -->
  <script src="css/UnderConstructionCss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="css/UnderConstructionCss/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="css/UnderConstructionCss/js/main.js"></script>

</body>

    <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__img"></div>
                <div class="footer__content">
                    <ul>
                        <li class="footer__link"><a href="#home" class="link">HOME</a></li>
                        <li class="footer__link"><a href="#about" class="link">ABOUT</a></li>
                        <li class="footer__link"><a href="#projects" class="link">PROJECTS</a></li>
                        <li class="footer__link"><a href="#contact" class="link">CONTACT</a></li>
                        <li class="footer__link"><a href="#donate" class="link">DONATE</a></li>
                        <li class="footer__link"><a href="#shop" class="link">SHOP</a></li>
                    </ul>

                    <div class="footer__networks">
                        More from our networks
                    </div>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-fill footer__icon"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line footer__icon"></i>
                        </a>
                        <a href="https://www.twitter.com/" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-fill footer__icon"></i>
                        </a>
                    </div>

                    <div class="footer__copyright">
                        Copyright © 2022 One Earth Mauritius, Inc. All rights reserved.
                    </div>

                    <div class="footer__terms">
                        <a href="#Terms">
                            <u>Terms & Conditions</u></a> | <a href="#Privacy"><u>Privacy Policy</u>
                        </a>
                    </div>
                </div>
        </footer>
        <!-- END OF FOOTER --> 
</html>