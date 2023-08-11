<?php
 // echo $_REQUEST['cid'];
 include('database.php');
 $qry="DELETE FROM gallery WHERE g_id=".$_REQUEST['g_id'];
 if(mysqli_query($con,$qry))
 {
 	header("location:gallery.php");
 }
 else
 {
 	echo mysqli_error();
 }
 ?>