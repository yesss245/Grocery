<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"foods");

if(isset($_POST['submit']))
{
	$uname=trim($_POST['username']);
	$pass=trim($_POST['password']);
	
	$query="SELECT username,password FROM admin WHERE username='$uname' AND password='$pass'";
		$sql=mysqli_query($con,$query);
		$row = mysqli_fetch_array($sql);
		
		$query2="SELECT username,password FROM user WHERE username='$uname' AND password='$pass'";
		$sql2=mysqli_query($con,$query2);
		$row2=mysqli_fetch_array($sql2);
		
		// $query3="SELECT username,password FROM user WHERE username='$uname' AND password='$pass'";
		// $sql3=mysqli_query($con,$query3);
		// $row3=mysqli_fetch_array($sql3);
		
		if($row>0)
		{
			session_start();
			$_SESSION['admin']=$row[0];
			header("location:admin/index.php");
		}
		else if($row2>0)
		{
			session_start();
			$_SESSION['user']=$row2[0];
			header("location:client/userpanel.php");
		
		}
		}
		else
		{
			echo "<script type='text/javascript'> alert('username and password is wrong....'); </script>";
		}


?>