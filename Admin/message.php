<html>
<head>
	<title> Admin Panal(Visitors)</title>
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
	<h1 class=" text-center">VIEW MESSAGES</h1>
	<div class="row">
		<div class="col-md-10" style="margin-left:30px;">&nbsp;
			<td style="padding-top:15px;">
			<a href="../index.php" class=" btn btn-warning"><span style="padding-top:5px; padding-bottom: 5px;"class="fa fa-sign-out">&nbsp;LogOut</span></a></td>	
			</div>	
		</div>
	</div>
	<div style="margin-top:10px;">
		<table align="center" class="table table-striped table-bordered"id="example" class="display" style="width:90%;">
			<thead>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					include('database.php');
					$qry = "select * from mailbox";
					$result = mysqli_query($con,$qry);
					if($result)
					{
						while($row = mysqli_fetch_array($result))
						{
							echo "<tr>";
							echo "<td>".$row['no']."</td>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['subject']."</td>";
							echo "<td>".$row['message']."</td>";
							?>
							
<td>
							<a href="deletemessage.php?nid=<?php echo $row['no'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><span style="padding-top:5px; padding-bottom: 5px;"class="fa fa-trash-o">&nbsp;DELETE</span></a></td>
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