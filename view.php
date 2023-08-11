 <?php

	session_start();
	include 'database.php';
	//check if the user is logged in or not		 
	
	

?>

<!DOCTYPE html>
<html class="no-js">
    <head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<!-- Basic Page Needs--!
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Client Side(Order)</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
        <!-- main css file -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		

		 
	</head>
    <body id="cashReport">
    	
        <?php
			require_once 'header1.php';						
		?>
	 <br><br><br><br>
		<?php
			                  	$uname=$_SESSION['user'];
	
								$result=mysqli_query($con, "SELECT * FROM user WHERE username='$uname'");
								
								while($row=mysqli_fetch_array($result))
								{
									
									$mail=$row['email'];
									
								}
			            	?> 
		<table align="center" border="" height="100%" width="50%" bgcolor="grey">
			<form>
				<tr>
					<td colspan="8" align="center"><b> 
						<h2>R. K. Foods</h2> </b>
					 	<h5>FF 31,Aanddhan Complex Surat,364290
					  	"PARAM FOODS SPECIALITY ORDERS" 266,nutan nagar, SURAT,364290<br>Te &nbsp;+91 8141896238 ,+91 8141204335 </h5>
					</td>	
				</tr>
				<tr>
					<td colspan="8" align="center" width="100%"><b>INVOICE</b>&nbsp;</td>	
				</tr>
					<td colspan="8"><b> &nbsp;To</b><br>
							<b> &nbsp;Name: </b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" id="username" value="<?php echo $uname; ?>" class="textbox" readonly><br>

							<b>&nbsp;Email</b> </b> &nbsp;:&nbsp;&nbsp;&nbsp;<input type="text" name="mail" id="mail" value="<?php echo $mail; ?>" class="textbox" readonly> </b><br>

							<b>&nbsp;Address</b> &nbsp;:&nbsp;Surat<br>
							<b>&nbsp;Mobile No</b> &nbsp;:&nbsp;9724125714<br>
							
					</td>
				</tr>
			
				</tr>
				<tr>
					<td colspan="8"> <br></td>
				<tr>

				<td colspan="6">
					<table width="100%" border="1">
						<tr>
							<thead style="margin-top: 5px;">
								<th>&nbsp;Serial No</th>
			                    <th>&nbsp;Product Name: </th>
			                    <th>&nbsp;price:</th>
			                    <th>&nbsp;Qantity :</th>
			                    <th>&nbsp;Mod:</th>   
							</thead>
	                		<tbody>
	                                
						        	<td align="center">
						        		
						        		<?php
										$order_id = $_REQUEST['order_id'];
						      			include("database.php");
										$query="SELECT * FROM order_manager WHERE  order_id ='$order_id' ";
						        		$mysqli_result = mysqli_query($con,$query);
						         		while($row = mysqli_fetch_array($mysqli_result))
						          		{
						 			?>
						        		<?php echo $order_id; ?>&nbsp;<span class="fa fa-rupee">&nbsp;
						        	
						        		<?php  
						        			}
						        	
						        ?>
						        	</td>
						        	
	                               	<td>	
	                               	<?php
									  $order_id = $_REQUEST['order_id'];
					        	      include("database.php");
					                  $query ="SELECT * FROM user_orders where order_id='$order_id'";
					                  $sql = mysqli_query($con,$query);
					                  while($row = mysqli_fetch_array($sql))
					                  {
				        			?>	
	                               		&nbsp; </b> &nbsp;&nbsp;<?php echo $row["prod_name"];?><br>
	                               		<?php } ?>
	                               	</td>
	                               	<td>
	                               	<?php
										  $order_id = $_REQUEST['order_id'];
						        	      include("database.php");
						                  $query ="SELECT * FROM user_orders where order_id='$order_id'";
						                  $sql = mysqli_query($con,$query);
						                  while($row = mysqli_fetch_array($sql))
					                  		{
				        				?>
	                               	
	                               		&nbsp; </b> &nbsp;&nbsp;<?php echo $row["price"];?><br>
	                               		<?php } ?>
	                               	</td>
	                               	<td>
	                               		<?php
										  $order_id = $_REQUEST['order_id'];
						        	      include("database.php");
						                  $query ="SELECT * FROM user_orders where order_id='$order_id'";
						                  $sql = mysqli_query($con,$query);
						                  while($row = mysqli_fetch_array($sql))
					                  		{
				        				?>
	                               		&nbsp; </b> &nbsp;&nbsp;<?php echo $row["Quantity"];?></b><br>
									<?php } ?>
	                               	</td>
	                               
	                               	<td style="padding-top:7px;" align="center" colspan="2" rowspan="8" valign="top">
	                               	<?php
									  $order_id = $_REQUEST['order_id'];
					        	      include("database.php");
					                  $query ="SELECT * FROM order_manager where order_id='$order_id'";
					                  $sql = mysqli_query($con,$query);
					                  while($row = mysqli_fetch_array($sql))
					                  {
				        			?>
	                               		&nbsp; </b> &nbsp;&nbsp;<?php echo $row["pay_mod"];?><br>
									<?php } ?>
	                               	</td>
	                            </tbody>
	                        </tr>
	                    </td>
	                    </table>
	                    <tr>
	                    	<td colspan="8"></td>
	                    </tr>
						<tr>
							<td rowspan="7"colspan="3" valign="top"  align="left" width="40%"><b>&nbsp;Companies Bank Details </b><br>
								<b> &nbsp;Name &nbsp;:</b> &nbsp;AXIS BANK<br>
								<b>&nbsp; A/C No &nbsp;:</b> &nbsp;917020048688694<br>
								<b>&nbsp; IFSC Code &nbsp;:</b> &nbsp;UTIB0001050<br>
								<b>&nbsp; Branch &nbsp;:</b> &nbsp;MAGOB<br>
							</td>
						</tr>
					
		
					<td align="right" width="17%" colspan="2"><b>Final Total&nbsp; </b></td>
						<td align="right"colspan="2" style="padding-right:2%;">
							
	                	</td>
	                </tr>
					<tr>
						<td colspan="2" align="right"><b>IGST (0.0%)&nbsp;</b></td>
						<td align="right"colspan="2">0.00&nbsp;<span class="fa fa-rupee">&nbsp;</span> </td>
					</tr>
					<tr>
						<td colspan="2" align="right"><b>SGST(0.0%)&nbsp;</b></td>
						<td align="right"colspan="2">0.00&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2" align="right"><b>CGST(0.0%)&nbsp;</b></td>
						<td align="right"colspan="2">0.00&nbsp;
							<!-- <?php
								if(isset($_POST['submit'])){
								$ftotal = $_POST['ftotal'];
								$per = $_POST['per'];
								$GST_Amount = ( $ftotal * $per ) / 100 ;
								echo $GST_Amount+$am;
							}
							?>&nbsp; -->
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right"><b>Round Off&nbsp;</b></td>
						<td align="right"colspan="2">0.00&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2" align="right"><b>Total&nbsp;</b></td>
						<td align="right"colspan="2" width="50%">
							<?php
										  $order_id = $_REQUEST['order_id'];
						        	      include("database.php");
						                  $query ="SELECT * FROM user_orders where order_id='$order_id'";
						                  $sql = mysqli_query($con,$query);
						                  while($row = mysqli_fetch_array($sql))
						                  {
					        			?>
						
		                    &nbsp; </b align="left"> &nbsp;&nbsp;<?php echo $row["price"];?><br><span class="fa fa-rupee"></span>
		                    <?php } ?>
	                	</td>
	           				 
						        		
									</tr>
									
									<tr>
										<td colspan="7"><b>&nbsp;Narration &nbsp;:</b></td>
									</tr>
									<tr>
										<td colspan="3" rowspan="3" valign="top">
											&nbsp;<input type="checkbox" name="checkbox">&nbsp;<b>Terms And Condition:</b></td>
										<td colspan="4" align="center" rowspan="3">&nbsp;&nbsp;From:&nbsp;&nbsp;<b>R.K. FOOD</b><br><br>S.V. NAGOTHA<br>
											
											<b>Authorised Signetory</b><br>
										</td>
									</tr><br>
									<br>
									
								</table>
								<table style="margin-bottom: 10px;" align="center" width="60%">
									<tr align="center">
						               <!--  <td  colspan="7" align="center">
						                	<button class="btn btn-warning btn-send" style="margin-top: 10px; margin-bottom: 10px" align="center" id="print" onClick="return hello();"><span class="fa fa-print">&nbsp;Print</button>
					                	</td> -->

					            	</tr>
					            	<br><br>
								</table>
							</body>
 
	
            
        
		
	<!-- Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="plugins/jQurey/jquery.min.js"></script>
	
	<!-- bootstrap js -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- wow js -->
	<script src="plugins/wow-js/wow.min.js"></script>
	
	<!-- main js -->
	<script src="js/main.js"></script>

	</html>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
	<script type="text/javascript">
		$(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>

<script>
                // function hello(){
                    // window.print();
                    $('#print').click(function(){
      				
      				$('body').html($('#cashReport').html());
                    document.getElementById("print").style.display = "none";
                    document.getElementById("top-bar").style.display = "none";

      				window.print();

					});

 					window.onafterprint = function(){
      				window.location.reload(true);
 }
</script>
 