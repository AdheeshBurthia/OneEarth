  <?php 
    $_SESSION["home"] =false;
    $_SESSION["aboutus"] =false;
    $_SESSION["contactus"] =true;
    $_SESSION["projects"] =false;
    require 'includes/navbar.php';
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>DONATE | OneEarth</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        
        
        <!--Css references -->
        <!--<link rel="stylesheet" href="css/donatecss/bootstrap.min.css">-->
        <link href="css/donatecss/styles.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="css/donatecss/demo.css" />-->
        <!--<link rel="stylesheet" href="css/donatecss/testimonial.css" />-->
        <!--<link rel="stylesheet" href="css/donatecss/font-awesome.min.css">-->
        <!--<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>-->
    </head>
    <body> 
    <div id="empty">
        
    </div>
        <div class="col-md-12 container">
            <div class="donate-content">
              <div class="donate-body">
                <div class="accent-rule-short"></div>
                <h2>Join us in helping people survive and rebuild their lives. </h2>
                <ul class="list-unstyled list-inline">
                    <li><button type="button" id="p1" class="btn btn-primary btn-xl btn-block">Rs 15</button></li>
                    <li><button type="button" id="p2" class="btn btn-primary btn-xl btn-block">Rs 25</button></li>
                    <li><button type="button" id="p3" class="btn btn-primary btn-xl btn-block">Rs 50</button></li>
                    <li><button type="button" id="p4" class="btn btn-primary btn-xl btn-block">Rs 75</button></li>
                    <li><button type="button" id="p5" class="btn btn-primary btn-xl btn-block">Rs 100</button></li>
                    <li>
                        <div class="control-group">
                          <div class="form-control-donate controls">
                            <input name="textinput" placeholder="Rs Other Amount" class="form-control" type="text">
                          </div>
                        </div>
                    </li>
                </ul>
                <br>
                <!-- monthly / one-time -->
                      <form class="form-horizontal text-center">
                        <fieldset>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="radio-inline" for="radios-s">
                              <input name="radios" id="radios-s" value="1" checked="checked" type="radio">
                              Single Donation
                            </label>
                            <label class="radio-inline" for="radios-m">
                              <input name="radios" id="radios-m" value="2" type="radio">
                              Monthly Donation
                            </label>
                          </div>
                      </div>
                      </fieldset>
                    </form>
                <br>
                <button type="button" class="btn btn-tertiary btn-xl btn-rounded-edge" data-dismiss="donate"><a href="payment.php">Continue</a></button>
                <br><br>
            </div>
          </div>
        </div>
        <div class="container donate-text">
        <h3 class="text-center">They need you</h3>
        
        <p>
          Every cents matters, we do not need big from you. The gesture counts, give how much you feel comfortable to give.
          An act of giving is an act of humility. Be the sunshine in their storm. Be the superhero in their caos.
        </p>  
        </div>

        <div class="fun-fact col-md-12">
        <div class="stat">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <i class="fa fa-users fa-3x"></i>
                    <span class="stat-count highlight">422</span>
                    <div class="milestone-details">Happy Volunteers</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <i class="fa fa-map-marker fa-3x"></i>
                    <span class="stat-count highlight">2</span>
                    <div class="milestone-details">Event organised</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <i class="fa fa-trophy fa-3x"></i>
                    <span class="stat-count highlight">501</span>
                    <div class="milestone-details">Awards Won</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <i class="fa fa-money fa-3x"></i>
                    <span class="stat-count highlight">500</span>
                    <div class="milestone-details">MUR Donated</div>
                </div>
            </div>
    </div><!-- stat -->
  </div>

 
    <!-- script references -->
        <script src="css/donatecss/js/jquery.min.js"></script>
        <script src="css/donatecss/js/bootstrap.min.js"></script>
        <script src="css/donatecss/js/nav-hover.min.js"></script>
        <script type="text/javascript" src="css/donatecss/js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="css/donatecss/js/main.js"></script>
    <!-- Place in the <head>, after the three links -->
    <script>
     $('.testimonials-slider').bxSlider({
      slideWidth: 800,
      minSlides: 1,
      maxSlides: 1,
      slideMargin: 32,
      auto: true,
      autoControls: true
      });
    </script>
        <script type="text/javascript">
        </script>
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
