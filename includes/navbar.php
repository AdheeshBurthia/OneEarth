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
            <a href="../index.php" class="nav__logo">
                 <span class="logo__one">One</span>Earth
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="../index.php" <?php if($_SESSION["home"] == true){echo"class='nav__link active-link'";} else {echo"class='nav__link'";}?> >Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="../aboutus.php" <?php if($_SESSION["aboutus"] == true){echo"class='nav__link active-link'";} else {echo"class='nav__link'";}?> >About us</a>
                    </li>
                    <li class="nav__item">
                        <a href="../projects.php" <?php if($_SESSION["projects"] == true){echo"class='nav__link active-link'";} else {echo"class='nav__link'";}?> >Projects</a>
                    </li>
                    <li class="nav__item">
                        <a href="../contactus.php" <?php if($_SESSION["contactus"] == true){echo"class='nav__link active-link'";} else {echo"class='nav__link'";}?> >Contact us</a>
                    </li>
                    <li class="nav__item">
                        <a href="../donate.php"  class="nav__link donate">DONATE</a>
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

                <div id="count"></div>
                
                <?php 
                if(isset($_SESSION["authentication"])){
                    if($_SESSION["authentication"] == true){ 
                        $path = 'userimage/' . $_SESSION['userimage'];
                ?>
                        <a href='logout.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom' data-html='true' title='<u><?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; ?></u>'>
                            <img src="<?php echo $path ?>" alt="">
                        </a>
                <?php }elseif($_SESSION["authentication"] == false){ ?>
                        <a href='../login.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom' data-html='true' title='<u>Login</u>'>
                            <i class='bx bx-log-in-circle'></i>
                        </a>
                <?php } }else{ ?>
                        <a href='../login.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom' data-html='true' title='<u>Login</u>'>
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
        
        <i class='bx bx-x cart__close' id="cart-close"></i>

        <h2 class="cart__title-center">My Cart</h2>

        <div class="cart__container" id="table">

        
        
        </div>

        <div class="cart__prices">
            
            <span class="cart__prices-item">Total price: </span>
            
            <div id="retrieveTotal"></div>
            
            </div>
            
        </div>
    </div>
 

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
</body>
</html>