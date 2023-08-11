<html>
<head>
	<title> Admin Panal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		
<?php include('header.php'); ?>
		
		<?php include('header.php'); 


		include ('sidebar.php');
		?>
	<div class="col-md-10">
		<div class="container">
	<h1 class="page-header text-center">EMPLOYEES</h1>
	<div class="row">
		<div class="col-md-10">
			<a href="addemp.php"  class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add</a>
			<a href="../index.php" class="pull-right btn btn-warning"><span class="glyphicon glyphicon-plus"></span> LogOut</a>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table border="5" class="table table-striped table-bordered">
			<thead style="border: black;">
				<th>first name</th>
				<th>last name</th>
				<th>email</th>
				<th>gender</th>
				<th>birthdate</th>
				<th>contact</th>
				<th>city</th>
				<th>prod_img</th>
				<!-- <th>Action</th> -->
			</thead>
			<tbody style="border: black;">
				<?php
					include('database.php');
					$qry = "select * from user";
					$result = mysqli_query($con,$qry);
					if($result)
					{
						while($row = mysqli_fetch_array($result))
						{
							echo "<tr>";
							echo "<td>".$row['firstname']."</td>";
							echo "<td>".$row['lastname']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['gender']."</td>";
							echo "<td>".$row['birthdate']."</td>";
							echo "<td>".$row['contact']."</td>";
							echo "<td>".$row['city']."</td>";
							// echo "<td><img src='upload/".$row['prod_img']."' width='50px' height='50px'></td>";
						?>
						<td><a href="editemp.php?eid=<?php echo $row['username'];?>" class="btn btn-success" onClick="return confirm('Are you sure you want to Update?')"><span class="fa fa-trash-o">&nbsp;EDIT</span></a>

							<a href="deleteemp.php?eid=<?php echo $row['username'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><span class="fa fa-trash-o">&nbsp;DELETE</span></a></td>
						 <?php
							echo "</tr>";
							?>
							<?php
				}
			} 
		?>
			</tbody>
		</table>
	</div>
</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php include('footer.php'); ?>
	</div>
</div>	</body>
</html>