<?php
	session_start();
	include 'database.php';
	if(!isset($_SESSION['admin']))
	{
		header('404.php');
	}
	
	$username=$_SESSION['admin'];
	
	$result=mysqli_query($con, "SELECT * FROM admin WHERE username='$username'");
	
	while($row=mysqli_fetch_array($result))
	{
		
		$password=$row['password'];
		$cpassword=$row['cpassword'];
		$email=$row['email'];
		}
	
	if(isset($_POST['submit']))
	{
		
		$password=$row['password'];
		$cpassword=$row['cpassword'];
		$email=$row['email'];
			
			
			
			$sql2 ="UPDATE admin SET password='$password',cpassword='$cpassword',email='$email'WHERE username='$username'";
				$run_sql = mysqli_query($con,$sql2);
				if($run_sql==TRUE)
				
				{
						echo "<script type='text/javascript'> alert('Profile Updated successfully...')</script>";
						echo "<script>document.location='index.php'</script>";
				}  
				else 
				{
					echo "<script type='text/javascript'> alert('Operation failed...'); </script>";
					echo "<script>document.location='editprofile.php'</script>";
				}
	}
	
?>
<!DOCTYPE html> 
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
		
		<!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="../favicon.ico">
        <title>Admin Panel(Profile)</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		
</head>
<body>
<div class="body body-s">
		
		<form action="" method="POST" name="" class="sky-form" >
			<header><u><b>Edit Profile</b></u></header>
				<fieldset>	
					<section>
						<label class="input">
							<i class="icon-append icon-unlock-alt"></i>

							<input type="text"id="username" name="username" value="<?php  echo $username; ?>"  required />
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="text"id="password" value="<?php echo $password ?>" name="password" placeholder="" required />
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="text"id="cpassword" name="cpassword" value="<?php echo $cpassword ?>" required />
						</label>
					</section>
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="text"id="email" name="email" value="<?php echo $email ?>" required />
						</label>
					</section>
			<footer>
				<span ><input type="button" value="Cancel" class="button" id="btnHome" onClick="document.location.href='index.php'" class="fa fa-times "></span> 
				<button type="submit" name="submit" class="button">&nbsp;Edit Profile</button>
				<a style="padding-left: 40px;" href="viewprofile.php"> View Profile</a>
			</footer>
			
			
		</form>	
</div>
</body>
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
</html>