<?php

	$prod_name=$_POST['prod_name'];
	$prod_desc=$_POST['prod_desc'];
	$weight=$_POST['weight'];
	$brand_id=$_POST['ddlbrand'];
	$price=$_POST['price'];
	$reprice=$_POST['reprice'];
	$mfgdate=$_POST['mfgdate'];
	$expdate=$_POST['expdate'];
	$prod_img=$_FILES["prod_img"]["name"];

	
		// echo ok;
		include('database.php');
		if(!empty($prod_name) && !empty($prod_desc)  && !empty($weight) && !empty($brand_id) && !empty($price) && !empty($reprice) && !empty($mfgdate) && !empty($expdate) && !empty($prod_img))
	{
		if(move_uploaded_file($_FILES["prod_img"]["tmp_name"],"./upload/".$_FILES["prod_img"]["name"]))
		{
  		$qry="Insert into product(prod_name,prod_desc,weight,brand_id,price,reprice,mfgdate,expdate,prod_img)
		values('$prod_name','$prod_desc','$weight','$brand_id','$price','$reprice','$mfgdate','$expdate','$prod_img')";
		// echo $qry;exit;
		if(mysqli_query($con,$qry))
		{
			echo "<script type='text/javascript'> alert('Product added successfully'); 
							document.location='product.php';
							</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}else{echo $_FILES["prod_img"]["error"];}
	}
	else 
	{
		echo "please fill the product details ";
	}
?>                       