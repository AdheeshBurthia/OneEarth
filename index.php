<?php
    session_start();
    if(!isset($_SESSION["authentication"])){
        $_SESSION["authentication"] = false;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--================ FAVICON =================-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!--================ BOXICONS ================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============--> 
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!--================ TOOLTIP =================--> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--================ JQUERY =================--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--================ BOOTSTRAP CSS =================--> 
    <link rel="stylesheet" href="css/alert.css">

    <!--================ BOOTSTRAP JS =================--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--================ BOOTSTRAP GROWL JS =================--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>

    <!--================== CSS ===================-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">

    <!--============= TITLE ==============--> 
    <title>HOME | OneEarth</title>
    
    <style>
        /*=============== LOADING SCREEN ===============*/
        /*========== SHOULD USE INTERNAL CSS ===========*/
        .fullpage-loader {
          position: fixed;
          top: 0;
          left: 0;
          height: 100vh;
          width: 100vw;
          overflow: hidden;
          background: #2b2c2f;
          z-index: 9999;
          opacity: 1;
          transition: opacity 0.5s;
          display: none;
          justify-content: center;
          align-items: center;
          transition-delay: 100ms;
        }
        .powered_by_infinity{
          text-align: center;
          color: #b2b2b2;
        }
        .fullpage-loader .fullpage-loader__logo {
          position: relative;
        }
        .fullpage-loader .fullpage-loader__logo:after {
          content: "";
          height: 100%;
          width: 100%;
          position: absolute;
          top: 0;
          left: 0;
        }      
        /* END LOADER CSS */
    </style>
</head>
<body>
    <!--==================== SCREEN LOADER ====================-->
    <div class="fullpage-loader">
        <div class="fullpage-loader__logo">
            <img src="img/loader.gif"/>
            <div class="powered_by_infinity">Powered by <u>INFINITY</u></div>
        </div>
    </div>
    <!-- END LOADER HTML -->
    
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="../home.php" class="nav__logo">
                 <span class="logo__one">One</span>Earth
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="aboutus.php" class="nav__link">About us</a>
                    </li>
                    <li class="nav__item">
                        <a href="projects.php" class="nav__link">Projects</a>
                    </li>
                    <li class="nav__item">
                        <a href="contactus.php" class="nav__link">Contact us</a>
                    </li>
                    <li class="nav__item">
                        <a href="donation.php" class="nav__link donate">DONATE</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x' ></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button"></i>

                <div class="nav__shop" id="cart-shop">
                    <i class='bx bx-shopping-bag cartBtn' id=""></i>
                </div>
                
                <!-- Profile/login button -->
                <?php 
                if(isset($_SESSION["authentication"])){
                    if($_SESSION["authentication"] == true){
                        $path = 'userimage/' . $_SESSION['userimage'];
                ?>
                        <a href='logout.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom' data-html='true' title='<u><?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; ?></u>'>
                            <img src="<?php echo $path ?>" alt="">
                        </a>
                <?php }elseif($_SESSION["authentication"] == false){ ?>
                        <a href='login.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom' data-html='true' title='<u>Login</u>'>
                            <i class='bx bx-log-in-circle'></i>
                        </a>
                <?php } }else{ ?>
                        <a href='login.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom' data-html='true' title='<u>Login</u>'>
                            <i class='bx bx-log-in-circle'></i>
                        </a> 
                <?php
                }?>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt' ></i>
                </div>
            </div>  
        </nav>
    </header>

    <!--==================== CART ====================-->
    <div class="cart" id="cart">
        
        <i class='bx bx-x cart__close' id="cart-close"  onclick='window.location.reload(true);'></i>

        <h2 class="cart__title-center">My Cart</h2>

        <div class="cart__container" id="table">

            <?php if($_SESSION["authentication"] == true){ ?>                       

                    <div id="retrieveCart"></div>

            <?php } elseif($_SESSION["authentication"] == false){ ?>

                    <p>Please <u><a href="login.php" class="cart__access">login</a></u> to access cart!</p>
                    
            <?php } ?>         
        
        </div>

        <div class="cart__prices">

            <?php if($_SESSION["authentication"] == true){ ?>
            
                <span class="cart__prices-item">Total price: </span>
                <div id="retrieveTotal"></div>

            <?php } ?>  
            
        </div>
            
    </div>
    <!-- END OF CART -->
    <!-- END OF HEADER -->
    
    <!--========================== MAIN ==========================-->
    <main class="main">
        <!-- PARALLAX SCROLL -->
        <section class="keyart" id="nonparallax"></section>
        <section class="keyart" id="parallax">
            <div class="keyart_layer parallax" id="keyart-0" data-speed="2"></div>		<!-- 00.0 -->
            <div class="keyart_layer parallax" id="keyart-1" data-speed="5"></div>	<!-- 12.5 -->
            <div class="keyart_layer parallax" id="keyart-2" data-speed="11"></div>		<!-- 25.0 -->
            <div class="keyart_layer parallax" id="keyart-3" data-speed="16"></div>	<!-- 37.5 -->
            <div class="keyart_layer parallax" id="keyart-4" data-speed="26"></div>		<!-- 50.0 -->
            <div class="keyart_layer parallax" id="keyart-5" data-speed="36"></div>	<!-- 62.5 -->
            <div class="keyart_layer parallax" id="keyart-6" data-speed="49"></div>		<!-- 75.0 -->
            <div class="keyart_layer" id="keyart-scrim"></div>
            <div class="keyart_layer parallax" id="keyart-7" data-speed="69"></div>		<!-- 87.5 -->
            <div class="keyart_layer" id="keyart-8" data-speed="100"></div>		<!-- 100. -->
        </section>  
        <!-- END OF PARALLAX SCROLL --> 

        <!--================== VALUES ==================-->
        <section class="values_container">
            <div class="values section bd-container" id="values">
                <div class="section-subcontainer">
                    <h2 class="section-title valuess__title intro-text">OUR VALUES</h2>
                    <div class="section-subtitle">We work together, we listen, we advise</div>
                    <hr>
                </div>

                <div class="values__container  bd-grid">
                    <div class="values__content">
                        <img src="img/kind.png" class="values__img"></img>
                        <h3 class="values__title">Kind</h3>
                        <p class="values__description">Practising kindness is our most important values. It has the potential to make the world a happier place.</p>
                        <!-- button -->
                        <div class="svg-wrapper">
                            <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                                <rect id="shape" height="40" width="150" />
                                <div id="text">
                                <a href="aboutus.php"><span class="spot"></span>Learn More</a>
                                </div>
                            </svg>
                        </div>
                    </div>

                    <div class="values__content">
                        <img src="img/ethical.png" class="values__img"></img>
                        <h3 class="values__title">Ethical</h3>
                        <p class="values__description">We work to create a strong ethical culture motivating everyone to speak and act with honesty and integrity.</p>
                        <!-- button -->
                        <div class="svg-wrapper">
                            <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                                <rect id="shape" height="40" width="150" />
                                <div id="text">
                                <a href="aboutus.php"><span class="spot"></span>Learn More</a>
                                </div>
                            </svg>
                        </div>
                    </div>

                    <div class="values__content">
                        <img src="img/fun.png" class="values__img"></img>
                        <h3 class="values__title">Fun</h3>
                        <p class="values__description">Fun is a great way to achieve better collaboration and It's easier to collaborate with people you enjoy working with.</p>
                        <!-- button -->
                        <div class="svg-wrapper">
                            <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                                <rect id="shape" height="40" width="150" />
                                <div id="text">
                                <a href="aboutus.php"><span class="spot"></span>Learn More</a>
                                </div>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- END OF VALUES -->

        <!--==================== DONATION ====================-->
        <section class="donation section" id="donation">
            <div class="donation__container">
                <p>Thanks for your heart.</p>
                <h2>Contribute on my charity work by your donation.<br>Thanks for your heart.</h2>
                
                <div class="button__container">
                    <a href="#" class="button">DONATION</a>
                </div>
            </div>
        </section>
        <!-- END OF DONATION -->

        <!--==================== PROJECTS ====================-->
        <section class="projects__container">
            <div class="projects section container" id="projects">
                <div class="section-subcontainer">
                    <h2 class="section-title project__title intro-text">OUR PROJECTS</h2>
                    <div class="section-projects-subtitle">We work hard to build a better world</div>
                    <hr>
                </div>

                <div class="projects__container grid">
                    <article class="projects__card">
                        <!--<span class="featured__tag">NEW</span>-->

                        <img src="img/Campaigns.png" alt="" class="projects__img">
                        <div class="projects__data">
                            <span class="projects__category">Campaigns</span>
                            <h2 class="projects__title">Sensitisation and Awareness Campaigns</h2>
                        </div>
                        <div class="projects__subdata">
                            <span class="upload__date">August 14, 2021</span>
                            <span class="upload__person">by Phanesh</span>
                        </div>
                        <a href="productcart.php?action=productcart&QStrProdID=1" class="button projects__button">
                            READ MORE
                        </a>
                    </article>

                    <article class="projects__card">
                        <!--<span class="featured__tag">NEW</span>-->

                        <img src="img/mission.jpeg" alt="" class="projects__img">
                        <div class="projects__data">
                            <span class="projects__category">Donations</span>
                            <h2 class="projects__title">Clothes Donation - Chain Of Events</h2>
                        </div>
                        <div class="projects__subdata">
                            <span class="upload__date">August 14, 2021</span>
                            <span class="upload__person">by Phanesh</span>
                        </div>
                        <a href="productcart.php?action=productcart&QStrProdID=2" class="button projects__button">
                            READ MORE
                        </a>
                    </article>

                    <article class="projects__card">
                        <!--<span class="featured__tag">NEW</span>-->

                        <img src="img/Christmas.png" alt="" class="projects__img">
                        <div class="projects__data">
                            <span class="projects__category">Recycling</span>
                            <h2 class="projects__title">Green Christmas Event Promotion</h2>
                        </div>
                        <div class="projects__subdata">
                            <span class="upload__date">August 14, 2021</span>
                            <span class="upload__person">by Phanesh</span>
                        </div>
                        <a href="productcart.php?action=productcart&QStrProdID=3" class="button projects__button">
                            READ MORE
                        </a>
                    </article>
                </div>
            </div>
        </section>
        <!-- END OF PROJECTS -->

        <!--==================== VOLUNTEER ====================-->
        <section class="volunteer section" id="volunteer">
            <div class="volunteer__container">
                <h2>Become a Volunteer</h2>
                <p>Join us for a better life and beautiful future</p>
                <div class="button__container">
                    <a href="#" class="button">JOIN US</a>
                </div>
            </div>
        </section>
        <!-- END OF VOLUNTEER -->
        
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
    </main>
    <!-- END OF MAIN -->

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>
    
    <!--============= SCROLL REVEAL JS =============-->
    <script src="js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="js/main.js"></script>
    <script src="js/productcart.js"></script>
    
    <!--=============== PARALLAX JS ===============-->
    <script src="js/script.js"></script>

    <!--=============== TOOLTIP ===============-->
    <script>
        $(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <!--============= SCROLL DOWN =============-->
    <script>
        function exploreScroll() {
            window.scrollTo(0, 660);
        }
    </script>
</body>
</html>
