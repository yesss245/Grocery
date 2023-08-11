<?php
	session_start();
	include 'database.php';
	
	$uname=$_SESSION['user'];
	
	$result=mysqli_query($con, "SELECT * FROM user WHERE username='$uname'");
	
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['first_name'];
		$lname=$row['last_name'];
		$mail=$row['email'];
			
	}
	
	if(isset($_POST['submit']))
	{
			$first_name=$_POST['fname'];
			$last_name=$_POST['lname'];
			$email=$_POST['dmail'];
			
			
			
			$sql2 = "UPDATE user SET first_name='$first_name',last_name='$last_name',email='$email' WHERE username='$uname'";
				$run_sql = mysqli_query($con,$sql2);
				if($run_sql==TRUE)
				
				{
						echo "<script type='text/javascript'> alert('Profile Updated successfully...')</script>";
						echo "<script>document.location='userpanel.php'</script>";
				}  
				else 
				{
					echo "<script type='text/javascript'> alert('Operation failed...'); </script>";
					echo "<script>document.location='userpanel.php'</script>";
				}
	}
	
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
		<!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
		<meta charset="ISO-8859-1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>R.K Food</title>
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
        <!-- main css file -->
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- main css file -->
		<link rel="stylesheet" href="css/myform.css">
		 
		
    </head>
	<?php
		require_once 'header1.php';
    ?>
    <body><br>
	<div class="div_main">
		<table align="center" class="regi">
		<tr><br>
			<form name="adit_profile" action=" " method="post">
			<td colspan="2"><header><h2><b><u>Edit Profile</u></b></h2></header></td>
		</tr>
		
		<tr>
			<td><label  for="username"  class="field_name"><i class="fa fa-user"></i>&nbsp;&nbsp;User Name :</label></td>
			<td><input type="text" name="username" id="username" value="<?php echo $uname; ?>" class="textbox" readonly></td>
		</tr>
		
		<tr>
			<td><label for="dname" class="field_name"><i class="fa fa-user"></i>&nbsp;&nbsp;Name : </label></td>
			<td>
			<input type="text" name="fname" id="fname" class="flname"  value="<?php echo $fname; ?>" pattern="^[a-zA-Z]{3,25}$" title="first name have character only (A-Z and a-z) and lenght between 3 to 25"  placeholder="First name.." tabindex="1" required />
			<input type="text" name="lname" id="lname" class="flname" value="<?php echo $lname; ?>" pattern="^[a-zA-Z]{3,25}$" title="last name have character only (A-Z and a-z) and length between 3 to 25" min="3" maxlength="25" placeholder="last name.." tabindex="1" required />
			</td>
		</tr>
	
		<tr>
			<td><label  for="dmail" class="field_name"> <i class="fa fa-envelope"></i>&nbsp;&nbsp;Email : </label></td>
			<td><input type="email" name="dmail" id="dmail" class="textbox" value="<?php echo $mail; ?>" placeholder="Email.."
				pattern="^([\w]*[\w\.]*(?!\.)@gmail.com)"
				title="please input valid email address"
			tabindex="3"></td>
		</tr>

		
		<tr align="center">
			<td>
				<button type="submit" class="btn btn-info" value="Submit" name="submit" ><span class="fa fa-user-plus">&nbsp;Edit Profile</span></button>
			</td>
			<td><a href="changepassword.php" class="btn btn-success" ><span class="fa fa-key">&nbsp;Change Password</span></a><td>
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
</html>