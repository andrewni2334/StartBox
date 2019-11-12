<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    $style1 = "style='display:none;'";
    $style2 = NULL;
} else {
    // Redirect them to the login page
     $style1 = NULL;
     $style2 = "style='display:none;'";
}   
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-ruNsw1yRec" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"> <a href="index.php"> <img class="center" src="assets/images/logo.png" style="width:150px;height:50px;" alt="" title=""> </a> </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php">
                        
                        Home</a>
                
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="about.php">
                        
                        About Us
                    </a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="contact.php">Contact</a></li>
                </li><li class="nav-item"><a class="nav-link link text-black display-4"  href="login.php" <?php echo $style1;?>>Login</a></li>
                </li><li class="nav-item"><a class="nav-link link text-black display-4"  href="signup.html" <?php echo $style1;?>>Sign Up</a></li>
                 <li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php" <?php echo $style2;?> >Log Out</a></li>
            </ul>
            
        </div>
    </nav>
</section>




   <script>
    var slideIndex = 1;
    showDivs(slideIndex);
    function plusDivs(n) {
    showDivs(slideIndex += n);
     }
    function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1} if (n < 1) {slideIndex = x.length}for
    (i = 0; i < x.length; i++) {x[i].style.display = "none";}
    x[slideIndex-1].style.display = "block"; }
   </script>

<section class="cid-ruNtyUeTOv mbr-fullscreen mbr-parallax-background" id="header2-1">


    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1"><span style="font-weight: normal;">
                    StartBox</span></h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    The one stop shop for all your party planning needs! </p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="login.php">Login</a></div>
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="signup.html">Signup</a></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<div align="center">
    <marquee behavior="alternate" bgcolor="#bb3434" direction="left" height:="" 
    loop="7" scrollamount="1" scrolldelay="1" width="100%">
    <span style="font-size: 20px;color:#FFFFFF">
    HOT SALE NOW! Use Promo Code: WAHOOWA to save $5 on your next Standard Party Package!</span></marquee>
</div>


<section class="features1 cid-ruNBDZ0eEF" id="features1-8">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-gift" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 80px;"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5"><a href="#">Themed Decorations</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Get your monthly box of themed party decorations including cups, games, tablecloths, and much more!
                    </p>
                  <span class="vspacer"></span>
                  <p class="py-3 mbr-fonts-style">
                    <!-- <a href="#">READ MORE » </a> -->
                  </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-smile-face" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 80px;"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5"><a href="#">Customizable packages&nbsp;</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        No matter what type of event one of our amazing packages will cover all your needs! Not finding something to your liking? Customize your very own StartBox to get the party started!
                    </p>
                  <span class="vspacer"></span>
                  <p class="py-3 mbr-fonts-style">
                    <!-- <a href="#">READ MORE » </a> -->
                  </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-delivery" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 80px;"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5"><a href="#">Monthly Subscriptions</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Become a premium member and recieve exclusive discounts and member only benefits in line the our monthly themes.
                    </p>
                  <span class="vspacer"></span>
                  <p class="py-3 mbr-fonts-style">
                    <!-- <a href="#">READ MORE » </a> -->
                  </p>
                </div>
            </div>

            

        </div>

    </div>

</section>

<section class="mbr-section content7 cid-ruNvXuN71m" id="content7-2">
          
    

    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-12">
                <div class="media-container-row">
                    <div class="media-content">
                      
                      <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">What we offer</h2>
                      
                      
                      	
                        <div class="mbr-section-text">
                            <p class="mbr-text align-right mb-0 mbr-fonts-style display-7">Party planning can be a stressful endeavour for anyone taking the challenge of hosting. Our packages are guarenteed to many different styles of events from basic get togethers to a 4th of July banger tailgate. Package themes range from festive holidays to personalized birthday bashes. </br></br>

                            No matter the occasion, StartBoxes come with supplies and entertainment systems for parties of all age ranges. Wether you're planning your childs 5th birthday party or a company picnic Startbox offers games and decorations to provide fun for everyone involved. &nbsp;</p>                           
                        </div>
                      	<span class="vspacer"></span>
                      	<div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="products.php">Purchase Now!</a></div>
                    </div>
                    <div class="mbr-figure" style="width: 75%;">
                     <img src="assets/images/mbr-1-1036x1036.png" alt="" title="">  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features11 cid-ruXpPiazmW" id="features11-19">

    

    

    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure m-auto" style="width: 40%;">
                    <img src="assets/images/development-icon-3335977-1920-736x559.jpg" alt="" title="">
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                        Why Choose Us</h2>
                    <div class="mbr-section-text">
                        
                    </div>

                    <div class="block-content">
                        <div class="card p-3 pr-3">
                            <div class="media">
                                <div class=" align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-like"></span>
                                </div>     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7">Custom Tailored Boxes</h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">
                                  Our service offers a unique opportunity for party planners to build and customize the theme of their party in a one-stop-shop environment</p>
                            </div>
                        </div>

                        <div class="card p-3 pr-3">
                            <div class="media">
                                <div class="align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-home"></span>
                                </div>     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7">Fast 2 day delivery guarenteed</h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">
                                   Plan parties straight from the comfort of your own home without having to go through the hassle of chasing down party supplies around town. Build your perfect party without having to change out of your PJ's!&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>          
</section>



<section class="mbr-section" id="witsec-custom-html-block-1c" data-rv-view="269" style="background-color: rgb(255, 255, 255);">
 
 <div class="witsec-custom-html-container elements-content" style="padding-top: 3rem; padding-bottom: 3rem;">
     
    <div class="mbr-section__container block" style="width: 100%;"></div>
 </div>

</section>



<section class="cid-ruOT0L6rL9" id="footer5-14">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <a href="#">
                
                    
                </div>
            </div>
           <!--  <div class="col-md-9">
                <p class="mbr-text align-right links mbr-fonts-style display-7">
                    <a href="#" class="text-black">ABOUT</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">TERMS</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">CAREERS</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">CONTACT</a>
                </p>
            </div> -->
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <img class="center" src="assets/images/logo.png" style="width:150px;height:50px;" alt="" title="">  
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 <a href="https://webdesignvista.com">StartBox</a> - All Rights Reserved
                    </p>
                </div>
                <!-- <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>