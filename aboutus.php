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
    <link rel="stylesheet" href="css/aboutus.css">

    <!--============= TITLE ==============--> 
    <title>ABOUTUS | OneEarth</title>
    
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
                        <a href="index.php" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="aboutus.php" class="nav__link active-link">About us</a>
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

                <!-- Alert Message -->
                

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
                    
            <?php }elseif($_SESSION["authentication"] == false){ ?>

                    <p>Please login to access cart!</p>
                    
            <?php } ?>         
        
        </div>

        <div class="cart__prices">
            
            <span class="cart__prices-item">Total price: </span>
            
            <div id="retrieveTotal"></div>
            
        </div>
            
    </div>
    <!-- END OF CART -->
    <!-- END OF HEADER -->
    
    <!--========================== MAIN ==========================-->
    <main class="main">
        <!--================== ABOUT US HEADER ====================-->
        <section class="about__header section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <span class="about__data-subtitle">Discover our team</span>
                    <h1 class="about__data-title">Explore The <br> <b>One Earth Team<br> Story</b></h1>
                    <a href="#" onclick="exploreScroll()" class="button">Explore</a>
                </div>
                
                <div class="about__social">
                    <a href="https://www.facebook.com/" target="_blank" class="about__social-link">
                        <i class="ri-facebook-box-fill social__icon"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="about__social-link">
                        <i class="ri-instagram-fill social__icon"></i>
                    </a>
                    <a href="https://www.twitter.com/" target="_blank" class="about__social-link">
                        <i class="ri-twitter-fill social__icon"></i>
                    </a>
                </div>
            
                <div class="about__info">
                    <div>
                        <span class="about__info-title">You can join us now</span>
                        <a href="#" class="button button--flex button--link about__info-button">
                            More <i class="ri-arrow-right-line button__icon"></i>
                        </a>
                    </div>
                    
                    <div class="about__info-overlay">
                        <img src="img/aboutus3.jpg" alt="" class="about__info-img">
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF ABOUT US HEADER -->
        
        <!--==================== WORK ====================-->
        <section class="work section container" id="work">
            <div class="work__container grid">
                <img src="img/about.png" alt="" class="work__img">

                <div class="work__data">
                    <h2 class="section__title work__title">
                        Who we really are & <br> why choose us
                    </h2>

                    <p class="work__description">
                        One Earth is an organisation of various individuals & groups of different backgrounds to promote sustainability in Mauritius by integrating society, economy, and the environment through activism, awareness, and projects.
                    </p>

                    <div class="work__details">
                        <p class="work__details-description">
                            <i class="ri-checkbox-fill work__details-icon"></i>
                            Encourage public awareness.
                        </p>
                        <p class="work__details-description">
                            <i class="ri-checkbox-fill work__details-icon"></i>
                            Carry out environmental work to promote social welfare.
                        </p>
                        <p class="work__details-description">
                            <i class="ri-checkbox-fill work__details-icon"></i>
                            Provide aid and support after natural disaster.
                        </p>
                        <p class="work__details-description">
                            <i class="ri-checkbox-fill work__details-icon"></i>
                            Bring positive change in our society.
                        </p>
                    </div>

                    <a href="#" class="button-work--link button--flex">
                        Our Work <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- END OF WORK -->
        
        <!--================== VALUES ==================-->
        <section class="values section bd-container" id="values">
            <div class="section-subcontainer">
                <h2 class="section-title valuess__title intro-text">OUR VALUES</h2>
                <div class="section-subtitle">We work together, we listen, we advise</div>
                <hr>
            </div>

            <div class="values__container  bd-grid">
                <div class="values__content">
                    <img src="img/brave.png" class="values__img"></img>
                    <h3 class="values__title">Brave</h3>
                    <p class="values__description">We are not afraid of any inconveniences and we can adapt and overcome huddles and challenges.</p>
                </div>

                <div class="values__content">
                <img src="img/smart.png" class="values__img"></img>
                    <h3 class="values__title">Work Smart</h3>
                    <p class="values__description">Working smartly makes us more creative and efficiently thus we are able to provide and maintain better results.</p>
                </div>

                <div class="values__content">
                <img src="img/committed.png" class="values__img"></img>
                    <h3 class="values__title">Committed</h3>
                    <p class="values__description">We are committed to bring positive change in livelihood of Mauritians and in the protection of natural habitats.</p>
                </div>
                <div class="values__content">
                <img src="img/kind.png" class="values__img"></img>
                    <h3 class="values__title">Kind</h3>
                    <p class="values__description">Practising kindness is our most important values. It has the potential to make the world a happier place.</p>
                </div>

                <div class="values__content">
                <img src="img/ethical.png" class="values__img"></img>
                    <h3 class="values__title">Ethical</h3>
                    <p class="values__description">We work to create a strong ethical culture motivating everyone to speak and act with honesty and integrity.</p>
                </div>

                <div class="values__content">
                <img src="img/fun.png" class="values__img"></img>
                    <h3 class="values__title">Fun</h3>
                    <p class="values__description">Fun is a great way to achieve better collaboration and It's easier to collaborate with people you enjoy working with.</p>
                </div>
            </div>
        </section>
        <!-- END OF VALUES -->

        <!--==================== TEAM ====================-->
        <section class="team section container" id="team">
            <div class="section-subcontainer">
                <h2 class="section-title valuess__title intro-text">MEET OUR TEAM</h2>
                <div class="section-subtitle">We work together, we listen, we advise</div>
                <hr>
            </div>

            <div class="team__container">
                <div class="team__scroll">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="img/member1.jpeg" style="width:300px;height:370px;"/>
                            <div class="inner front">
                            <h3>Phanesh Raghbor</h3>
                            <p>
                                <u>President</u>
                            </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="inner">
                                <h4>
                                    Phanesh is a sustainability analyst working in a private firm. He has previously worked 
                                    as a conservation biologist at the Mauritian Wildlife Foundation and a research assistant 
                                    for the project: 'Fish Aggregating Devices and Coastal Communities' at the University of 
                                    Mauritius. He is a graduate in Marine Environmental Science. He is also involved in research 
                                    in the marine and coastal ecosystems.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team__scroll">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="img/member2.jpeg" style="width:300px;height:370px;"/>
                            <div class="inner front">
                                <h3>Ashley Ruttanah</h3>
                                <p>
                                    <u>Vice-President</u>
                                </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="inner">
                                <h4>
                                    Ashley is a graduate in the field of Marine Environmental Sciences at the University of 
                                    Mauritius and has had a special focus on biofouling in mangrove ecosystems as part of 
                                    his thesis. He has interned at the Competent Authority and the Shipping Division of the 
                                    Ministry of Blue Economy, Marine Resources, Fisheries and Shipping and has worked as 
                                    laboratory analyst at Terra Milling Ltd for six months.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="team__scroll">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="img/member3.jpg" style="width:300px;height:370px;"/>
                            <div class="inner front">
                            <h3>Kashita Allagapen</h3>
                            <p>
                                <u>Secretary</u>
                            </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="inner">
                                <h4>
                                    Kashita is a graduate in Marine Environmental Sciences and has worked on the density and 
                                    diversity of micro phytoplankton and micro zooplankton along the Mauritian coastline, as 
                                    part of her research project. She worked at La Pirogue Hotel in the Quality Assurance 
                                    Department, then worked in an offshore company in the procurement department. She is 
                                    currently employed as Management Support Officer, in the Ministry 
                                    of Labour, Human Resource Development & Training.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team__scroll">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="img/member4.jpeg" style="width:300px;height:370px;"/>
                            <div class="inner front">
                            <h3>Mahalaksmi D. Doodee</h3>
                            <p>
                                <u>Vice-Secretary</u>
                            </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="inner">
                                <h4>
                                    Mahalaksmi is an MPhil/PhD student in the field of biosciences and ocean studies 
                                    at the Univeristy of Mauritius and currently working on marine plant ecophysiology 
                                    with focus on carbon sequestration. She is a graduate in Marine Environmental Sciences 
                                    and previously worked on heavy metal pollution in coastal sediments along the coast 
                                    of Mauritius for her thesis.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team__scroll">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="img/member5.jpeg" style="width:300px;height:370px;"/>
                            <div class="inner front">
                            <h3>Linisha D. Seeruttun</h3>
                            <p>
                                <u>Treasurer</u>
                            </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="inner">
                                <h4>
                                    Linisha is a graduate in Marine Environmental Sciences and has worked on anthropogenic 
                                    marine debris and microplastics in mangrove forests of Mauritius exposed to contrasting 
                                    human activities for her thesis. She has worked as Research Assistant at the University 
                                    of Mauritius, Trainee Marine Biologist at WiseOceans, Marine Educator at Ambre Hotel and 
                                    volunteered for Reef Conservation.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team__scroll">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="img/member6.jpeg" style="width:300px;height:370px;"/>
                            <div class="inner front">
                            <h3>Shakeel Y. Jogee</h3>
                            <p>
                                <u>Exclusive Member</u>
                            </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="inner">
                                <h4>
                                    Shakeel holds a Bachelor degree in Marine Environmental Sciences from the University 
                                    of Mauritius. He is now pursuing his postgraduate studies in the field of coral diseases 
                                    around the islands of the Republic of Mauritius.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="team__scroll">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="img/member7.jpeg" style="width:300px;height:370px;"/>
                            <div class="inner front">
                            <h3>Deepika C. Bhoobun</h3>
                            <p>
                                <u>Exclusive Member</u>
                            </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="inner">
                                <h4>
                                    Deepika is a Master's student in Coastal Engineering at the University of Montpellier. 
                                    She holds a Bachelor degree in Marine Environmental Sciences from the University of 
                                    Mauritius and has worked on marine bacteria for her bachelor dissertation project. She 
                                    has previously worked as a marine educator and on an aquaponics project as well as 
                                    volunteered for Reef Conservation. Her research area is in relation with coastal 
                                    hydro-morphodynamics and numerical modelling.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team__scroll">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="img/member8.jpeg" style="width:300px;height:370px;"/>
                            <div class="inner front">
                            <h3>Julia E. Carpouron</h3>
                            <p>
                                <u>Exclusive Member</u>
                            </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="inner">
                                <h4>
                                    Julia is a graduate in BSc Marine Environmental Sciences and has worked on Mangroves 
                                    of Mauritius and associated benthic fauna. She has also conducted research in the field 
                                    of marine and terrestrial conservation as well as mycology.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team__scroll">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="img/member9.jpeg" style="width:300px;height:370px;"/>
                            <div class="inner front">
                            <h3>Akshay Appadoo</h3>
                            <p>
                                <u>Exclusive Member</u>
                            </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="inner">
                                <h4>
                                    Akshay is a bachelor graduate in the field of Marine environmental Sciences and conducted 
                                    his final year research on the carbon sequestration potential of seagrasses around 
                                    Mauritius. He has also worked on microfungi and on the conservation of marine and 
                                    terrestrial life. He is currently employed as a sustainability analyst.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF TEAM -->

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
    <script src="js/parallax.js"></script>

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

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>
</html>