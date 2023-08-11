<html>
<head>
	<title>Admin Panal(Gellery)</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	 <!-- CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
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
	<div class="col-md-10">
		<?php
			include('database.php');
			$qry = "SELECT * FROM gallery WHERE g_id=".$_REQUEST['g_id'];
			$result = mysqli_query($con,$qry);
			
			$row=mysqli_fetch_assoc($result);
	?>
	<div class="container">
		<div class="">
                <center><h4 class="modal-title" id="myModalLabel">Edit Gallery</h4></center>
            </div>
             <div class="container-fluid">
                    <form method="POST" action="editgallerycode.php">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;"><label class="control-label"><b> Name:</b></label></div>
                            <input type="hidden" name="hdngid" value="<?php echo $row['g_id'];?>">
                           <div class="col-md-9"> <input type="text" class="form-control" value="<?php echo $row['gname']; ?>" name="gname">
                           </div>
                        </div>
<br>
                          <div class="row">
                            <div class="col-md-3" style="margin-top:7px;"><label class="control-label"><b>prod_img</b></label></div>
                           <div class="col-md-9"> <input type="file" class="form-control" name="prod_img" value="<?php echo $row['prod_img']; ?>">
                           </div>
                        </div>
                    </div>
                </div>
             <div align="center" class="col-md-12">
                <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"></span> Close</button>
                </form>
            </div>
</table>
</div>
</form>
</div>
<div class="row">
	<div class="col-md-12">
		<?php include('footer.php'); ?>
	</div>
</div>	</body>
</html>