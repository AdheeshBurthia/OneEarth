<?php
    session_start();
    require_once 'includes/user.php';
    require_once 'includes/valid.php';
?>

<?php
    $user = new User();
    $user->setEmail($_SESSION["email"]);
    $checkCode = $user->retrieveUseremail();
    
    if($checkCode[0]['userotp'] == 0){
        if(isset($_SESSION["code"])){
            require_once 'userotp.php';
            $user->sendUserotp($_SESSION["code"]);
        }else{
            require_once 'userotp.php';
            $user->sendUserotp($checkCode[0]['userotp']);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <!--=============== GOOGLE ICONS ===============-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!--=============== SWIPER CSS ===============--> 
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/verification.css">
    
    <style>
        /*=============== LOADING SCREEN ===============*/
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
          display: flex;
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
        
        .fullpage-loader--invisible {
          opacity: 0;
        }
        
        /* END LOADER CSS */
    </style>

    <title>VERIFICATION | OneEarth</title>
</head>
<body>    
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="../home.php" class="nav__logo">
                 <span class="logo__one">One</span>Earth
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="../index.php" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="../aboutus.php" class="nav__link">About us</a>
                    </li>
                    <li class="nav__item">
                        <a href="../projects.php" class="nav__link">Projects</a>
                    </li>
                    <li class="nav__item">
                        <a href="../contactus.php" class="nav__link">Contact us</a>
                    </li>
                    <li class="nav__item">
                        <a href="../donation.php" class="nav__link donate">DONATE</a>
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

                
                <?php 
                if(isset($_SESSION["authentication"])){
                    if($_SESSION["authentication"] == true){ 
                        $path = 'assets/userimage/' . $_SESSION['userimage'];
                ?>
                        <a href='profile.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom' data-html='true' title='<u><?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; ?></u>'>
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
        
        <i class='bx bx-x cart__close' id="cart-close"  onclick='window.location.reload(true);'></i>

        <h2 class="cart__title-center">My Cart</h2>

        <div class="cart__container" id="table">

        <?php if(isset($_SESSION["authentication"])){
                if($_SESSION["authentication"] == true){ ?>

                <div id="retrieveCart"></div>
                
        <?php }elseif($_SESSION["authentication"] == false){ ?>
            
                <p>Please login to access cart!</p>

        <?php } }else{ 
                header('location:logout.php')
        ?>    

        <?php
        }?>       
        
        </div>

        <div class="cart__prices">
            
            <span class="cart__prices-item">Total price: </span>
            
            <div id="retrieveTotal"></div>
            
            </div>
            
        </div>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== Login ====================-->
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="../img/verification5.svg" alt="" class="form__img2">

                <form method="POST" class="form__content">
                    <h1 class="form__title1">OTP Verification</h1>
                    
                    <h4>We've sent a verification code to your email - <?php echo $_SESSION['email'];?>.</h4>

                    <div class="form__otp">
                        <input class="otp" id="otp-first" type="number" name="num1" min="0" max="9" step="1" aria-label="first digit" required/>
                        <input class="otp" id="otp-second" type="number" name="num2" min="0" max="9" step="1" aria-label="second digit" required/>
                        <input class="otp" id="otp-third" type="number" name="num3" min="0" max="9" step="1" aria-label="third digit" required/>
                        <input class="otp" id="otp-fourth" type="number" name="num4" min="0" max="9" step="1" aria-label="fourth digit" required/>
                        <input class="otp" id="otp-fifth" type="number" name="num5" min="0" max="9" step="1" aria-label="fifth digit" required/>
                        <input class="otp" id="otp-sixth" type="number" name="num6" min="0" max="9" step="1" aria-label="sixth digit" required/>
                        <input class="otp" id="otp-seventh" type="number" name="num7" min="0" max="9" step="1" aria-label="seventh digit" required/>
                    </div>
                    
                    <div class="form__resend">Didn't receive the otp? <a href="includes/resend_otp.php" class="resend" onclick="return confirm('Resend verification code?')">RESEND OTP</a></div>

                    <input type="submit" class="form__button" value="Submit" name="btnVerify">
                    <?php 
                        if(isset($_SESSION['error'])){
                            echo "<div class='alertmsg'>".$_SESSION['error']."</div>";
        
                            unset($_SESSION['error']);
                        }
                    ?>

                    <a href="login.php" class="form__signup">Back to Login page?</a>
                    
                </form>
            </div>

        </div>

    </main>
    
    

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>

    <!--=============== SWIPER JS ===============-->
    <script src="js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="js/otp.js"></script>
    <script src="js/main.js"></script>
    <script src="js/productcart.js"></script>
    


    <!--=============== Tooltip JS ===============-->
    <script>
        $(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    
    <!--=============== SHOW PASSWORD JS ===============-->
    <script>
        const visibilityBtn = document.getElementById("visibilityBtn")
        visibilityBtn.addEventListener("click", toggleVisibility)
        
        function toggleVisibility() {
            const passwordInput = document.getElementById("password-1")
            const icon = document.getElementById("icon")
            if(passwordInput.type === "password"){
                passwordInput.type = "text"
                icon.innerText = "visibility_off"
            }else{
                passwordInput.type = "password"
                icon.innerText = "visibility"
            }
        }
    </script>
    


</body>
</html>