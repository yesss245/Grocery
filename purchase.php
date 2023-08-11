
<?php 
 // $productid = $_REQUEST['productid'];

session_start();
include('database.php');

if (mysqli_connect_error()) 
{
    echo "<script>
            alert('cannot connect to database');
            window.location.href='mycart.php';

        </script>";
        exit();
}


if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
    if (isset($_POST['purchase'])) 
    {
        $qry="INSERT INTO `order_manager`(`name`, `number`, `address`, `pay_mod`) VALUES ('$_POST[name]','$_POST[number]','$_POST[address]','$_POST[pay_mod]')";

        if (mysqli_query($con,$qry)) 
        {
            $product_id = $_REQUEST['productid'];
            $order_id=mysqli_insert_id($con);
            $qry1="INSERT INTO `user_orders`(`order_id`, `prod_name`, `price`, `quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$qry1);

            if ($stmt) 
            {
                mysqli_stmt_bind_param($stmt,"isii",$order_id,$prod_name,$price,$quantity);
                foreach($_SESSION['cart'] as $key => $values){
                    $prod_name=$values['prod_name'];
                    $price=$values['price'];
                    $quantity=$values['Quantity'];

                    mysqli_stmt_execute($stmt);             
                }
                unset($_SESSION['cart']);
                echo "<script>
                alert('order placed');
                window.location.href='userpanel.php';
                 </script>";


            }
            else{
                echo "<script>
                alert('sql query preapare error');
                window.location.href='mycart.php';
                 </script>";
            }
        }
        else{
            echo "<script>
            alert('sql error');
            window.location.href='mycart.php';
             </script>";
        }
    }
}

?>