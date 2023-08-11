<?php

    session_start();
    include('database.php');
    //check if the user is logged in or not

?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
       <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>R.K.Food</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!--  CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
        <!--  main css file -->
        <link rel="stylesheet" href="css/style.css">
        <!-- fa fa icon css file -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    </head>
    
    <body>
    
            
      <?php include 'header.php';  ?>
        
<!-- <--
==================================================
Slider Section Start
================================================== --> -->
 <div class="container-login100" style="background-image: url('upload/log1111.jpg');">
<section id="hero-area" >

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
           
                <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                            <span>ABOUT R.K.FOOD</span><br>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">FRESH FRUITE</b>
                                <b>FRESH FOOD</b>
                                <b>FRESH GRAINS</b>
                            </span>
                        </h1>
                    </section>  
                <!-- cd-intro -->
                <!-- /.slider -->


                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" style="color:#1c1c1c">
                    <b>  R.K.Food symbolizes QUALITY. R.K.Food is India’s Most Emerging & Fastest Growing Grocery Company</b>
                </h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green"data-wow-delay=".9s" href="#works" data-section="#works">
                    <div  class=" fa fa-eye"></div>&nbsp;&nbsp;view products</a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                <h2>
                <b> ABOUT <spam  class="fa fa"></b>
                    </h2>
                <p>
                    <b> We at R.K. Food has an expert know how and a strong belief in providing Supreme Quality Innovative     Products.
                    P.R. medicine has a team of highly ambitious and successful leaders with an expertise in delivering for the society. 
                    They recognize the importance of nurturing relationships that reflect culture of unwavering ethics and mutual respect.
                    Invents, develops, and sells Fresh fruite or fresh food, intended to be used to treat customer, to treat them.</b>
                </p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="600ms">
                <img style="height: 100%; padding-top:5%;padding-left: 5%;" src="./upload/aboutlogo1.png" alt="">
            </div>
        </div>
    </div>
</div>
</section> 

<!-- /#about -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"><b><U>Latest Products</U></b></h1>
            
        </div>
        <div class="row" class="bk">
            <?php
                // include("config.php");
                $query="select * from category";
                $sql = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($sql))
                {
            ?>
                <div class="col-sm-3 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                        <div class="img-wrapper">
                            <?php
                                echo "<td><img src='./upload/".$row['prod_img']."' width='270px' height='220px'></td>";
                            ?>
                        <div class="overlay">
                            <div class="buttons">
                            <?php 
                        echo "<a rel='gallery' class='fancybox' href='single-portfolio1.php?categoryid=".$row['categoryid']."'> "?>

                        <!-- middl ma name aavyu te  -->
                                <?php echo $row['cname'];?> &nbsp;</a>"; ?>
                            </div>
                        </div>
                        </div>
                        <figcaption>
                        <h4 align="center">
                        <a href="#">
                             <?php echo $row['cname']; ?>
                        </a>
                        </h4>
                        
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>

      
    </div>
</section> <!-- #works -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s" style="color:black;"><b>Your Offering...</b></h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                <h5>WE HAVE A RIGHT THINGS TO MAKE OUR COMPANY PROUD</h5>
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-flask-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><B>Media heading</B></h4>
                        <p><B>Strong customer relationships drive sales, sustainability, and growth.” </br>R.K. Food.</B></p>
                    </div>
                </div>
            </div>
                
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="700ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-americanfootball-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><b>Free updates</b></h4>
                        <p><B>Get The Update From Admin For Job And Notice.</B></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1000ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-keypad-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><B>Solid Support</B></h4>
                        <p><B>Get The Faster Responds For Your Job Application and Feedback.</B></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#feature -->


            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms"><B>SO WHAT YOU THINK ?</B></h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">WE'RE HEAR TO HELP AND ANSWER ANY QUESTION YOU MIGHT HAVE.</br>WE LOOK FORWORD TO HEARING FROM YOU</p>
                                <a href="contact.php" class="btn btn-default  btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms"><B><i class="fa fa-phone"></i>Contact Us</B></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
                <?php
                    include('footer.php');
                ?>

            <!-- /#footer -->


    <!-- Javascript Files
    ================================================== -->
    <!-- jquery -->
    <script src="plugins/jQurey/jquery.min.js"></script>
    <!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script> 
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
    <!-- owl carouserl js -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- bootstrap js -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="plugins/wow-js/wow.min.js"></script>
    <!-- slider js -->
    <script src="plugins/slider/slider.js"></script>
    <!-- Fancybox -->
    <script src="plugins/facncybox/jquery.fancybox.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>

    </body>
</html>