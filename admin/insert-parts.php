
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
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
	$designimage=$_FILES["designimage"]["name"]; // part image
	$category=$_POST['category'];  //part category
	$subcat=$_POST['subcategory']; //part sub category
	$query=mysqli_query($con,"SELECT stairdesigns.design_name, materialcolors.color_name,
	category.categoryName, subcategory.subcategory, designpositions.designposition FROM 
	 materialcolors, stairdesigns,category,subcategory,designpositions WHERE
	stairdesigns.id='$design' AND category.id ='$category' AND subcategory.id='$subcat'
	AND designpositions.id='$designposition' 
	AND materialcolors.id='$colors' ");
while($row=mysqli_fetch_array($query))
{
	$designname=$row['design_name'];
	$catname=$row['categoryName'];
	$subcatname=$row['subcategory'];
	$positionname=$row['designposition'];
	$colorname=$row['color_name'];
}
	// if($material=='WOOD'){
		
	$filename = "DesignPartImages/".$designname."/".$colorname."/".$catname."/".$subcatname;
	// }else{
		
	// $filename = "DesignPartImages/".$designname."/".$catname."/".$subcatname;
	// }
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
$allowed = array('svg');
$ext = pathinfo($designimage, PATHINFO_EXTENSION);
$allowedpng = array('png');
$extpng = pathinfo($designimage, PATHINFO_EXTENSION);
if (!in_array($ext, $allowed)) {
   // echo 'is this png?';
	if (!in_array($extpng, $allowedpng)) {
   // echo 'nooo';
	}else{
   // echo 'yes png';
	
	
	if(move_uploaded_file($_FILES["designimage"]["tmp_name"],"$filename/$positionname.png"))
	{

$_SESSION['msg']="Part added Successfully !!";

}else{
    
$_SESSION['msg']="some error here !!";
}
	}
	
}else{
	move_uploaded_file($_FILES["designimage"]["tmp_name"],"$filename/$positionname.svg");
$sql=mysqli_query($con,"INSERT INTO `design_parts`
(`design_id`, `part_type_id`, `part_position_type_id`, `category_id`,
 `sub_category_id`, `material_name`, `color_id`, `part_position_id`, `design_code`, 
 `part_description`, `part_image`) VALUES 
('$design','$designtype','$typeposition','$category','$subcat','$material',
'$colors','$designposition','$designcode','$designDescription','$positionname.svg')");
if($sql){

$_SESSION['msg']="Part Inserted Successfully !!";

}else{
    
$_SESSION['msg']="some error here !!";
}
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Insert Product</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<!--script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script-->

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
								<h3>Insert Part</h3>
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

<div class="control-group">
<label class="control-label" for="basicinput">Design</label>
<div class="controls">
<select name="design" class="span8 tip" id="stairdesign" onChange="getType(this.value);"  required>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Part Type</label>
<div class="controls">
<select name="designtype" class="span8 tip" id="designtype" onChange="getCat(this.value);"  required>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" class="span8 tip" id="typecategory" onChange="getSubcat(this.value);"  required>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Sub Category</label>
<div class="controls">
<select   name="subcategory"  id="subcategory" onChange="getdesCode(this.value);"  class="span8 tip" required>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Position Type</label>
<div class="controls">
<select name="typeposition" id="typeposition" class="span8 tip" onChange="getdesPosition(this.value);"  required>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Part Material</label>
<div class="controls">
<select name="material" id="material" class="span8 tip" onChange="getColor(this.value);"  required>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Part Color</label>
<div class="controls">
<select name="colors" class="span8 tip" id="colors"   required>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Part Position</label>
<div class="controls">
<select name="designposition" class="span8 tip" id="designposition"   required>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Design Code</label>
<div class="controls" id="designcode" >
<input type="text"    name="designcode" id="designcodeinput" placeholder="Design Code" class="span8 tip" required readonly>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Part Description</label>
<div class="controls">
<textarea  name="designDescription" id="designDescription"  placeholder="Enter Design Description" rows="6" class="span8 tip"></textarea>  
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Part Image</label>
<div class="controls">
<input type="file" name="designimage" id="designimage" value="" accept=".svg" class="span8 tip" required>
</div>
</div>




	<div class="control-group">
											<div class="controls">
												<button type="submit" id="submitt" name="submit" class="btn">Insert</button>
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
			getDesign('1');
		//$("#emailtamplateselctor").change(function(){
			//});
	$('#designposition').on('change',function(){
      let positionname=document.getElementById("designposition").selectedOptions[0].text;
		//alert(positionname);
		if(positionname=="pngpart"){
			$('#designimage').attr('accept', '.png');
		}else{
			
			$('#designimage').attr('accept', '.svg');
		}
	});
	$('#submit').on('click',function(){
		var design=$("#stairdesign option:selected").text();
		var designtype=$("#designtype option:selected").text();
		var typeposition=$("#typeposition option:selected").text();
		var material=$("#material option:selected").text();
		var colors=$("#colors option:selected").text();
		var designposition=$("#designposition option:selected").text();
		var category=$("#category option:selected").text();
		var subcategory=$("#subcategory option:selected").text();
		var designcode=document.getElementById("designcodeinput").value;
		var designDescription=document.getElementById("designDescription").value;
		alert(designDescription);
	//$designimage=$_FILES["designimage"]["name"]; // part image
		});
			});
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