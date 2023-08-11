<?php
	
	session_start();
	include "database.php";
	
	if(!isset($_SESSION['user']))
	{
		header('location:404.php');
	}
	
	if(isset($_POST['submit']))
	{

		$pass=$_POST['opass'];
		$uname=$_SESSION['user'];
		$newpass=$_POST['npass'];
		
		$result=mysqli_query($con,"SELECT username,password FROM user WHERE username='$uname' AND password='$pass'");
		$row=mysqli_fetch_array($result);

		if($row>0)
		{
			$result2=mysqli_query($con,"UPDATE user SET password='$newpass',cpassword='$newpass' WHERE username='$uname'");
			echo 
			"<script type='text/javascript'> 
			
				alert('password changed successfully....');
			
			</script>";	
		}
		else
		{
			echo "<script type='text/javascript'> alert('password is incorrect....'); 
			</script>";
		}
		
	}
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

        <!-- main form css file -->
		<link rel="stylesheet" href="css/myform.css">
		 <!-- fa fa icon css file -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.npass.value; 
                password2 = form.rnpass.value; 
  
                    
                if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    
                    return true; 
                } 
            } 
        </script> 
		
    </head>

    <body>
    <?php
		require_once 'header1.php';
    ?>

<div class="div_main">
		<table align="center" class="regi">
		<tr>
			<form name="add_doctor" action=" " method="post" onSubmit = "return checkPassword(this)">
			<td colspan="2"><h2><b><u>Change Password</u></b></h2></td>
		</tr>

		<tr>
		    <td><label  for="opass"  class="field_name"><b><i class="fa fa-unlock-alt"></i>&nbsp;Old Password :</b></label></td>
			<td><input type="password" name="opass" id="opass" class="textbox" placeholder="Old Password.." tabindex="1"></td>

		</tr>
		
        <tr>
		    <td><label  for="npass"  class="field_name"><b><i class="fa fa-lock"></i>&nbsp;New Password :</b></label></td>
			<td><input type="password" name="npass" id="npass" class="textbox" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{6,15})"  title="Please include at least 1 uppercase character, 1 lowercase character, 1 number and 1 Special Character (at least 6 to 15)." placeholder="Enter New Password.." tabindex="2" required /></td>
		</tr>

        <tr>
		    <td><label  for="rnpass"  class="field_name"><b><i class="fa fa-lock"></i>&nbsp;Re-Enter New Password :</b></label></td>
			<td><input type="password" name="rnpass" id="rnpass" class="textbox" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{6,15})"  title="Please include at least 1 uppercase character, 1 lowercase character, 1 number and 1 Special Character (at least 6 to 15)." placeholder="Re-Enter New Password.." tabindex="3" required /></td>
		</tr>

		<tr align="center">
			<td colspan="2" align="center">
				<button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary" tabindex="4" style="background-color:#00ccff;width:150px;"><i class="fa fa-unlock-alt"></i>&nbsp;Change Password</button>
				<a href="userpanel.php"  style="font-size:15px" tabindex="5"><button type="button" class="btn btn-success " style="width:150px;"><i class="fa fa-dashboard"></i>&nbsp;Go To Dashboard</button></a>
			<td>
			</tr>
		</form>
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
    </body>
</html>