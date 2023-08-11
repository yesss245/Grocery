<?php
 // echo $_REQUEST['cid'];
 include('database.php');
 $qry="DELETE FROM category WHERE categoryid=".$_REQUEST['cid'];
 if(mysqli_query($con,$qry))
 {
 	header("location:index.php");
 }
 else
 {
 	echo mysqli_error();
 }
 ?>