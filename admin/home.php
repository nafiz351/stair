
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



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Home</title>
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
								<h3></h3>
							</div>
							<div class="module-body">

									
								<div class="control-group" style="background: #343434;text-align:center;">
									<h2 style="color: white; padding: 10px;text-align:center;">Welcome to Admin Panel</h2>
								 <img src="images/logo-gray.png" style="margin-bottom:15px !important;" alt="img here"/>
								</div>


								<!-- <div class="control-group">
								<h1>Today's Received Orders</h1>
								  <div id="loader">
	                                  <canvas id="circularLoader" width="500" height="300"></canvas>
                                  </div>
								</div>

								<div class="control-group">
								<h1>Today's Received Orders</h1>
								  <div id="loader">
	                                  <canvas id="circularLoader" width="500" height="300"></canvas>
                                  </div>
								</div> -->




										

										
								
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

<?php
 /* $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM Orders where orderDate Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
*/
?>
	<script type="text/javascript">
		var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 0;
var end=<?php echo htmlentities($num_rows1); }?>;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
if (end==0) {
	function progressSim(){
	diff = ((al / 5) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 5;
	ctx.fillStyle = '#fff';
	ctx.strokeStyle = "#fff";
	ctx.textAlign = "center";
	ctx.font="20px Arial";
	ctx.fillText(0, 400, 150, cw+12);
	
	ctx.beginPath();
	ctx.arc(400, 150, 90, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 5){
		clearTimeout(sim);
		ctx.fillText(" orders received", 400, 170, cw+12);
	    // Add scripting here that will run when progress completes
	}
	al++;
  }
  var sim = setInterval(progressSim, 100);
}
else{
function progressSim(){
	diff = ((al / end) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 5;
	ctx.fillStyle = '#dfdfdf';
	ctx.strokeStyle = "#dfdfdf";
	ctx.textAlign = "center";
	ctx.font="20px Arial ";
	ctx.fillText(al, 400, 150, cw+12);
	
	ctx.beginPath();
	ctx.arc(400, 150, 90, start, diff/10+start, false);
	ctx.stroke();
	// ctx.fill();
	if(al >= end){
		clearTimeout(sim);
		ctx.fillText(" orders received", 400, 170, cw+12);
	    // Add scripting here that will run when progress completes
	}
	al++;
  }
  var sim = setInterval(progressSim, 200);
}

	</script>
</body>