<?php  

$con = mysqli_connect("localhost","root","") or die("could not connrct");

mysqli_select_db($con,"grocery") or die("could not connecr database");

?>