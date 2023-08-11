  
  
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

        include("header1.php");  

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
                            <h2>View Products Detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<br>
<!-- <?php print_r($_SESSION['cart']) ?> -->
        <!-- <marquee 
            bgcolor="#d9d9ff" onmouseover="this. stop();" onMouseOut="this.start()" hspace="50" vspace="20" height="30px" style="color:red;" >&nbsp;View Our All Products and its Category and Products Benefits After You Can Purchase Our Products THANK YOU !....
        </marquee>
         -->
        <section id="gallery" class="gallery">
            <form method="POST" action="manage_cart.php">
            <div class="container">


           <?php
                $productid = $_REQUEST['productid'];
                include("database.php");
                $query="SELECT * FROM product WHERE productid = '$productid'";
                $mysqli_result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($mysqli_result))
                {
            ?>       
             
                       <!--/#Page header-->
            <div>
                <div class="row">
                    <div class="col-md-12 bg-primary">   
                    </div>
                </div> 
            </div>
            <section class="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4" align="center"><br><br>
                            <div class="portfolio-single-img" class="col-md-6">
                                <?php
                                    echo "<td><img src='./upload/".$row['prod_img']."' class='img-responsive' align='center' width='200px' height='200px'></td>";
                                ?> 
                            </div>
                        </div> 

                    <div><br><br><br>

                    <div class="" class="col-md-8" valign="middle" >
                               
                        <table border="0" class="table table-striped table-bordered" id="example" class="display" style="width:65%;">
                          
                            <thead align="" style="width:20%;">

                                <tr>
                                    <th style="width:;" > ID:</th>
                                    <th>Name: </th>
                                    <th>Description :</th>
                                    <th>Weight :</th>
                                    <th>Mfg Date :</th>
                                    <th>Exp Date : </th>
                                    <th> Price :</th>
                                    <th> Re- price :</th>
                                    <th> Weight :</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td><?php echo $row["productid"]; ?></td>
                                <td><?php echo $row["prod_name"]; ?></td>
                              <td><?php echo $row["prod_desc"]; ?></td>
                               <td><?php echo $row["weight"]; ?></td>
                               <td><?php echo $row["mfgdate"]; ?></td>
                                <td><?php echo $row["expdate"]; ?></td>
                               <td><span style="text-decoration-line: line-through; ">₹&nbsp;<?php echo $row["price"]; ?></td>
                               <td>₹&nbsp;<?php echo $row["reprice"]; ?></td>
                                <td>₹&nbsp;<?php echo $row["weight"]; ?></td>         

                            </tr>
                          </tbody>

                        </table>
               
                <!-- <end> -->
                <br><br>
                <div class="row mb-20">
                  
                </div>
                     <h style="padding-left:60%;">
                         <button  href="" name="Add_To_Cart" type="submit"  class="btn btn-warning" ><span class="fa fa-cart-plus"></span> Add to cart</button>
                         <input type="hidden" name="productid" value="<?php echo $row['productid'];?>"> 
                         <input type="hidden" name="prod_name" value="<?php echo $row['prod_name'];?>"> 
                         <input type="hidden" name="prod_desc" value="<?php echo $row['prod_desc'];?>"> 
                         <input type="hidden" name="price" value="<?php echo $row['price'];?>"> 
                         <input type="hidden" name="reprice" value="<?php echo $row['reprice'];?>"> 
                         <input type="hidden" name="prod_img" value="<?php echo $row['prod_img'];?>"> 
                     </h>
                </div >  
                </div>
            </div>
                
            </section>
            <?php
        }
            ?>
            <br>
            <div class="col-md-12 bg-primary">   </div>
</section>
</form>

 
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