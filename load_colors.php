<?php

include "includes/config.php";
$materialid=$_POST['materialid'];
//$materialid='h1';
if($materialid=='h1' || $materialid=='n1' || $materialid=='ws1'  || $materialid=='w2' ){
	// wood colors
	$colors='';
$sql="SELECT * FROM `materialcolors` WHERE material_name='WOOD'";
$subquery=mysqli_query($con, $sql);
 if (mysqli_num_rows($subquery)>0) {
	
 	while($rows = mysqli_fetch_array($subquery)){
 		$colorid=$rows['id'];
		 $colorname=$rows['color_name'];
		 $colorcode=$rows['colorcode'];
		// $colors.="<option value='".$colorid."' >".$colorname."</option>";
		 $colors.='<div class="box2" style="background-color:#'.$colorcode.'" value="'.$colorid.'" data-color="'.$colorname.'" title="'.$colorname.'"></div>';
 	}
}else{
	$colors.="No Colour available";
}

 	echo $colors;
}else if($materialid=='is1'){
	// iron colors
		$colors='';
$sql="SELECT * FROM `materialcolors` WHERE material_name='IRON'";
$subquery=mysqli_query($con, $sql);
 if (mysqli_num_rows($subquery)>0) {
	
 	while($rows = mysqli_fetch_array($subquery)){
 		$colorid=$rows['id'];
		 $colorname=$rows['color_name'];
		 $colorcode=$rows['colorcode'];
		 //$colors.="<option value='".$colorid."' >".$colorname."</option>";
 		 $colors.='<div class="box2" style="background-color:#'.$colorcode.'" value="'.$colorid.'" data-color="'.$colorname.'" title="'.$colorname.'"></div>';
 	}
}else{
	$colors.="No Colour available";
}

 	echo $colors;
}else if($materialid=='ss2'){
	// steel colors
		$colors='';
$sql="SELECT * FROM `materialcolors` WHERE material_name='STAINLESS STEEL'";
$subquery=mysqli_query($con, $sql);
 if (mysqli_num_rows($subquery)>0) {
	
 	while($rows = mysqli_fetch_array($subquery)){
 		$colorid=$rows['id'];
		 $colorname=$rows['color_name'];
		 $colorcode=$rows['colorcode'];
		// $colors.="<option value='".$colorid."' >".$colorname."</option>";
		 $colors.='<div class="box2" style="background-color:#'.$colorcode.'" value="'.$colorid.'" data-color="'.$colorname.'" title="'.$colorname.'"></div>';
 	}
}else{
	$colors.="No Colour available";
}

 	echo $colors;
}



?>