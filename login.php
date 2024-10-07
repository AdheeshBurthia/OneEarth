<?php
session_start();

if (isset($_SESSION["authentication"])) {
    if ($_SESSION["authentication"] == true) {
        if ($_SESSION["usertype"] == 0) {
            header('Location:index.php');
        } else if ($_SESSION["usertype"] == 1) {
            header('Location:admin/index.php');
        }
    }
} else {
    header('location:logout.php');
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--=============== CSS ==============-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">

    <title>LOGIN | OneEarth</title>

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

    .powered_by_infinity {
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
</head>

<body>
    <!--==================== SCREEN LOADER ====================-->
    <div class="fullpage-loader">
        <div class="fullpage-loader__logo">
            <img src="img/loader.gif" />
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
                    <i class='bx bx-x'></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button"></i>

                <div class="nav__shop" id="cart-shop">
                    <i class='bx bx-shopping-bag cartBtn' id=""></i>
                </div>

                <?php
                if (isset($_SESSION["authentication"])) {
                    if ($_SESSION["authentication"] == true) {
                        $path = 'assets/userimage/' . $_SESSION['userimage'];
                ?>
                <a href='profile.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom'
                    data-html='true'
                    title='<u><?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; ?></u>'>
                    <img src="<?php echo $path ?>" alt="">
                </a>
                <?php } elseif ($_SESSION["authentication"] == false) { ?>
                <a href='../login.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom'
                    data-html='true' title='<u>Login</u>'>
                    <i class='bx bx-log-in-circle'></i>
                </a>
                <?php }
                } else { ?>
                <a href='../login.php' class='nav__login' id='nav-login' data-toggle='tooltip' data-placement='bottom'
                    data-html='true' title='<u>Login</u>'>
                    <i class='bx bx-log-in-circle'></i>
                </a>
                <?php
                } ?>


                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== CART ====================-->
    <div class="cart" id="cart">

        <i class='bx bx-x cart__close' id="cart-close" onclick='window.location.reload(true);'></i>

        <h2 class="cart__title-center">My Cart</h2>

        <div class="cart__container" id="table">

            <?php if (isset($_SESSION["authentication"])) {
                if ($_SESSION["authentication"] == true) { ?>

            <div id="retrieveCart"></div>

            <?php } elseif ($_SESSION["authentication"] == false) { ?>

            <p>Please login to access cart!</p>

            <?php }
            } else {
                header('location:logout.php')
                ?>

            <?php
            } ?>

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
                <img src="img/login4.svg" alt="" class="form__img3">

                <div class="form__content">
                    <h1 class="form__title">Welcome</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Username</label>
                            <input type="text" class="form__input" id="log_username" name="username"
                                placeholder="Username"
                                value="<?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; ?>">
                            <!-- Response -->
                            <div id="username_response" class="response"></div>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" class="form__input" id="password-1" name="password"
                                placeholder="Password"
                                value="<?php echo (isset($_SESSION['password'])) ? $_SESSION['password'] : ''; ?>">
                            <i id="visibilityBtn"><span class="material-symbols-outlined"
                                    id="icon">visibility</span></i>
                        </div>
                    </div>
                    <div class="form__forgotcontainer"><a href="#" class="form__forgot">Forgot Password?</a></div>

                    <input type="submit" class="form__button" id="btnLogin" value="Login" name="btnLogin">

                    <!-- Response -->
                    <div id="error" class="alertmsg"></div>

                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "<div class='alertmsg'>" . $_SESSION['error'] . "</div>";

                        unset($_SESSION['error']);
                    }
                    ?>

                    <a href="signup.php" class="form__signup">Don't have an account, Sign up now?</a>

                </div>
            </div>

        </div>

    </main>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--=============== SWIPER JS ===============-->
    <script src="js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="js/main.js"></script>
    <script src="js/productcart.js"></script>

    <!--=============== VALIDATION JS ===============-->
    <script src="js/validation.js"></script>

    <!--=============== Tooltip JS ===============-->
    <script>
    $(function() {
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
        if (passwordInput.type === "password") {
            passwordInput.type = "text"
            icon.innerText = "visibility_off"
        } else {
            passwordInput.type = "password"
            icon.innerText = "visibility"
        }
    }
    </script>

</body>

</html>