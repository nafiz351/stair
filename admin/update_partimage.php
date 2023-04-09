
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	$pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
	$designimage=$_FILES["designimage"]["name"];
//$dir="productimages";
//unlink($dir.'/'.$pimage);
	$query=mysqli_query($con,"select *
from design_parts 
join category on category.id=design_parts.category_id 
join subcategory on subcategory.id=design_parts.sub_category_id
join designtype on designtype.id=design_parts.part_type_id
join designpositions on designpositions.id=design_parts.part_position_id
join stairdesigns on stairdesigns.id=design_parts.design_id
join designpositiontypes on designpositiontypes.id=design_parts.part_position_type_id
join materialcolors on materialcolors.id=design_parts.color_id where design_parts.id='$pid' ");
while($row=mysqli_fetch_array($query))
{
	$designname=$row['design_name'];
	$catname=$row['categoryName'];
	$subcatname=$row['subcategory'];
	$positionname=$row['designposition'];
	$colorname=$row['color_name'];
	$material=$row['material_name'];
}
	if($material=='WOOD'){
		
	$filename = "DesignPartImages/".$designname."/".$colorname."/".$catname."/".$subcatname;
	}else{
		
	$filename = "DesignPartImages/".$designname."/".$catname."/".$subcatname;
	}
	//mkdir($filename,0777,true);
if (!file_exists($filename)){
   // echo $filename, " does not exist";
	mkdir($filename,0777,true);
}
elseif (!is_dir($filename)){
   // echo $filename, " is not a directory";
	mkdir($filename,0777,true);
}
else{
   // echo "Directory ", $filename, " already exists";
   $dir=$filename;
}
$imgaddress=$filename."/".$positionname.".svg";

if(file_exists($imgaddress)) unlink($imgaddress);

	move_uploaded_file($_FILES["designimage"]["tmp_name"],"$filename/$positionname.svg");
	$sql=mysqli_query($con,"update  design_parts set part_image='$positionname.svg' where id='$pid' ");
$_SESSION['msg']="Part Image Updated Successfully !!";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Update Product Image</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   <script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	
<style>
svg, image{
	max-width:200px;
	max-height:200px;
}
</style>

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
								<h3>Update Part Image</h3>
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

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($con,"select *
from design_parts 
join category on category.id=design_parts.category_id 
join subcategory on subcategory.id=design_parts.sub_category_id
join designtype on designtype.id=design_parts.part_type_id
join designpositions on designpositions.id=design_parts.part_position_id
join stairdesigns on stairdesigns.id=design_parts.design_id
join designpositiontypes on designpositiontypes.id=design_parts.part_position_type_id
join materialcolors on materialcolors.id=design_parts.color_id where design_parts.id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>


<div class="control-group">
<label class="control-label" for="basicinput">Part Type</label>
<div class="controls">
<input type="text"    name="design_code"  readonly value="<?php echo htmlentities($row['design_type']);?>" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Design Code</label>
<div class="controls">
<input type="text"    name="design_code"  readonly value="<?php echo htmlentities($row['design_code']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Part Position</label>
<div class="controls">
<input type="text"    name="design_code"  readonly value="<?php echo htmlentities($row['designposition']);?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Current Part Image</label>
<?php if($row['material_name']=='WOOD'){?>
<div class="controls">
<div style="max-width:200px !important;max-height:200px !important;" width="200px" height="200px">
<?php include "DesignPartImages/".$row['design_name']."/".$row['color_name']."/".$row['categoryName']."/".$row['subcategory']."/".$row['part_image'];?>
</div> 
</div>
<?php }else{?>

<div class="controls">
<div style="max-width:200px !important;max-height:200px !important;" width="200px" height="200px">
<?php include "DesignPartImages/".$row['design_name']."/".$row['categoryName']."/".$row['subcategory']."/".$row['part_image'];?>
</div>
</div>
<?php }?>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">New Part Image</label>
<div class="controls">
<input type="file" name="designimage" id="designimage" value="" accept=".svg" class="span8 tip" required>
</div>
</div>


<?php } ?>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
												<a type="button" name="button" href="edit-part.php?id=<?php echo $pid ?>" class="btn">Back</a>
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
	</script>
</body>
<?php } ?>