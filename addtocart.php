

<?php
	// $cid=$_POST['hdncid'];
	$prod_name=$_POST['prod_name'];
	$prod_desc=$_POST['prod_desc'];
	$weight=$_POST['weight'];
	$mfgdate=$_POST['mfgdate'];
	$expdate=$_POST['expdate'];
	$price=$_POST['price'];
	$reprice=$_POST['reprice'];
	$qty=$_POST['qty'];
	$prod_img=$_FILES['prod_img']['name'];
	

if(!empty($prod_name) && !empty($prod_desc)&& !empty($weight)&& !empty($mfgdate)&& !empty($expdate)&& !empty($price)&& !empty($reprice)&& !empty($qty))
	{
		if(move_uploaded_file($_FILES["prod_img"]["tmp_name"],"./upload/".$_FILES["prod_img"]["name"]))
		{
			// echo ok;
				include('database.php');
			// $con=mysqli_connect("localhost","root","");
			// mysqli_select_db($con,"foods");
			$qry="insert into cart(prod_name,prod_desc,weight,mfgdate,expdate,price,reprice,qty,prod_img) values ('$prod_name','$prod_desc','$weight','$mfgdate','$expdate','$price','$reprice','$qty','$prod_img')";
			if(mysqli_query($con,$qry))
				{
					header("location:index.php");
				}
				else
				{
					echo mysqli_error($con);
				}
		}
	
		else
		{
			echo $_FILES["prod_img"]["error"];
		}
	}
	else 
	{
		echo "please fill the category details ";
	}
?>