<html>
<head>
	<title> Admin Panal(Orders)</title>
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
	<h1 class=" text-center">VIEW ORDERS</h1>
	<div class="row">
		<div class="col-md-10" style="margin-left:30px;">&nbsp;
			<td style="padding-top:15px;">
				<!-- <a style="" href="addcategory.php" class="btn btn-primary"><span style="padding-top:5px; padding-bottom: 5px;" class="glyphicon glyphicon-plus">&nbsp;Ordee</span></a> -->

			<a href="../index.php" class=" btn btn-warning"><span style="padding-top:5px; padding-bottom: 5px;"class="fa fa-sign-out">&nbsp;LogOut</span></a></td>

			
		</div>	
		</div>
	</div>
	<div style="margin-top:10px;">
		<table align="center" class="table table-striped table-bordered"id="example" class="display" style="width:90%;">
			<thead>
				<th>Order id</th>
				<th>Customer Name</th>
				<th>Mobile No</th>
				<th>Address</th>
				<th>Pay_Mod</th>
				<th>Orders</th>
				<th>Action</th>
				
			</thead>
			<tbody>
				<?php
					include('database.php');
					$qry = "SELECT * FROM order_manager";
					$result = mysqli_query($con,$qry);
					
						while($row = mysqli_fetch_array($result))
						{
							echo "<tr>
								 <td>$row[order_id]</td>
								 <td>$row[name]</td>
								 <td>$row[number]</td>
								 <td>$row[address]</td>
								 <td>$row[pay_mod]</td>
								 <td>
								 	<table class='table text-center table-'>
								 	<thead>
										<th>Prod Name</th>
										<th>price</th>
										<th>Quantity</th>
									</thead>
									<tbody>

										";

								$qry1="SELECT * FROM `user_orders` WHERE `order_id`=$row[order_id]";
									$result1 = mysqli_query($con,$qry1);
								while($order_fetch = mysqli_fetch_array($result1)){
									echo "<tr>
										 <td>$order_fetch[prod_name]</td>
										 <td>$order_fetch[price]</td>
										 <td>$order_fetch[Quantity]</td>

										 </tr>";
									}
								echo"
									</tbody>
									</table>
									</td>";
									?>
									<?php

									 echo "<td>
									 		<a class=' btn btn-primary btn-sm ' href='view.php?order_id=".$row['order_id']."'> View &nbsp;
									 		</a>
									 		</td>";?>
						<?php "
								 <tr>";
								}
						?>

			</tbody>
		</table>
	</div>
<div class="row">
	<div class="col-md-12">
		<?php include('footer.php'); ?>
	</div>
</div>	</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>