<?php
	
			session_start();
	include 'database.php';
	if(!isset($_SESSION['admin']))
	{
		header('404.php');
	}
	
	$uname=$_SESSION['uname'];
			$qry = "SELECT * FROM admin WHERE username=".$_REQUEST['uname'];
			$result = mysqli_query($con,$qry);
			
			$row=mysqli_fetch_assoc($result);
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
        <title>Admin Panel</title>
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
		
		<form action="" method="POST" name="register" class="sky-form" onSubmit = "return checkPassword(this)" >
			<header><u><b>Edit Profile</b></u></header>
				<fieldset>	
					<section>
						<label class="input">
							<i class="icon-append icon-unlock-alt"></i>

							<input type="text"id="username" name="username" value="<?php  echo $uname; ?>"  required />
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password"id="password" value="<?php echo $password ?>" name="password" placeholder="" required />
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password"id="cpassword" name="cpassword" value="<?php echo $cpassword ?>" required />
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