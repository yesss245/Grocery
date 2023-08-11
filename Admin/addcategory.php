<html>
<head>
	<title> Admin Panal(Category)</title>
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

		<?php include('header.php'); 


		include ('sidebar.php');
		?>


	<div class="col-md-8"style="padding-left:15%;">
		<table border="1">
	        <div class="">
	            <center><h3 class="modal-title" id="myModalLabel"><b>Add New Category</b></h3></center>
	        </div>
	            <div class="container-fluid">
	                <form method="POST" action="addcategorycode.php" enctype="multipart/form-data">
	                    <div class="form-group" style="margin-top:10px;">
	                    	<div class="row">
	                    		<div class="col-md-12">
	                    			<div class="col-md-3">
		                    			<thead>
		                    				<label class="control-label" style="padding-left:5%;" align=""><h4><b>Category Name</b></h4></label>
		                    			</thead>
		                    		</div>
	                    		</div>
	                    		<div class="col-md-12">
	                    			<div class="col-md-3">
		                    			<thead>
		                    				<div style="padding-left:5%;" align="">
		                    					<input class="form-control" type="text" name="cname" required>
		                    				</div>
		                    			</thead>
		                    		</div>
	                    		</div>
	                    	</div>
	                    	<div class="row">
	                    		<div class="col-md-12">
	                    			<div class="col-md-3">
		                    			<thead>
		                    				<label class="control-label" style="padding-left:5%;" align=""><h4><b>Category Image</b></h4></label>
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

	                    	<div align="center" class="col-md-12">
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