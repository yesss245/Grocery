<html>
<head>
	<title> Admin Panal(Product)</title>
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
	<div class="col-md-10">
		<div class="container-fluid">
	<h1 class=" text-center">PRODUCTS</h1>
	<div class="row">
		<div class="col-md-10" style="margin-left:px;">&nbsp;
			<td style="padding-top:15px;"><a style="" href="addproduct.php" class="btn btn-primary"><span style="padding-top:5px; padding-bottom: 5px;" class="glyphicon glyphicon-plus">&nbsp;Product</span></a>

			<a href="../index.php" class=" btn btn-warning"><span style="padding-top:5px; padding-bottom: 5px;"class="fa fa-sign-out">&nbsp;LogOut</span></a></td>

			
		</div>	
		</div>
	</div>
	<div style="margin-top:10px;">
		<table align="center" class="table table-striped table-bordered"id="example" class="display" style="width:100%;">
			<thead>
				<th>Product id</th>
				<th>Product Name</th>
				<th>Product Desc</th>
				<th>Weight</th>
				<th>Price</th>
				<th>Re-price</th>
				<th>MFG date</th>
				<th>EXP date</th>
				<th>prod_img</th>
				<th>B_id</th>
				<th>Action</th>
			</thead>
			<tbody style="border:5px;">
				<?php
					include('database.php');
					$qry = "SELECT * FROM product order by brand_id asc";
					$result = mysqli_query($con,$qry);
					if($result)
					{
						while($row = mysqli_fetch_array($result))
						{
							echo "<tr>";
							echo "<td>".$row['productid']."</td>";
							echo "<td>".$row['prod_name']."</td>";
							echo "<td>".$row['prod_desc']."</td>";
							echo "<td>".$row['weight']."</td>";
							echo "<td>".$row['price']."</td>";
							echo "<td>".$row['reprice']."</td>";
							echo "<td>".$row['mfgdate']."</td>";
							echo "<td>".$row['expdate']."</td>";
							echo "<td><img src='upload/".$row['prod_img']."' width='80px' height='50px'></td>";
							echo "<td>".$row['brand_id']."</td>";
?>
							<td style="padding-top:15px;"><a style="" href="editproduct.php?pid=<?php echo $row['productid'];?>" class="btn btn-success" onClick="return confirm('Are you sure you want to Update?')"><span style="padding-top:5px; padding-bottom: 5px;" class="fa fa-pencil-square-o">&nbsp;EDIT</span></a>


							<a href="deleteproduct.php?pid=<?php echo $row['productid'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><span style="padding-top:5px; padding-bottom: 5px;"class="fa fa-trash-o">&nbsp;DELETE</span></a></td>
								  <?php
							echo "</tr>";
					}
				} 
				else
				{
					echo mysqli_error($con);
				}
			?>	
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php include('footer.php'); ?>
	</div>
</div>	</body>
</html>