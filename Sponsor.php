<?php
    session_start();
    $_SESSION["home"] =false;
    $_SESSION["aboutus"] =false;
    $_SESSION["contactus"] =true;
    $_SESSION["projects"] =false;
    require 'includes/navbar.php';
?>

<style>
    dl, ol, ul { 
    margin-bottom: 0rem !important;
}
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPONSOR | OneEarth</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="css/assets/css/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="css/assets/css/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="css/assets/css/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="css/assets/css/style.css" rel="stylesheet">
    
 
    <!-- Poppins For Title -->
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
 
 
	</head>
  <body>
	
	  <!-- ======= headers ======= -->
	  <headers id="headers" class="d-flex align-items-center">
		<div class="container d-flex flex-column align-items-center">
	
		  <h1>Our Next Event(Website release)</h1>
		  <h2>We're working hard to improve our country and we'll ready to go beyong imagination</h2>
		  <div class="countdown d-flex justify-content-center" data-count="2023/1/5">
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
	  </headers><!-- End #headers -->
	
	 
	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="https://i.pinimg.com/564x/c0/96/a4/c096a43885587a0763bceb61a3b8ec44.jpg" alt="img">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>About Our Next Event</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam aliquam distinctio magni enim error commodi suscipit nobis alias nulla, itaque ex, vitae repellat amet neque est voluptatem iure maxime eius!</p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus in accusamus qui sequi nisi, sint magni, ipsam, porro nesciunt id veritatis quaerat ipsum consequatur laborum, provident veniam quibusdam placeat quam?</p>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->
		
		<!-- Start Why Us -->
		<section id="mu-why-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-why-us-area">
							<h2>Why Us?</h2>
							<div class="mu-why-us-content">
								<div class="row">
									<div class="col-md-4">
										<div class="mu-why-us-single">
											<div class="my-why-us-single-icon">
												<i class="fa fa-bed" aria-hidden="true"></i>
											</div>
											<h3>Luxurious Hotels</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum corporis commodi, ipsum sequi quae nemo quasi voluptatibus quaerat nulla! Doloribus cumque ipsum, tempore veritatis quibusdam quae numquam minus iste!</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mu-why-us-single">
											<div class="my-why-us-single-icon">
												<i class="fa fa-thumbs-up" aria-hidden="true"></i>
											</div>
											<h3>The Best Service</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum corporis commodi, ipsum sequi quae nemo quasi voluptatibus quaerat nulla! Doloribus cumque ipsum, tempore veritatis quibusdam quae numquam minus iste!</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mu-why-us-single">
											<div class="my-why-us-single-icon">
												<i class="fa fa-plane" aria-hidden="true"></i>
											</div>
											<h3>Unique Experience</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum corporis commodi, ipsum sequi quae nemo quasi voluptatibus quaerat nulla! Doloribus cumque ipsum, tempore veritatis quibusdam quae numquam minus iste!</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Why Us -->
 
		<!-- Start Google Map -->

		<div id="mu-google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14993.912327875429!2d57.63257255!3d-20.0304082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217daaf4fd29cda1%3A0xb7cda9f795d1c4e0!2sPetit%20Raffray%20Village%20Hall!5e0!3m2!1sen!2smu!4v1672053725155!5m2!1sen!2smu" width="850" height="450" allowfullscreen></iframe>
		</div>

		<!-- End Google Map -->

	</main>
	<!-- End main content -->	
		 
	
	<!-- JavaScript --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="css/assets/css/js/slick.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="css/assets/css/js/app.js"></script> 
    <!-- Custom js -->
	<script type="text/javascript" src="css/assets/css/js/custom.js"></script>  
	
	
  <!-- Template Main JS File -->
  <script src="css/assets/js/main.js"></script>
  </body>
  <!--==================== FOOTER ====================-->
  <!--<footer class="footer">-->
    <!--        <div class="footer__img"></div>-->
    <!--            <div class="footer__content">-->
    <!--                <ul>-->
    <!--                    <li class="footer__link"><a href="#home" class="link">HOME</a></li>-->
    <!--                    <li class="footer__link"><a href="#about" class="link">ABOUT</a></li>-->
    <!--                    <li class="footer__link"><a href="#projects" class="link">PROJECTS</a></li>-->
    <!--                    <li class="footer__link"><a href="#contact" class="link">CONTACT</a></li>-->
    <!--                    <li class="footer__link"><a href="#donate" class="link">DONATE</a></li>-->
    <!--                    <li class="footer__link"><a href="#shop" class="link">SHOP</a></li>-->
    <!--                </ul>-->

    <!--                <div class="footer__networks">-->
    <!--                    More from our networks-->
    <!--                </div>-->

    <!--                <div class="footer__social">-->
    <!--                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">-->
    <!--                        <i class="ri-facebook-fill footer__icon"></i>-->
    <!--                    </a>-->
    <!--                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">-->
    <!--                        <i class="ri-instagram-line footer__icon"></i>-->
    <!--                    </a>-->
    <!--                    <a href="https://www.twitter.com/" target="_blank" class="footer__social-link">-->
    <!--                        <i class="ri-twitter-fill footer__icon"></i>-->
    <!--                    </a>-->
    <!--                </div>-->

    <!--                <div class="footer__copyright">-->
    <!--                    Copyright © 2022 One Earth Mauritius, Inc. All rights reserved.-->
    <!--                </div>-->

    <!--                <div class="footer__terms">-->
    <!--                    <a href="#Terms">-->
    <!--                        <u>Terms & Conditions</u></a> | <a href="#Privacy"><u>Privacy Policy</u>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--    </footer>-->
      
  
</html>