<?php
    session_start();
    $_SESSION["home"] =false;
    $_SESSION["aboutus"] =false;
    $_SESSION["contactus"] =true;
    $_SESSION["projects"] =false;
    require 'includes/navbar.php';
    
    ?>
    
    
    
    <style>
        .wrapper {
  min-height: 100vh;
  display: flex;
  align-items: center;
  /*background: url("../img/bg-registration-form-6.jpg") no-repeat center center;*/
  background-size: cover; }
.inner.dark-theme{
    background:white;
}
    </style>
    
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>VOLUNTEER | OneEarth</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/volunteer/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="img/join us2.jpg" alt="">
				</div>
				<form action="">
					<h3>Join Our Time</h3>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="Name">
						<input type="text" class="form-control" placeholder="Mail">
					</div>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="Phone">
						<div class="form-holder">
							<select name="" id="" class="form-control">
								<option value="" disabled selected>Choose Your Role</option>
								<option value="class 01">Cleaning</option>
								<option value="class 02">Offer Help</option>
								<option value="class 03">Sell Items</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<textarea name="" id="" placeholder="Message" class="form-control" style="height: 130px;"></textarea>
					<button>Apply now
						<i class="zmdi zmdi-long-arrow-right"></i>
					</button>
				</form>
				
			</div>
		</div>
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
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body> 
</html>