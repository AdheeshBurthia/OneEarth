<?php
    session_start();
    $_SESSION["home"] =false;
    $_SESSION["aboutus"] =false;
    $_SESSION["contactus"] =true;
    $_SESSION["projects"] =false;
    require 'includes/navbar.php';
    
    
    
    
    
     include 'includes/conn.php'; 
	$dbconn= new DBConn();


  // code for pagination
    
  // taking use input
  //making pagination more dynamic
  $page=isset($_GET['page'])? (int)$_GET['page']:1;
  $perpage=isset($_GET['per-page']) && $_GET['per-page']<=50 ? (int)$_GET['per-page']:6;
  $start= ($page > 1) ? ($page * $perpage) - $perpage : 0;


  // // calculate number of rows in database
  $dbconn->query("SELECT COUNT(*) FROM tblproducts");
  $dbRows= $dbconn->resultset();
  foreach($dbRows[0] as $count=>$result ){
  }
  $numberofpages=ceil($result/$perpage);

  #call via function to verify if can access data
  $homepageProducts = new product();
  $listproducts= $homepageProducts->homepageProducts($dbconn,$start,$perpage);




        class product{
            public function homepageProducts($dbconn,$page,$perpage){
              $dbconn->query("SELECT * FROM tblproducts LIMIT {$page},{$perpage}");
              $dbRows= $dbconn->resultset();
              return $dbRows;
          }
        }

        $product = new product();
        $listUsers= $product->homepageProducts($dbconn,$page,$perpage);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>SHOP | OneEarth</title>

   <!--Bootstrap core CSS -->
  <link href="shop/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!--Additional CSS Files -->
  <link rel="stylesheet" href="shop/assets/css/fontawesome.css">
  <link rel="stylesheet" href="shop/assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="shop/assets/css/owl.css">

   <!--Bootstrap core JavaScript -->
  <script src="shop/vendor/jquery/jquery.min.js"></script>
  <script src="shop/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!--Additional Scripts -->
  <script src="shop/assets/js/custom.js"></script>
  <script src="shop/assets/js/owl.js"></script>
  <script src="shop/assets/js/slick.js"></script>
  <script src="shop/assets/js/isotope.js"></script>
  <script src="shop/assets/js/accordions.js"></script>



</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- Page Content -->
  <div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Handmade</h4>
            <h2>One Earth Products</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="products">
    <div class="container">
      <div class="row">
        <!--<div class="col-md-12">-->
        <!--  <div class="filters">-->
        <!--    <ul>-->
        <!--      <li class="active" data-filter="*">All Products</li>-->
        <!--      <li data-filter=".des">Featured</li>-->
        <!--      <li data-filter=".dev">Flash Deals</li>-->
        <!--      <li data-filter=".gra">Last Minute</li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--</div>-->

            <?php
                 foreach($listUsers as $row) { 
                    
                    
                    $name1 = $row['productid'];
                    $name = $row['productname'];
                    $des = $row['description'];
                    $price = $row['price'];
                    $photo = $row['photo'];
                    echo"
                    <div class='col-lg-4 col-md-4 all dev'>
                    <div class='product-item'>
                        <a href='#'><img src='shop/product_image/$photo' alt='$photo'></a>
                        <div class='down-content'>
                        <a href='#'><h4>$name</h4></a>
                        <h6>$$price</h6>
                        <p>$des</p> 
                        </div>
                    </div>
                    </div>";
                }
            ?>
        <div class="col-md-12">
          <ul class="pages">
           <?php
                        for($i=1;$i<=$numberofpages;$i++): 
                    ?>
                    <a href="?page=<?php echo $i;?>&per-page=<?php echo $perpage;?>"
                    <?php 
                    if($page===$i){
                        echo 'class="btn btn-primary"';
                    }else{
                        echo 'class="btn border-primary"';
                    }
                    ?>>
                    <?php 
                        echo $i;
                    ?></a>
                    <?php 
                        endfor; 
              ?>
              </ul>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content"> 

              - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>




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
</body>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>
</html>