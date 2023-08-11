<?php
	session_start();
	include 'database.php';
	
	
	if(isset($_POST['submit']))
	{
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "grocery";
		
		$wname=$_POST['name'];
		$wemail=$_POST['email'];
		$wmessage=$_POST['message'];
		$wsubject=$_POST['subject'];
		
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql="INSERT INTO mailbox(name, email, subject, message) VALUES ('$wname','$wemail','$wsubject','$wmessage')";
		
		if ($conn->query($sql) === TRUE) 
		{
				 echo '<script language="javascript">';
                echo 'alert("message successfully sent")';
                echo '</script>';
				
		} 
		else 
		{
			echo "<script type='text/javascript'> alert ('mail not send...try again'); 
				document.location='contact.php';
			</script>";
		}
	}
			
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <script type="text/javascript" >

        function myfun()
            {
                var a = document.myform.name.value;
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

        
        <!-- CSS Files
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
        <script>
                function hello(){
                    document.getElementById("print").style.display = "none";
                    window.print();
                }
        </script>
        <style type="text/css">
            #popup {
                visibility: hidden; 
                background-color: red; 
                position: absolute;
                top: 10px;
                z-index: 100; 
                height: 100px;
                width: 300px
            }
        </style>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        
        <?php  include('header.php'); ?>
        

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<div id="popup">
    Record added successfully
</div>
<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><b>Contact Us&nbsp;</b><span class="fa fa-phone"></h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s"><b>
                        We're hear to help and answer any question you might have.</br>We look forword to hearing from you.</b>
                    </p>
                    <div class="contact-form">
                        <form  method="post" name="myform" onsubmit="return myfun()" action="" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="300ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Your Name...." class="form-control" name="name" id="name" maxlength="25"  required> 
								<span id="message" style="color:red;"></span>
                               
							</div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="text" placeholder="Your Email...." 
								pattern="^([\w]*[\w\.]*(?!\.)@gmail.com)"
								title="please enter valid email address"
								class="form-control" name="email"  id="email" required>
								<span id="em" style="color:red;"></span>
							</div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input type="text" placeholder="Subject...." class="form-control" name="subject" id="subject" required>
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <textarea rows="6" placeholder="Message...." class="form-control" name="message" id="message" required></textarea>    
                            </div>
                            
                            <div id="success" class="success">
                                Thank you. The Mailman is on His Way :)
                            </div>
                            
                            <div id="error" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>
							
							<div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit"  name="submit" class="btn btn-default btn-send" onsubmit="return myfun()" value="Send Message">
                               <!--  <button class="btn btn-default btn-send" id="print" onClick="return hello();">Print this page</button> -->
                            </div>
							
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><u>Find Us</u></h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s"><b>
                        Having Trouble To Finds Us ? Here, you can view Where We are... </b> 
                    </p>
                    <div class="map">
                      <iframe width="500" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=500&cp=21.22000327154386~72.85233932035271&lvl=15.53&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
                    </iframe>
             
                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-location-outline"></i><br>
                    <h5>FF 31,Aanddhan Complex <br>Surat,364290<br><br></h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>"RADHA KRUSHNA FOOD" 266,NUTAN PARK, <br>SURAT,364290</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i><br>
                    <h5>RKFOOD001@GMAIL.COM  <br><br>SHRADDHAS59@GMAIL.COM <br></h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <h5>+91 9081805386<br>+91 9724125714 <br><br></h5>
                </div>
            </div>
        </div>
    </div>
</section>  




            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                 <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms"><b>SO WHAT YOU THINK ?</b></h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">WE'RE HEAR TO HELP AND ANSWER ANY QUESTION YOU MIGHT HAVE.</br>
                                WE LOOK FORWORD TO HEARING FROM YOU</p>
                                <a href="contact.php" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms"> <B><i class="fa fa-phone"></i>Contact Us</B></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            
            <?php  include('footer.php');  ?>

            <!-- /#footer -->

	<!-- Template Javascript Files
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
	<!-- template main js -->
	<script src="js/main.js"></script>
 	</body>
</html>

