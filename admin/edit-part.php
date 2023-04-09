
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
	$design=$_POST['design'];        // main design
	$designtype=$_POST['designtype']; // part type
	$typeposition=$_POST['typeposition'];//part position type
	$material=$_POST['material'];// part material
	$colors=$_POST['colors']; //part color
	$designposition=$_POST['designposition'];//part position
	$designcode=$_POST['designcode']; //part code
	$designDescription=$_POST['designDescription'];// part description
	//$designimage=$_FILES["designimage"]["name"]; // part image
	$category=$_POST['category'];  //part category
	$subcat=$_POST['subcategory']; //part sub category
	
$sql=mysqli_query($con,"UPDATE `design_parts` SET `design_id`='$design',`part_type_id`='$designtype',
`part_position_type_id`='$typeposition',`category_id`='$category',
`sub_category_id`='$subcat',`material_name`='$material',`color_id`='$colors',
`part_position_id`='$designposition',`design_code`='$designcode',`part_description`='$designDescription'
WHERE id='$pid' ");
$_SESSION['msg']="Product Updated Successfully !!";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Edit Part</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<!--script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script-->
<style>
svg, image{
	max-width:200px;
	max-height:200px;
}
</style>
   <script>


function getDesign(val) {
	$.ajax({
	type: "POST",
	url: "getphpfiles/get_design.php",
	data:'des_id='+val,
	success: function(data){
		$("#stairdesign").html(data);
		
	}
	});
}

function getType(val) {
	$.ajax({
	type: "POST",
	url: "getphpfiles/get_designtype.php",
	data:'des_id='+val,
	success: function(data){
		$("#designtype").html(data);
		$("#typecategory").html("");
		$("#typeposition").html("");
		$("#material").html("");
		$("#subcategory").html("");
		$("#designposition").html("");
		$("#colors").html("");
		$("#designcodeinput").val("");
	}
	});
}
function getCat(val) {
	$.ajax({
	type: "POST",
	url: "getphpfiles/get_typecat.php",
	data:'destype_id='+val,
	success: function(data){
		$("#typecategory").html(data);
	}
	});
	$.ajax({
	type: "POST",
	url: "getphpfiles/get_typeposition.php",
	data:'destype_id='+val,
	success: function(data){
		$("#typeposition").html(data);
	}
	});
	
	$.ajax({
	type: "POST",
	url: "getphpfiles/get_material.php",
	data:'destype_id='+val,
	success: function(data){
		$("#material").html(data);
	}
	});
}
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "getphpfiles/get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function getdesPosition(val) {
	$.ajax({
	type: "POST",
	url: "getphpfiles/get_desposition.php",
	data:'destypepos_id='+val,
	success: function(data){
		$("#designposition").html(data);
	}
	});
}

function getColor(val) {
	$.ajax({
	type: "POST",
	url: "getphpfiles/get_color.php",
	data:'material_id='+val,
	success: function(data){
		$("#colors").html(data);
	}
	});
}
function getdesCode(val) {
	$.ajax({
	type: "POST",
	url: "getphpfiles/get_descode.php",
	data:'subcat_id='+val,
	success: function(data){
		$("#designcode").html(data);
	}
	});
}
</script>	


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
								<h3>Edit Part</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
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
<label class="control-label" for="basicinput">Design</label>
<div class="controls">
<select name="design" class="span8 tip" id="stairdesign" onChange="getType(this.value);"  required>
<option value="<?php echo htmlentities($row['design_id']);?>"><?php echo htmlentities($row['design_name']);?></option> 
<?php $query1=mysqli_query($con,"select * from stairdesigns");
while($rw=mysqli_fetch_array($query1))
{
	if($row['design_name']==$rw['design_name'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['design_name'];?></option>
<?php }} ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Part Type</label>
<div class="controls">
<select name="designtype" class="span8 tip" id="designtype" onChange="getCat(this.value);"  required>
<option value="<?php echo htmlentities($row['part_type_id']);?>"><?php echo htmlentities($row['design_type']);?></option> 
<?php $query=mysqli_query($con,"select * from designtype WHERE designid='".$row['design_id']."'");
while($rw=mysqli_fetch_array($query))
{
	if($row['design_type']==$rw['design_type'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['design_type'];?></option>
<?php }} ?>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" id="typecategory" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="<?php echo htmlentities($row['category_id']);?>"><?php echo htmlentities($row['categoryName']);?></option> 
<?php $query=mysqli_query($con,"select * from category WHERE designtypeid='".$row['part_type_id']."'");
while($rw=mysqli_fetch_array($query))
{
	if($row['categoryName']==$rw['categoryName'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['categoryName'];?></option>
<?php }} ?>
</select>
</div>
</div>

								
<div class="control-group">
<label class="control-label" for="basicinput">Sub Category</label>
<div class="controls">

<select   name="subcategory"  id="subcategory" onChange="getdesCode(this.value);" class="span8 tip" required>
<option value="<?php echo htmlentities($row['sub_category_id']);?>"><?php echo htmlentities($row['subcategory']);?></option>
<?php $query=mysqli_query($con,"select * from subcategory WHERE categoryid='".$row['category_id']."'");
while($rw=mysqli_fetch_array($query))
{
	if($row['subcategory']==$rw['subcategory'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['subcategory'];?></option>
<?php }} ?>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Position Type</label>
<div class="controls">
<select name="typeposition" id="typeposition" class="span8 tip" onChange="getdesPosition(this.value);"  required>
<option value="<?php echo htmlentities($row['part_position_type_id']);?>"><?php echo htmlentities($row['position_name']);?></option>
<?php $query=mysqli_query($con,"select * from designpositiontypes WHERE designtypeid='".$row['part_type_id']."'");
while($rw=mysqli_fetch_array($query))
{
	if($row['position_name']==$rw['position_name'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['position_name'];?></option>
<?php }} ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Part Material</label>
<div class="controls">
<select name="material" id="material" class="span8 tip" onChange="getColor(this.value);"  required>
<option value="<?php echo htmlentities($row['material_name']);?>"><?php echo htmlentities($row['material_name']);?></option>
<?php $query=mysqli_query($con,"select * from designmaterial WHERE designtypeid='".$row['part_type_id']."'");
while($rw=mysqli_fetch_array($query))
{
	if($row['material_name']==$rw['material_name'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['material_name'];?>"><?php echo $rw['material_name'];?></option>
<?php }} ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Part Color</label>
<div class="controls">
<select name="colors" class="span8 tip" id="colors"   required>
<option value="<?php echo htmlentities($row['color_id']);?>"><?php echo htmlentities($row['color_name']);?></option>
<?php $query=mysqli_query($con,"select * from materialcolors WHERE material_name='".$row['material_name']."'");
while($rw=mysqli_fetch_array($query))
{
	if($row['color_name']==$rw['color_name'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['color_name'];?></option>
<?php }} ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Part Position</label>
<div class="controls">
<select name="designposition" class="span8 tip" id="designposition"   required>
<option value="<?php echo htmlentities($row['part_position_id']);?>"><?php echo htmlentities($row['designposition']);?></option>
<?php $query=mysqli_query($con,"select * from designpositions WHERE positiontypeid='".$row['part_position_type_id']."'");
while($rw=mysqli_fetch_array($query))
{
	if($row['designposition']==$rw['designposition'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['designposition'];?></option>
<?php }} ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Design Code</label>
<div class="controls" id="designcode" >
<input type="text"    name="designcode" id="designcodeinput" value="<?php echo htmlentities($row['design_code']);?>" placeholder="Design Code" class="span8 tip" required readonly>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Part Description</label>
<div class="controls">
<textarea  name="designDescription" id="designDescription"  placeholder="Enter Design Description" rows="6" class="span8 tip"><?php echo htmlentities($row['part_description']);?></textarea>  
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Part Image</label>
<?php if($row['material_name']=='WOOD'){?>
<div class="controls">
<div style="max-width:200px !important;max-height:200px !important;" width="200px" height="200px">
<?php include "DesignPartImages/".$row['design_name']."/".$row['color_name']."/".$row['categoryName']."/".$row['subcategory']."/".$row['part_image'];?>
</div> <a href="update_partimage.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
<?php }else{?>

<div class="controls">
<div style="max-width:200px !important;max-height:200px !important;" width="200px" height="200px">
<?php include "DesignPartImages/".$row['design_name']."/".$row['categoryName']."/".$row['subcategory']."/".$row['part_image'];?>
</div> <a href="update_partimage.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
<?php }?>
</div>


<?php } ?>	
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
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