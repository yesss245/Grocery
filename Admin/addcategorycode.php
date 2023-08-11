<?php
	// $cid=$_POST['hdncid'];
	$cname=$_POST['cname'];
	$prod_img=$_FILES['prod_img']['name'];
	

if(!empty($cname) && !empty($prod_img))
	{
		if(move_uploaded_file($_FILES["prod_img"]["tmp_name"],"./upload/".$_FILES["prod_img"]["name"]))
		{
		
			include('database.php');
		
		$qry="insert into category(cname,prod_img) values ('$cname','$prod_img')";
		if(mysqli_query($con,$qry))
		{
			echo "<script type='text/javascript'> alert('category added successfully'); 
							document.location='index.php';
							</script>";
			
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