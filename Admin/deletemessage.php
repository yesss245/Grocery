<?php
 // echo $_REQUEST['cid'];
 include('database.php');
 $qry="DELETE FROM mailbox WHERE no=".$_REQUEST['nid'];
 if(mysqli_query($con,$qry))
 {
 	header("location:message.php");
 }
 else
 {
 	echo mysqli_error();
 }
 ?>