<?php
	$pid=$_POST['hdnpid'];
	$prod_name=$_POST['prod_name'];
	$prod_desc=$_POST['prod_desc'];
	$weight=$_POST['weight'];
	$brand_id=$_POST['brand_id'];
	$price=$_POST['price'];
	$reprice=$_POST['reprice'];
	$mfgdate=$_POST['mfgdate'];
	$expdate=$_POST['expdate'];
	$prod_img=$_FILES['prod_img']['name'];
	
		// echo ok;
		include('database.php');
		if(!empty($prod_name) && !empty($prod_desc) && !empty($weight) && !empty($brand_id) && !empty($price) && !empty($reprice) && !empty($mfgdate) && !empty($expdate) && !empty($prod_img))
	{
		$qry="UPDATE product SET prod_name='$prod_name',
									 	prod_desc='$prod_desc',
									 	weight='$weight',
										brand_id='$brand_id',
										price='$price',
										reprice='$reprice',
										mfgdate='$mfgdate',
										expdate='$expdate',
										prod_img='$prod_img'
									WHERE productid='$pid'";
		
		if(mysqli_query($con,$qry))
		{
			echo "<script type='text/javascript'> alert('Product Update successfully'); 
							document.location='product.php';
							</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	else 
	{
		echo "please fill the product details ";
	}
?>                                                                                        