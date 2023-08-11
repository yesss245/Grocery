<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>R.K. Foods</title>
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


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <?php  include('header.php'); ?>

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Gallery</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
<br>
        <!-- <div style="justify-content:right;padding-right: 30px; align-items: center; display:flex;" class=" row">
                <div  class="col-sm-12 col-xl-8 col-md-6">
                  <div class="widget">
                  <form role="form">
                    <div class="search-box">
                      <input class="form-control" id="searchInput" onkeyup="search()" type="text" placeholder="Search products..."/><button class="search-btn" type="submit"><i class="fa fa-search"></i></button>

                    </div>
                  </form>
                </div>
                  
                </div>
              </div> -->
<!--=============================
=            Gallery            =
==============================-->
<section id="gallery" class="gallery">
    <div class="container">
         <?php
                include('database.php');
                // include("config.php");
                $query="select * from gallery";
                $sql = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($sql))
                {
            ?>
                <div class="col-sm-3 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                        <div class="img-wrapper">
                            <?php
                                echo "<td><img src='./upload/".$row['prod_img']."' width='250px' height='220px'></td>";
                            ?>
                           
                        </div>
                        <figcaption>
                        <h4>
                        <a href="#">
                             <?php echo $row['gname']; ?>
                        </a>
                        </h4>
                        
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>

      
    </div>
     
        </div>
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
            </section>

          
                       
                       <?php
                            
                            include('footer.php');

                            ?>
                   

   
     <script >
                
                const  search = () => {
                  const searchbox = document.getElementById("searchInput").value.toUpperCase();
                  const storeitem = document.getElementById("myUL")
                  const product = document.querySelectorAll(".productt")
                  const pname = storeitem.getElementsByTagName("h4")

                  for(var i=0; i < pname.length; i++){
                    let match = product[i].getElementsByTagName('h4')[0];

                    if (match) {
                      let textvalue = match.textContent || match.innerHTML

                      if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
                        product[i].style.display = "";
                       }else
                       {
                        product[i].style.display = "none";
                       }
                      }                 
                     }
                }

              </script> 
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