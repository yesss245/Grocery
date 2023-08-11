<?php
	$bid=$_POST['hdnbid'];
	$brand_name=$_POST['brand_name'];
	$brand_desc=$_POST['brand_desc'];
	$categoryid=$_POST['categoryid'];
	$prod_img=$_FILES['prod_img']['name'];
	
			// echo ok;
		include('database.php');

		if(!empty($brand_name) && !empty($brand_desc) && !empty($categoryid) && !empty($prod_img))
		{
			$qry="UPDATE brand SET brand_name='$brand_name',
										 brand_desc='$brand_desc',
											categoryid='$categoryid',
											prod_img='$prod_img'
										WHERE brand_id='$bid'";
			
			if(mysqli_query($con,$qry))
			{
				echo "<script type='text/javascript'> alert('Brand Update successfully'); 
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
		echo "please fill the brand details ";
	}
?>                               