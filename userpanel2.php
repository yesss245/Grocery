  
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
          
    <?php 
            include('header1.php');  
        ?>
 
        
  <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>View All Products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <!-- <marquee 
            bgcolor="#d9d9ff" onmouseover="this. stop();" onMouseOut="this.start()" hspace="50" vspace="20" height="30px" style="color:red;" >&nbsp;View Our All Products and its Category and Products Benefits After You Can Purchase Our Products THANK YOU !....
        </marquee>-->

        <section id="gallery" class="gallery">
            <div class="container">
            <?php
                $brand_id = $_REQUEST['brand_id'];
                include("database.php");
                $query="SELECT * FROM product WHERE brand_id = '$brand_id'";
                $sql = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($sql))
                {
            ?>
                <div class="col-sm-6 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                        <div class="img-wrapper" align="center">
                            <?php
                                echo "<td><img src='./upload/".$row['prod_img']."' width='250px' height='250px'></td>";
                            ?>
                            <div class="overlay" align="center"style="padding-right: 5%;" >
                                <div class="buttons" style="margin-right:5%;">
                                   <?php 
                                        echo "<a rel='gallery'  class='fancybox' href='product.php?productid=".$row['productid']."'> ";
                                       ?>
                                        <?php echo $row['prod_name'];?> &nbsp;</a>"; 
                                </div>
                            </div>
                        </div>
                        <figcaption>
                        <h4 align="center" style="margin-right: 5%;">
                        <a href="#">
                             <?php echo $row['prod_name']; ?>
                        </a>
                        </h4>
                        
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>

      
    </div>
</section>
    
 <div>
            
            <?php include('footer.php'); ?>
        </div>
 



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