
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

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from products where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
		  }
		  if(isset($_POST['submit']))
{
if(!empty($_POST['check_list']))
{
     foreach($_POST['check_list'] as $id){
		 $query=mysqli_query($con,"select * FROM user_designs WHERE id='$id'");
	$result=mysqli_fetch_array($query);
	if(!empty($result)){
	//Output
		$userid=$result['userid'];
		$Name=$result['Name'];
		$image=$result['image'];
		$type_id=$result['type_id'];
		$balustrade=$result['balustrade'];
		$designhtml=$result['designhtml'];
		$createddate=$result['createddate'];
		$tags=$result['tags'];
            $fs_value=$result['fs_value'];
            $fs_color=$result['fs_color'];
            $fs_treadcolor=$result['fs_treadcolor'];
            $fs_risercolor=$result['fs_risercolor'];
            $fs_shadowcolor=$result['fs_shadowcolor'];
		//$designlikes=$result['likes'];
		//echo "<br> user: ".$designuser." ".$designname." ".$designimg." ".$designdate." ".
		//$designlikes;
	$org_image="../userdesigns/".$image;
$destination="../recommendeddesigns";
copy( $org_image , $destination.'/'.$image );
$sql=mysqli_query($con,"INSERT INTO `recommended_designs`(`userid`, `type_id`, `balustrade`, `Name`, `image`, `designhtml`, `createddate`, `tags`, `fs_value`, `fs_color`, `fs_treadcolor`, `fs_risercolor`, `fs_shadowcolor`) 
                                                 VALUES ('$userid','$type_id','$balustrade','$Name','$image','$designhtml','$createddate','$tags', '$fs_value','$fs_color','$fs_treadcolor','$fs_risercolor','$fs_shadowcolor')");
$_SESSION['msg']="Saved Successfully !!";


	}else{
	echo 'No Record Found.';
}

       // echo "<br>$id was checked! ";
     }
}

}
if(isset($_POST['submitnew']))
{
	
	$designName=$_POST['designName'];
	$designdate=$_POST['designdate'];
	$designimage=$_FILES['designimage']['name'];
	
	move_uploaded_file($_FILES["designimage"]["tmp_name"],"recommendeddesigns/".$_FILES["designimage"]["name"]);
	//echo "<br>name: ".$designName."<br>designdate: ".$designdate."<br>designimage: ".$designimage;
$sql=mysqli_query($con,"INSERT INTO `recommended_designs`(`Name`, `image`, `createddate`) VALUES ('$designName','$designimage','$designdate')");
$_SESSION['msg']="Inserted Successfully !!";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Recommended Designs</title>
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
								<h3>Recommended Designs</h3>
							</div>
							<div  class="module-body table">
																		<?php if(isset($_POST['submitnew']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
															<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
							<div id="admininsert" >
					<div class="control-group">
											<div class="controls" style="margin-left:80%;">
												<button type="button" name="submit2" id="cusd" class="btn">Customer Designs</button>
											</div>
										</div>
										<h2 style="text-align:center;">Insert Design as Recommended</h2>
							<form method="post" name="admininserted" action="" enctype="multipart/form-data" >
							
<div class="control-group" style="margin-left:7%;" >
<label class="control-label" for="basicinput">Design Name</label>
<div class="controls">
<input type="text"    name="designName"  placeholder="Enter Design Name" class="span8 tip" required>
</div>
</div>

<div class="control-group" style="margin-left:7%;" >
<label class="control-label" for="basicinput">Design Created Date</label>
<div class="controls">
<input type="date"    name="designdate"  placeholder="Enter Design Created date" class="span8 tip" required>
</div>
</div>
<div class="control-group" style="margin-left:7%;" >
<label class="control-label" for="basicinput">Design Image</label>
<div class="controls">
<input type="file" name="designimage" id="designimage" value="" accept=".png" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<div class="controls" style="margin-left:40%;">
<button type="submit" name="submitnew" class="btn">Insert as Recommended Designs</button>
</div>
</div>

							</form>
							</div>
							<div id="customerdesigns" >
		
							<div class="control-group">
											<!--div class="controls" style="margin-left:85%;">
												<button type="button" name="submit2" id="newd" class="btn">Add New Design</button>
											</div-->
										</div>
			<h2 style="text-align:center;">Customer's Saved Designs</h2>
							
							<form method="post" name="frm">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

							
								<table  cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Select</th>
											<th>Name</th>
											<th>Created Date</th>
											<th>Designs</th>
											<th>Likes </th>
										
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from user_designs");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><input type="checkbox" name="check_list[]" value="<?php echo htmlentities($row['id']);?>" ></input></td>
											<td><?php echo htmlentities($row['Name']);?></td>
											<td> <?php echo htmlentities($row['createddate']);?></td>
											<td><img style="max-height:100px;max-width:100px;" src='<?php echo htmlentities("../userdesigns/".$row['image']);?>' alt="hey" /></td>
<?php	$retc=mysqli_query($con,"select * from likes WHERE design_id='".$row['id']."' AND design_type='user'");
			$likecount=0;
	
	while ($rowc=mysqli_fetch_array($retc)) 
{
	$likecount=$likecount+1;
	// echo $likecount;
}?>
											<td><?php echo $likecount;?></td>
											
										<?php $cnt=$cnt+1; } ?>
										
								</table>
								<div class="control-group">
											<div class="controls" style="margin-left:40%;">
												<button type="submit" name="submit" class="btn">Save as Recommended Designs</button>
											</div>
										</div>
										</form>
							</div>
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
			
			$("#admininsert").hide();
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		$('#newd').click(function(){
			
			$("#customerdesigns").hide();
			$("#admininsert").show();
			//admininsert
		});
		$('#cusd').click(function(){
			
			$("#customerdesigns").show();
			$("#admininsert").hide();
			//admininsert
		});
		
		} );
	</script>
</body>
<?php } ?>