<?php

	$g_id=$_POST['hdngid'];
	$gname=$_POST['gname'];
	$prod_img=$_POST['prod_img'];

	
		// echo ok;
		include('database.php');
		if(!empty($gname)  && !empty($prod_img))
	{
		$qry="UPDATE gallery SET gname='$gname',
									prod_img='$prod_img'
									WHERE g_id='$g_id'";
		
		if(mysqli_query($con,$qry))
		{
			header("location:gallery.php");
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	else 
	{
		echo "please fill the gallery details ";
	}
?>                               