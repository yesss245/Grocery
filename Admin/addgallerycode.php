<?php
	$gname=$_POST['gname'];
	$prod_img=$_FILES['prod_img']['name'];
	

if(!empty($gname) && !empty($prod_img))
	{
		if(move_uploaded_file($_FILES["prod_img"]["tmp_name"],"./upload/".$_FILES["prod_img"]["name"]))
		{
		// echo ok;
			include('database.php');
		
		$qry="insert into gallery(gname,prod_img) values ('$gname','$prod_img')";
		if(mysqli_query($con,$qry))
		{
			echo "<script type='text/javascript'> alert('Gallery added successfully'); 
							document.location='gallery.php';
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