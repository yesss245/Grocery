    
<?php

    error_reporting(0);

    $username=$_REQUEST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
  
    
    if(!empty($username) && !empty($first_name) && !empty($last_name) && !empty($email)  && !empty($password)  && !empty($cpassword))
    {
        
       $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con,"grocery");
            include('database.php');
            
            $qry="INSERT INTO user(username,first_name,last_name,email,password,cpassword) VALUES ('$username','$first_name','$last_name','$email','$password','$cpassword')";

                if (mysqli_query($con,$qry)) 
                {
                    echo "<script>
                        alert('Register Successfully...')
                        window.location.href='login.php';
                    </script>";
                }
                else{
                    echo mysqli_error($con);
                }

}
                ?>


<?php

include('validation-script.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>R.K.Food</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--bootstrap4 library linked-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  

  <!--custom style-->
  <style type="text/css">
   .registration-form{
      background: #f7f7f7;
      padding: 20px;
      border: 1px solid orange;
      margin: 50px 0px;
    }
    .err-msg{
      color:red;
    }
    .registration-form form{
      border: 1px solid #e8e8e8;
      padding: 10px;
      background: #f3f3f3;
    }
  </style>
</head>
<body>

<div class="container-fluid">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center">REGISTER</h4>
      
            <p class="text-success text-center"><?php echo $valid; ?></p> <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            
             <!--//first name//-->
           <div class="form-group">
            <label for="email">User Name</label>
            <input name="username" type="text" class="form-control" id="username"  placeholder="Enter First Name"  value="<?php echo $set_userName;?>">
                <p class="err-msg">
                    
                    <?php if($unameErr!=1){ echo $unameErr; }?>
                        
                </p>
            </div>

        <!--//first name//-->
            <div class="form-group">
            <label for="email">First Name</label>
            <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="<?php echo $set_firstName;?>">
                <p class="err-msg">
                    
                    <?php if($fnameErr!=1){ echo $fnameErr; }?>
                        
                </p>
            </div>

        <!--//Last name//-->
            <div class="form-group">
            <label for="email">Last Name</label>
            <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" value="<?php echo $set_lastName;?>">
                <p class="err-msg"> 
            
                    <?php if($lnameErr!=1){ echo $lnameErr; } ?>

                </p>
            </div>
        
        <!--// Email//-->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $set_email;?>">

            <p class="err-msg">
    
                <?php if($emailErr!=1){ echo $emailErr; } ?>

            </p>
        </div>
        
        <!--//Password//-->
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control"  placeholder="Enter password" name="password">
            <p class="err-msg">
                
                <?php if($passErr!=1){ echo $passErr; } ?>

            </p>
        </div>

        <!--//Confirm Password//-->
        <div class="form-group">
            <label for="pwd">Confirm Password:</label>  
            <input type="password" class="form-control" placeholder="Enter Confirm password" name="cpassword">
            <p class="err-msg">
                
                <?php if($cpassErr!=1){ echo $cpassErr; } ?>

            </p>
        </div>
    
        <button type="submit" style="margin-left:100px;" class="btn btn-danger" value="Register" name="register">Register</button>
        <a href="login.php">Login here</a>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
  
</div>

</body>
</html>