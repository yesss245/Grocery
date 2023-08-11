<?php
	 $categoryid=$_POST['ddlcategory'];
	$brand_name=$_POST['brand_name'];
	$brand_desc=$_POST['brand_desc'];
	$prod_img=$_FILES['prod_img']['name'];
	

if(!empty($brand_name) && !empty($brand_desc) && !empty($categoryid) && !empty($prod_img))
	{
		if(move_uploaded_file($_FILES["prod_img"]["tmp_name"],"./upload/".$_FILES["prod_img"]["name"]))
		{
		include('database.php');
		
		$qry="INSERT INTO brand(brand_name,brand_desc,categoryid,prod_img) VALUES ('$brand_name','$brand_desc','$categoryid','$prod_img')";
		if(mysqli_query($con,$qry))
		{
			echo "<script type='text/javascript'> alert('Brand added successfully'); 
							document.location='brand.php';
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