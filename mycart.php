  
  <?php session_start(); ?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
       <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>R.K.Food(Cart)</title>
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
        <script type="text/javascript">
        
       </script>
    </head>
    <body>
          
    <?php 
            include('header1.php');  
        ?>
 
        
  <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->!
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Checkout</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <marquee 
            bgcolor="#d9d9ff" onmouseover="this. stop();" onMouseOut="this.start()" hspace="50" vspace="20" height="30px" style="color:red;" >&nbsp;View Our All Products and its Category after you payment THANK YOU !....
       </marquee> -->

        <section id="gallery" class="gallery">
            <form method="POST" action="manage_cart.php">
            <div class="container">
          <!--  -->    
             
           <!--/#Page header-->

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-9" valign="middle" >        
                        <table border="0" class="table table-striped table-bordered " id="example" class="display" style="width:100%;">
                            <thead align="" style="width:%;">

                                <tr>
                                    <!-- <th>Product Img</th> -->
                                    <th>Serial No</th>
                                    <th>Product Name: </th>
                                    <th>price:</th>
                                    <th>re-price :</th>
                                    <th>Qantity :</th>
                                    <th>Total :</th>
                                    <th>Action :</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                        // $total=0; 
                                        if (isset($_SESSION['cart'])) 
                                        {
                                            foreach($_SESSION['cart'] as $key => $value)
                                            {
                                            // print_r($value);
                                                $sr=$key+1;
                                                // $total=$total+$value['reprice'];
                                            echo "<tr>
                                                   
                                                    <td>$sr</td>
                                                    <td>$value[prod_name]</td>  
                                                    <td><span style='text-decoration-line: line-through;''>₹&nbsp;$value[price]</td>  
                                                    <td><span class='fa fa-rupee'>&nbsp;$value[reprice]<input type='hidden' class='ireprice' value='$value[reprice]' &nbsp;<span class='fa fa-rupee'></span></td>
                                                    <td>
                                                         <form action='mycart.php' method='POST'>
                                                            <input class='form-control iquantity' name='mod_Quantity' onchange='this.form.submit()' value='$value[Quantity]' type='number'  max='' min='1'/>
                                                            <input type='hidden' name='prod_name' value='$value[prod_name]'>
                                                          </form>
                                                    </td>
                                                    <td class='itotal'>&nbsp;<span class='fa fa-rupee'></td>
                                                    <td>
                                                        <form action='manage_cart.php' method='POST'>
                                                             <button name='Remove_Item' type='' href='' class='btn btn-danger'>Remove<i style='color:red;'> </i></button>
                                                            <input type='hidden' name='prod_name' value='$value[prod_name]'>
                                                        </form>
                                                    </td>
                                                </tr>";
                                            }
                                        }
                                     ?>
                                    
                                      
                           </tbody>
                        </table>
                    </div>
               <div class="col-md-3">
                    <div class="container-fluid">
                        <table class="table table-striped table-bordered" align="left">
                            <thead>
                            <tr align="left">
                                <th> Grand Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total :<b id="gtotal"></b> &nbsp;<span class="fa fa-rupee"></span></td>
                            </tr> 
                        </tbody>
                        </table>

                        <?php   
                            if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                            {
                                

                        ?>
                        <form action="purchase.php" method="POST">
                            <div class="">
                               <div class="form-group">
                                    <label>Full Name</label>
                                    <input name="name" pattern="^[a-zA-Z]{3,25}$" title="first name have character only (A-Z and a-z) and lenght between 3 to 25"  class="form-control"  type="text"  required />
                                  </div>

                                  <div class="form-group">
                                    <label>Phone Number</label>
                                    <input name="number" type="text" class="form-control"pattern="[1-9]{1}[0-9]{9}" title="number must be at least 10 digit and start with 1-9" tabindex="2"  required />
                                  </div>

                                  <div class="form-group">
                                    <label>Adress</label>
                                    <input  name="address" class="form-control"type="text"  required />
                                  </div>  

                                    <input class="form-check-input" type="radio" name="pay_mod" value="COD" <?php if (isset($_POST['pay_mod']) && $_POST['pay_mod'] == 'COD') {echo 'checked="checked"';} ?>>COD

                                  
                                    <label class="form-check-label" for="flexRadioDefault1">(Cash on Dellivery)</label>
                                    </div>
                            </div>
                        
                            <button style="margin-left:5%;" name="purchase" class="btn btn-primary">Make Payment</button>
                            

                        </form>

                        <?php
                    }
                    ?>
                    </div>
                </div>
            </section>
            
            <br>
            <div>
                <div class="row">
                    <div class="col-md-12 bg-primary">   
                    </div>
                </div> 
            </div>          
        </div>
    </section>
</form>

<?php include('footer.php'); ?>

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
            
            <script type="text/javascript">

                var gt=0;
                var ireprice=document.getElementsByClassName('ireprice');
                var iquantity=document.getElementsByClassName('iquantity');
                var itotal=document.getElementsByClassName('itotal');
                var gtotal=document.getElementById('gtotal');

                function subTotal()
                {
                    gt=0;
                    for(i=0; i<ireprice.length;i++)
                    {
                        itotal[i].innerText=(ireprice[i].value)*(iquantity[i].value);
                        gt=gt+(ireprice[i].value)*(iquantity[i].value);
                    }
                    gtotal.innerText=gt;
                }

                subTotal();
            </script>
    </body>
</html>