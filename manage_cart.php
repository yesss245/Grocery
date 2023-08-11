
<?php 

session_start();


if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
	if (isset($_POST['Add_To_Cart']))
	{
		if (isset($_SESSION['cart'])) 
		{

			$myitems=array_column($_SESSION['cart'],'prod_name');
			if (in_array($_POST['prod_name'],$myitems)) 
			{
				$product_id = $_REQUEST['productid'];
				echo "<script> 
						alert('Item Alredy Added');
						window.location.href='product.php?productid=$product_id';
					</script>";
			}
			else{
				$product_id = $_REQUEST['productid'];
				$count=count($_SESSION['cart']);
				$_SESSION['cart'][$count]=array('productid'=>$_REQUEST['productid'],'prod_img'=>$_POST['prod_img'],'prod_name'=>$_POST['prod_name'],'prod_desc'=>$_POST['prod_desc'],'price'=>$_POST['price'],'reprice'=>$_POST['reprice'],'Quantity'=>1);
				echo "<script> 
							alert('Item Added');
							window.location.href='product.php?productid=$product_id';
						</script>";
				// print_r($_SESSION['cart']);
			}
		}
		else
		{
			$_SESSION['cart'][0]=array('productid'=>$_REQUEST['productid'],'prod_img'=>$_POST['prod_img'],'prod_name'=>$_POST['prod_name'],'prod_desc'=>$_POST['prod_desc'],'price'=>$_POST['price'],'reprice'=>$_POST['reprice'],'Quantity'=>1);
			// print_r($_SESSION['cart']);
			echo "<script> 
						alert('Item Added');
						window.location.href='product.php?productid=$product_id';
					</script>";
		}
	}

	if (isset($_POST['Remove_Item'])) 
	{
		foreach($_SESSION['cart'] as $key => $value)

		{
			 // print_r ($key);
 			if ($value['prod_name']==$_POST['prod_name']) 
 			{
 				unset($_SESSION['cart'][$key]);
 				$_SESSION['cart']=array_values($_SESSION['cart']);

 				echo "<script>
 						alert('Item Remove');
 						window.location.href='mycart.php';
 					</script>";
 			}
		}
	}

	if (isset($_POST['mod_Quantity'])) 
		{
			foreach($_SESSION['cart'] as $key => $value)	
			{
				if ($value['prod_name']==$_POST['prod_name']) 
				{
					$_SESSION['cart'][$key]['Quantity']=$_POST['mod_Quantity'];
					// print_r($_SESSION['cart']);
					header("location:http:mycart.php");
				}
				
			}
		}

}


?>