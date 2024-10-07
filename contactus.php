<?php
    session_start();
    $_SESSION["home"] =false;
    $_SESSION["aboutus"] =false;
    $_SESSION["contactus"] =true;
    $_SESSION["projects"] =false;
    require 'includes/navbar.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US | OneEarth</title>
    <link rel="StyleSheet" href="css/ContactStylesheet.css"/>
</head>
<body>  
    <div id="smalltext">
        <div id="title" >
            GET IN TOUCH
        </div>
        <div id="subtxt">
            Want to get in touch, we would like to hear from you. Here is how you can reach us :D
        </div>
    </div>
    <!-- top two boxes -->
    <div id="contact">

        <div class="square">
            <img src="../img/phone.png" alt="" width="25%">
            <div class="maintext">
                <p1>Make a call</p1>
            </div>            
            <div class="longtext">
                <p1>For any further queries, please contact us. We would be glad if we can help you...</p1>
            </div> 
            <a href="tel:58261129"  class="btn effect04" data-sm-link-text="Dialing...." ><span>Make a call</span></a>
  

        </div>

        <div class="square">
            <img src="../img/chat.png" alt="" width="25%">
            <div class="maintext">
                <p1>Send a message</p1>
            </div>            
            <div class="longtext">
                <p1>Not much of a chatty person? You may txt us on what's app. We will try to reply fast.</p1>
            </div> 
            <a href="https://api.whatsapp.com/send?phone=58261129"  class="btn effect04" data-sm-link-text="Typing...." ><span>Message</span></a>
  
        </div>

    </div>
      
        <!-- little message on top -->
            <div id="team"> 
                <div id="title">
                Our Team is here to help
                </div>
                <div id="subtxt">
                </div>
            </div>
        
        <!-- top 3 box -->
        <div id="teamcontact">
            <div class="teamsquare">
                        <img src="../img/volunteer.png" alt="" width="25%">
                        <div class="maintext">
                            <p1>Be a volunteer</p1>
                        </div>            
                        <div class="longtext">
                            <p1>Want to help us? Want to help people? Let's change our country together.</p1>
                        </div>
                        <a href="volunteer.php"  class="btn effect04" data-sm-link-text="Join now"  ><span>Volunteer</span></a>
  
            </div>  
            <div class="teamsquare">
                        <img src="../img/donation.png" alt="" width="25%">
                        <div class="maintext">
                            <p1>Make donation</p1>
                        </div>            
                        <div class="longtext">
                            <p1>Want to help? Not have much free time? Please make a donation if possible. </p1>
                        </div>
                <a href="donate.php"  class="btn effect04" data-sm-link-text="Thanks"  ><span>Donate</span></a>
  
            </div>  
            <div class="teamsquare">
                        <img src="../img/buy.png" alt="" width="25%">
                        <div class="maintext">
                            <p1>Visit our shop</p1>
                        </div>            
                        <div class="longtext">
                            <p1>Buy our crafts or sell yours, all money collected will be distributed to people in need.</p1>
                        </div>
                <a href="Under-Construction.php"  class="btn effect04" data-sm-link-text="Lets GO"  ><span>Let's Shop</span></a>
  
            </div>
        </div> 
        <!-- second 3 boxes -->
        <div id="teamcontact">
            <div class="teamsquare">
                        <img src="../img/sponsorship.png" alt="" width="25%">
                        <div class="maintext">
                            <p1>Sponsor Event</p1>
                        </div>            
                        <div class="longtext">
                            <p1>Sponsor our next event. For further details, click on the green button below.</p1>
                        </div>
                        <a href="Sponsor.php" class="btn effect04" data-sm-link-text="Thanks"><span>Sponsor </span></a>
  
            </div>
            <div class="teamsquare">
                        <img src="../img/community.png" alt="" width="25%">
                        <div class="maintext">
                            <p1>Join Us</p1>
                        </div>            
                        <div class="longtext">
                            <p1>Become one of us, and we will do our best to make our country better.</p1>
                        </div> 
                 <a href="JoinCommunity.php" class="btn effect04" data-sm-link-text="Welcome" ><span>Join</span></a>
  
            </div>  
            <div class="teamsquare" id="blank"> 
            </div>
             

    </div> 
    </div>
 


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