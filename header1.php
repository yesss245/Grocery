      
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    

                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="./upload/rklogo3.jpg"  style="height:60px;"alt="prmedicines" class="logo_pr">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>


                <!-- main nav -->

                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="userpanel.php" ><span class="fa fa-home">&nbsp;<b>Home</b></a>
                            </li>
                            <!--  <li>
                                <a href="userpanel2.php" ><span class="fa fa-plus-circle">&nbsp;<b>Products</b></a>
                            </li>
                            -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-file-text">&nbsp;<B>Utilities</B> <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="edit_profile.php"><b>Edit Profile</b></a></li>
                                        <li><a href="changepassword.php">Change Password</a></li>
                                        <li>
                                                <?php
                        include('database.php');
                        $qry = "SELECT * FROM order_manager";
                        $result = mysqli_query($con,$qry);
                        
                            while($row = mysqli_fetch_array($result))
                        {
                                        }?>
                                        <?php
                                                            
                                        // $order_id = $_REQUEST['order_id'];
                                        include("database.php");
                                        $query="SELECT * FROM order_manager";
                                        $mysqli_result = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_array($mysqli_result))
                                        {
                                        
                                            echo "
                                            <a class=' btn btn-primary btn-sm ' href='view.php?order_id=".$row['order_id']."'> View &nbsp;
                                            </a>";
                                            }
                                        
                                            ?>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li style="background-color:#00ccff"><a href="./index.php"><span class="fa fa-sign-in" >&nbsp;<B>Logout</B></a>
                            </li>
                            <li>
                            <li style="background-color:#00fgff">
                                 <?php 
                                        $count=0;
                                        if (isset($_SESSION['cart']))
                                         {
                                            $count=count($_SESSION['cart']);
                                        }

                                    // ?>
                                <a href="mycart.php" >
                                    <h><i class="fa fa-cart-plus" class="btn btn-outline-success" aria-hidden="true">&nbsp;My Cart (<?php echo $count; ?>)</i></B>
                                    
                                </a>
                            </li>
                                
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- /main nav -->

    </div>
</header>