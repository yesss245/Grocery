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
<!-- <script type="text/javascript">

function validation()
	{
		var user= document.getElementById("username").value;
		
		if(username=="")
		{
			document.getElementById("un").innerHTML="This field is required...";
			document.getElementById("username").focus();
			return false;
		}
		else
		{
			return true;
		}
		
		var passw = document.getElementById("password").value;
		
		if(name=="")
		{
			document.getElementById("pass").innerHTML="This field is required...";
			document.getElementById("password").focus();
			return false;
		}		
		else
		{
			return true;
		}
	}
	
</script> -->



<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<!-- validation -->
<!-- <script>
			function myfun()
			{
				var a = document.myform.uname.value;
				var b = document.myform.pass.value;
				if(a=="")
				{
					document.getElementById("message").innerHTML="* username is required";
					return false;	
				}
				if(a.replace(/\s/g,"").length <= 0)
				{
					document.getElementById("message").innerHTML="* whitespace are not allowed";
					return false;
				}
				if(a.indexOf('@')<=0)
				{
					document.getElementById("message").innerHTML="* Invalid @ position";
					return false;
				}
				if((a.charAt(a.length-4)!='.') && (a.charAt(a.length-3)!='.'))
				{
					document.getElementById("message").innerHTML="* Invalid . position";
					return false;
				}
				if(b=="")
				{
					document.getElementById("password").innerHTML="* Password is required";
					return false;	
				}
				if(b.replace(/\s/g,"").length <= 0)
				{
					document.getElementById("password").innerHTML="* whitespace are not allowed";
					return false;
				}
				if(b.length < 8)
				{
					document.getElementById("password").innerHTML="* Password length must be greater then 8 characters";
					return false;	
				}
				if(b.length > 15)
				{
					document.getElementById("password").innerHTML="* Password length must be smaller then 10 characters";
					return false;	
				}
			}
	</script>
 -->
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

        <style type="text/css">
   .registration-form{
      background: #f7f7f7;
      padding: 20px;
      border: 1px solid orange;
      margin: 50px 0px;
    }
    .err-msg{
      color:red;
    }
    .registration-form form{
      border: 1px solid #e8e8e8;
      padding: 10px;
      background: #f3f3f3;
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
				<!-- <form class="login100-form validate-form" name="myform" method="post" > -->
					<span class="login100-form-logo">
						<img src="./upload/avatar.png" alt="Avatar" class="avatar" style="height:225px;width:225px">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">&nbsp;&nbsp;&nbsp;
						<input name="username" id="username" class="input100"value="<?php echo $set_userName;?>" type="text" placeholder="Username" required /> 
						 <p class="err-msg">
                    
				                    <?php if($unameErr!=1){ echo $unameErr; }?>
				                        
				                </p>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">&nbsp;&nbsp;&nbsp;
						<input name="password" id="pass" class="input100" type="password"  placeholder="Password" required />
					 	<p class="err-msg">
					                
					                <?php if($passErr!=1){ echo $passErr; } ?>

					            </p>						
					            <span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div></br>
					
					<span id="nm" style="color:red;"></span></td>


					<div class="container-login100-form-btn">
						<input type="submit" name="submit" value="submit" class="login100-form-btn"> &nbsp;&nbsp;

						<button class="login100-form-btn" value="login"><a href="index.php" style="color:black">Cancel</a></button>
					</div></br>

					<div class="text-center p-t-30">
						
						<a class="txt1" href="register.php">
							<span class="fa fa-handshake-o">&nbsp;&nbsp;Register Here !
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

	<!--
            ==================================================
            Footer Section Start
            ================================================== -->
            
             <!--   -->

            <!-- /#footer -->

	<!-- login button click event -->





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




