<html>
<head>
    <title> Admin Panal(Brand)</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

     <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="../plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="../plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="../plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="../plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="../plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="../plugins/facncybox/jquery.fancybox.css">
        <!-- main css file -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">

        <?php include('header.php'); ?>
            
            
            <div class="row"style="margin-top:1%;margin-left:3%;">
            <div class="col-md-2 bg-dark"style="padding-left:3%;padding-top:3%;">
                
                <ul class="nav">
                    <li class="nav-item">
                        <a href="index.php" class="text-light">category Details</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="brand.php" class="item-link text-light">brand Details</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="product.php" class="item-link text-light">product Details</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="gallery.php" class="item-link text-light">Gallery Details</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="message.php" class="item-link text-light">View Messages</a>
                    </li>
                </ul>
                 <ul class="nav">
                    <li class="nav-item">
                        <a href="orders.php" class="item-link text-light">View Orders</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="changepassword.php" class="item-link text-light">Change Password</a>
                    </li>
                </ul>
                <!-- <ul class="nav">
                    <li class="nav-item">
                        <a href="editprofile.php" class="item-link text-light">Edit Profile</a>
                    </li>
                </ul> -->
            </div>


    <div class="col-md-8"style="padding-left:15%;">
        <table border="1">
            <div class="">
                <center><h3 class="modal-title" id="myModalLabel"><b>Add New Brand</b></h3></center>
            </div>
                <div class="container-fluid">
                    <form method="POST" action="addbrandcode.php" enctype="multipart/form-data">
                        <div class="form-group" style="margin-top:10px;">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <thead>
                                            <label class="control-label" style="padding-left:5%;" align=""><h4><b>Category Id</b></h4></label>
                                        </thead>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3" class="dropdown-menu">
                                        <thead>
                                            <div style="padding-left:5%;" align="">
                                                <select name="ddlcategory"class="form-control">
                                                    <?php   
                                                        include('database.php');
                                                        $qry = "SELECT * FROM category";
                                                        $result = mysqli_query($con,$qry);
                                                    
                                                        while($row = mysqli_fetch_array($result))
                                                        {
                                                            echo "<option value=".$row["categoryid"].">".$row["categoryid"]."-".$row["cname"]."</option>";
                                                        }
                                                    ?>
                                                </select>   
                                            </div>
                                        </thead>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <thead>
                                            <label class="control-label" style="padding-left:5%;" align=""><h4><b>Brand Name</b></h4></label>
                                        </thead>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <thead>
                                            <div style="padding-left:5%;" align="">
                                                <input class="form-control" type="text" name="brand_name" required>
                                            </div>
                                        </thead>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <thead>
                                            <label class="control-label" style="padding-left:5%;" align=""><h4><b>Brand Desc</b></h4></label>
                                        </thead>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <thead>
                                            <div style="padding-left:5%;" align="">
                                                <input class="form-control" type="text" name="brand_desc" required>
                                            </div>
                                        </thead>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <thead>
                                            <label class="control-label" style="padding-left:5%;" align=""><h4><b>Brand Image</b></h4></label>
                                        </thead>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <thead>
                                            <div style="padding-left:5%;" align="">
                                                <input class="form-control" type="file" name="prod_img" required>
                                            </div>
                                        </thead>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div align="center" class="col-md-12" style="margin-bottom:2%; padding-bottom:2%;">
                                <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Add</button>
                                <button id="btnHome" onClick="document.location.href='index.php'" type="button" class="btn btn-danger" ><span class="fa fa-close"></span> Close</button>
                            </div>
                    </form> 
                </div> 
        </table>           
    </div>

<div class="row">
    <div class="col-md-12">
        <?php include('footer.php'); ?>
    </div>
</div>
    </body>
</html>