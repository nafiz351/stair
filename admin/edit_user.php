
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
{	
	header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
	$id=intval($_GET['id']);
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contactno=$_POST['contactno'];
	$password=md5($_POST['password']);
	$shippingAddress=$_POST['shippingAddress'];
	$shippingState=$_POST['shippingState'];
	$shippingCity=$_POST['shippingCity'];
	$shippingPincode=$_POST['shippingPincode'];
	if(isset($_POST['isBillingSameAsShipping'])){		
		$billingAddress=$_POST['shippingAddress'];
		$billingState=$_POST['shippingState'];
		$billingCity=$_POST['shippingCity'];
		$billingPincode=$_POST['shippingPincode'];
	}else{
		$billingAddress=$_POST['billingAddress'];
		$billingState=$_POST['billingState'];
		$billingCity=$_POST['billingCity'];
		$billingPincode=$_POST['billingPincode'];
	}
	$query = "update users set name='$name',email='$email',contactno='$contactno', shippingAddress='$shippingAddress', shippingState='$shippingState', shippingCity='$shippingCity', shippingPincode='$shippingPincode', billingAddress='$billingAddress', billingState='$billingState', billingCity='$billingCity', billingPincode='$billingPincode', updationDate='$currentTime'";
	
	if($password!=''){
		$query .= ", password='$password'";
	}

	$query .= " where id='$id'";
	$sql=mysqli_query($con, $query);
	$_SESSION['msg']="User Updated !!";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Edit User</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
	<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<?php include('include/sidebar.php');?>				
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Edit User</h3>
							</div>
							<div class="module-body">

								<?php if(isset($_POST['submit']))
								{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
								<?php } ?>


								<br />

								<?php if (!empty($_GET['id'])) { ?>

								<form class="form-horizontal row-fluid" name="user" method="post" >
									<?php
									$id=intval($_GET['id']);
									$query=mysqli_query($con,"select * from users where id='$id'");
									while($row=mysqli_fetch_array($query))
									{
										?>									
										<div class="control-group">
											<label class="control-label" for="basicinput">Name</label>
											<div class="controls">
												<input type="text" placeholder="Enter Name"  name="name" value="<?php echo  htmlentities($row['name']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input type="email" placeholder="Enter Email"  name="email" value="<?php echo  htmlentities($row['email']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Contact No</label>
											<div class="controls">
												<input type="tel" placeholder="Enter Contact No"  name="contactno" value="<?php echo  htmlentities($row['contactno']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="password" placeholder="Enter Password"  name="password" value="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Shipping Address</label>
											<div class="controls">
												<input type="text" placeholder="Enter Shipping Address"  id="shippingAddress" name="shippingAddress" value="<?php echo  htmlentities($row['shippingAddress']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Shipping State</label>
											<div class="controls">
												<input type="text" placeholder="Enter Shipping State"  id="shippingState" name="shippingState" value="<?php echo  htmlentities($row['shippingState']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Shipping City</label>
											<div class="controls">
												<input type="text" placeholder="Enter Shipping City"  id="shippingCity" name="shippingCity" value="<?php echo  htmlentities($row['shippingCity']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Shipping Pin Code</label>
											<div class="controls">
												<input type="text" placeholder="Enter Shipping Pin Code"  id="shippingPincode" name="shippingPincode" value="<?php echo  htmlentities($row['shippingPincode']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Billing Address same as Shipping Address</label> 
											<div class="controls">
												<input type="checkbox" id="isBillingSameAsShipping" name="isBillingSameAsShipping" onclick="updateBillingAddress()">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Billing Address</label>
											<div class="controls">
												<input type="text" placeholder="Enter Billing Address"  id="billingAddress" name="billingAddress" value="<?php echo  htmlentities($row['billingAddress']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Billing State</label>
											<div class="controls">
												<input type="text" placeholder="Enter Billing State"  id="billingState" name="billingState" value="<?php echo  htmlentities($row['billingState']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Billing City</label>
											<div class="controls">
												<input type="text" placeholder="Enter Billing City"  id="billingCity" name="billingCity" value="<?php echo  htmlentities($row['billingCity']);?>" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Billing Pin Code</label>
											<div class="controls">
												<input type="text" placeholder="Enter Billing Pin Code"  id="billingPincode" name="billingPincode" value="<?php echo  htmlentities($row['billingPincode']);?>" class="span8 tip" required>
											</div>
										</div>

									<?php } ?>	

									<div class="control-group">
										<div class="controls">
											<button type="submit" name="submit" class="btn">Update</button>
										</div>
									</div>
								</form>
								<?php } ?>
							</div>
						</div>						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );


		function updateBillingAddress() {
			var isBillingSameAsShipping = document.getElementById("isBillingSameAsShipping");  
			var shippingAddress = document.getElementById("shippingAddress");  
			var shippingState = document.getElementById("shippingState");  
			var shippingCity = document.getElementById("shippingCity");  
			var shippingPincode = document.getElementById("shippingPincode"); 
			var billingAddress = document.getElementById("billingAddress");  
			var billingState = document.getElementById("billingState"); 
			var billingCity = document.getElementById("billingCity");  
			var billingPincode = document.getElementById("billingPincode"); 

			if (isBillingSameAsShipping.checked == true){
				billingAddress.value=shippingAddress.value;  
				billingState.value=shippingState.value;  
				billingCity.value=shippingCity.value;  
				billingPincode.value=shippingPincode.value;  
			} else {
				billingAddress.value="";  
				billingState.value="";  
				billingCity.value="";  
				billingPincode.value="";
			}
		}
	</script>
</body>
<?php } ?>