<?php
	session_start();
	
	include "database.php";
	//check if the user is logged in or not		 
	
	
	
	if(isset($_POST['submit']))
	{

		$pass=$_POST['oldpass'];
		$uname=$_SESSION['admin'];
		$newpass=$_POST['newpass'];
		
		$sql = "SELECT username,password FROM admin WHERE username='$uname' AND password='$pass'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		
		if($row>0)
		{
			
			$sql2="UPDATE admin SET password='$newpass',cpassword='$newpass' WHERE username='$uname'";
			if ($con->query($sql2) === TRUE) 
			{
			  
			echo 
				"<script type='text/javascript'> 
					alert('password changed successfully....');
					document.location='index.php';
				</script>";	
		}
		}
		else
		{
			echo "<script type='text/javascript'> alert('password is incorrect....'); 
			document.location='changepassword.php';</script>";
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
        <title>Admin Panel(CP)</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script type="text/javascript">
		function checkPassword(form) { 
                password1 = form.newpass.value; 
                password2 = form.renewpass.value; 
  
                    
                if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. make it better than
                else{ 
                    
                    return true; 
                } 
            } 
		
		function redirect() 
		{
			
			windows.location="index.php";
		}
</script>

</head>
<body>
<div class="body body-s">
		
		<form action="" method="post" name="register" class="sky-form" onSubmit = "return checkPassword(this)" >
			<header><u><b>Change Password</b></u></header>
				<fieldset>	
					<section>
						<label class="input">
							<i class="icon-append icon-unlock-alt"></i>
							<input type="password"id="oldpass" name="oldpass" placeholder="Old Password..." required />
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password"id="newpass" name="newpass" placeholder="New password" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{6,15})"  title="Please include at least 1 uppercase character, 1 lowercase character, 1 number and 1 Special Character (at least 6 to 15)." required />
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password"id="renewpass" name="renewpass" placeholder="Re-Enter Password" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{6,15})"  title="Please include at least 1 uppercase character, 1 lowercase character, 1 number and 1 Special Character (at least 6 to 15)." required />
						</label>
					</section>
			<footer>
				<input type="button" value="Cancel" class="button" id="btnHome" onClick="document.location.href='index.php'" />
				<button type="submit" name="submit" class="button"><span class="fa fa-check ">&nbsp;Submit</button>
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