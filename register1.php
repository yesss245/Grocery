
<?php

include_once 'database.php';

if(isset($_POST['submit']))
{
    $uname=trim($_POST['username']);
    $pass=trim($_POST['password']);
    
    $query="SELECT username,password FROM admin WHERE username='$uname' AND password='$pass'";
        $sql=mysqli_query($con,$query);
        $row = mysqli_fetch_array($sql);
        
        $query2="SELECT username,password FROM user WHERE username='$uname' AND password='$pass'";
        $sql2=mysqli_query($con,$query2);
        $row2=mysqli_fetch_array($sql2);
        
        
        if($row>0)
        {
            session_start();
            $_SESSION['admin']=$row[0];
            header("location:./Admin/index.php");
        }
        else if($row2>0)
        {
            session_start();
            $_SESSION['user']=$row2[0];
            header("location:userpanel.php");
        
        }
        
        else
        {
            echo "
            <script type='text/javascript'> 
                alert('Please enter valid username and password')
            </script>";
        }
}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Login_v3/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v3/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v3/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v3/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v3/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v3/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v3/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v3/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v3/css/util.css">
    <link rel="stylesheet" type="text/css" href="Login_v3/css/main.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">


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

        <!--custom style-->
  <style type="text/css">
    .err-msg{
      color:red;
    }
    
  </style>
</head>
<body>
    <?php

        include('validation-script.php');
    ?>

<div>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('upload/bg-01.jpg');">
            <div class="wrap-login100">
            <p class="text-success text-center"><?php echo $valid; ?></p> 
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                    <span class="login100-form-logo">
                        <img src="./upload/avatar.png" alt="Avatar" class="avatar" style="height:225px;width:225px">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">&nbsp;&nbsp;&nbsp;
                        <input name="username"  class="input100" value="<?php echo $set_username;?>" type="text" placeholder="Username" required /> 
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        <p class="err-msg">
                    
                            <?php if($unameErr!=1){ echo $unameErr; }?>
                        
                        </p>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">&nbsp;&nbsp;&nbsp;
                        <input name="first_name" id="uname" class="input100" value="<?php echo $set_firstName;?>" type="text" placeholder="First Name" required /> 
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        <p class="err-msg">
                    
                            <?php if($fnameErr!=1){ echo $fnameErr; }?>
                        
                        </p>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">&nbsp;&nbsp;&nbsp;
                        <input name="last_name"  class="input100" value="<?php echo $set_lastName;?>" type="text" placeholder="Last Name" required /> 
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        <p class="err-msg">
                    
                            <?php if($lnameErr!=1){ echo $lnameErr; } ?>                        
                        </p>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">&nbsp;&nbsp;&nbsp;
                        <input name="email"class="input100" value="<?php echo $set_email;?>" type="text" placeholder="Email" required /> 
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        <p class="err-msg">
                    
                             <?php if($emailErr!=1){ echo $emailErr; } ?>
                        </p>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">&nbsp;&nbsp;&nbsp;
                        <input name="password" class="input100" type="password" placeholder="Password" required /> 
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        <p class="err-msg">
                    
                            <?php if($passErr!=1){ echo $passErr; } ?>
                        
                        </p>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">&nbsp;&nbsp;&nbsp;
                        <input name="cpassword"class="input100" type="password" placeholder="C-Password" required /> 
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        <p class="err-msg">
                    
                             <?php if($cpassErr!=1){ echo $cpassErr; } ?>
                        
                        </p>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" name="submit" value="submit" class="login100-form-btn"> &nbsp;&nbsp;

                        <button class="login100-form-btn" value="login"><a  href="index.php" style="color:black">Cancel</a></button>
                    </div>

                    <div class="text-center p-t-30">
                        <a class="txt1" href="forgetpassword.php">
                            <span class="fa fa-unlock-alt">&nbsp;&nbsp;Forgot Password?
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="txt1" href="login.php">
                            <span class="fa fa-handshake-o">&nbsp;&nbsp;Login Here !
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

    
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




