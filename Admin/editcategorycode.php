<?php

	$cid=$_POST['hdncid'];
	$cname=$_POST['cname'];
	$prod_img=$_FILES['prod_img']['name'];
	
		// echo ok;
		include('database.php');
		if(!empty($cname)  && !empty($prod_img))
	{
		$qry="UPDATE category SET cname='$cname',
									prod_img='$prod_img'
									WHERE categoryid='$cid'";
		
		if(mysqli_query($con,$qry))
		{
			echo "<script type='text/javascript'> alert('Update category successfully'); 
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
		echo "please fill the category details ";
	}
?>                               