<?php

    $username=$_POST['username'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
  
    
    if(!empty($username) && !empty($first_name) && !empty($last_name) && !empty($email)  && !empty($password)  && !empty($cpassword))
    {
        
       $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con,"grocery");
            include('database.php');
            
            $qry="INSERT INTO user(username,first_name,last_name,email,password,cpassword) VALUES ('$username','$first_name','$last_name','$email','$password','$cpassword')";
            if(mysqli_query($con,$qry))
            {
                echo "Register Successfully";
                header("location:login.php");
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