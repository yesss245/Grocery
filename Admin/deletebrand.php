<?php
 // echo $_REQUEST['cid'];
 include('database.php');
 $qry="DELETE FROM brand WHERE brand_id=".$_REQUEST['bid'];
 if(mysqli_query($con,$qry))
 {
 	header("location:brand.php");
 }
 else
 {
 	echo mysqli_error();
 }
 ?>