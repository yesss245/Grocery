<?php
    session_start();
    include 'database.php';
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
        <title>R.K. Food</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
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
        <!-- template main css file -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    </head>
    <body>

    <?php include('header.php'); ?>

        <?php
        $categoryid = $_REQUEST['categoryid'];
        include("database.php");
        $query="SELECT * FROM brand WHERE categoryid = '$categoryid'";
        $mysqli_result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($mysqli_result))
        {
    ?>
                
    <section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <?php 
                        include("database.php");
                        $query="SELECT * FROM category WHERE categoryid = '$categoryid'";
                        $mysqli_result = mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($mysqli_result))
                        {
                    ?>
                    <h2> <?php echo $row["cname"];
                }} ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
    <section id="gallery" class="gallery">
        <div class="container-fluid">
            <?php
                $categoryid = $_REQUEST['categoryid'];
                include("database.php");
                $query="SELECT * FROM brand WHERE categoryid = '$categoryid'";
                $mysqli_result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($mysqli_result))
                {
            ?>
        
        <div class="col-sm-6 col-xs-12">
            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="150ms" data-wow-delay="0ms">
               <b style="padding-left:200px;"></b>    
            <?php
                echo "<td><img src='./upload/".$row['prod_img']."' class='' align='center' width='200px' height='150px'></td>";
            ?>
            <br>   
<br>
         <table border="" width="" class="table table-striped table-bordered" id="example" class="display" >
            <thead align="center">
                <tr>
                    <th > ID:</th>
                    <td><?php echo $row["brand_id"]; ?></td>
                </tr>
                <tr>
                    <th>Name: </th>
                    <td><?php echo $row["brand_name"]; ?></td>
                </tr>
                <tr>
                    <th>Description :</th>
                    <td><?php echo $row["brand_desc"]; ?></td>
                </tr>
                <tr>
                    <th>Category:</th>
                    <td><?php echo $row["categoryid"]; ?></td>
                 </tr>
            </thead>
        </table>
       </figure>
        </div>
             <?php } ?>

        </div>
        </section>
                                 
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
                </section>;
                <?php  include('footer.php');  ?>
            
            

    	<!-- Template Javascript Files
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
    	<!-- template main js -->
    	<script src="js/main.js"></script>
     	</body>
    </html>