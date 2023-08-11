<?php
 // echo $_REQUEST['cid'];
include('database.php');
 $qry="DELETE FROM product WHERE productid=".$_REQUEST['pid'];
 if(mysqli_query($con,$qry))
 {
 	header("location:product.php");
 }
 else
 {
 	echo mysqli_error();
 }
 ?>