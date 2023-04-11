
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

	$sqlQerey = "SELECT * FROM `users` WHERE email='".$email."'";
	$results = mysqli_query($con, $sqlQerey);
	$row = $results->fetch_assoc();

	if(is_array($row) && count($row)>0){
		$_SESSION['msgErr']="Found another user with same Email address!!";
	}else{
		$query = "INSERT INTO `users`
		(`name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`) VALUES 
		('$name','$email','$contactno','$password','$shippingAddress','$shippingState', '$shippingCity','$shippingPincode','$billingAddress','$billingState','$billingCity', '$billingPincode')";
		$sql=mysqli_query($con, $query);
		if($sql){
			$_SESSION['msg']="User Added Successfully !!";
			header("Location: manage-users.php");
			exit();
		}else{
			$_SESSION['msgErr']="some error here !!";
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Add User</title>
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
								<h3>Add User</h3>
							</div>
							<div class="module-body">

								<?php if(isset($_POST['submit']) && !empty($_SESSION['msg']))
								{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
								<?php } 
								if(isset($_POST['submit']) && !empty($_SESSION['msgErr']))
									{?>
										<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<?php echo htmlentities($_SESSION['msgErr']);?><?php echo htmlentities($_SESSION['msgErr']="");?>
										</div>
									<?php } ?>


									<br />

									<form class="form-horizontal row-fluid" name="user" method="post" >									
										<div class="control-group">
											<label class="control-label" for="basicinput">Name</label>
											<div class="controls">
												<input type="text" placeholder="Enter Name"  name="name" value="" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input type="email" placeholder="Enter Email"  id="email" name="email" value="" class="span8 tip" autocomplete="off" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Contact No</label>
											<div class="controls">
												<input type="tel" placeholder="Enter Contact No"  name="contactno" value="" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="password" placeholder="Enter Password" id="password" name="password" class="span8 tip" autocomplete="off" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Shipping Address</label>
											<div class="controls">
												<input type="text" placeholder="Enter Shipping Address"  id="shippingAddress" name="shippingAddress" value="" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Shipping State</label>
											<div class="controls">
												<input type="text" placeholder="Enter Shipping State"  id="shippingState" name="shippingState" value="" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Shipping City</label>
											<div class="controls">
												<input type="text" placeholder="Enter Shipping City"  id="shippingCity" name="shippingCity" value="" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Shipping Pin Code</label>
											<div class="controls">
												<input type="text" placeholder="Enter Shipping Pin Code"  id="shippingPincode" name="shippingPincode" value="" class="span8 tip" required>
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
												<input type="text" placeholder="Enter Billing Address"  id="billingAddress" name="billingAddress" value="" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Billing State</label>
											<div class="controls">
												<input type="text" placeholder="Enter Billing State"  id="billingState" name="billingState" value="" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Billing City</label>
											<div class="controls">
												<input type="text" placeholder="Enter Billing City"  id="billingCity" name="billingCity" value="" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Billing Pin Code</label>
											<div class="controls">
												<input type="text" placeholder="Enter Billing Pin Code"  id="billingPincode" name="billingPincode" value="" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Add User</button>
											</div>
										</div>
									</form>
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


			window.onload = function(){
				document.getElementById("user").value = "";
			}

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