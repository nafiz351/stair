<?php

include "includes/config.php";
$category=$_POST['category'];
$subcategory=$_POST['subcategory'];
$colorid=$_POST['color'];
$imagesrc="";
$sql="SELECT * FROM `design_parts` d
INNER JOIN stairdesigns ON stairdesigns.id=d.design_id
INNER JOIN designtype ON designtype.id=d.part_type_id
INNER JOIN designpositiontypes ON designpositiontypes.id=d.part_position_type_id
INNER JOIN category ON category.id=d.category_id
INNER JOIN subcategory ON subcategory.id=d.sub_category_id
INNER JOIN materialcolors ON materialcolors.id=d.color_id
INNER JOIN designpositions ON designpositions.id=d.part_position_id
WHERE  d.sub_category_id='$subcategory'
AND d.color_id='$colorid'
";
$subquery=mysqli_query($con, $sql);
 if (mysqli_num_rows($subquery)>0) {
	 $count=1;
 	while($rows = mysqli_fetch_array($subquery)){
 		$color=$rows['color_name'];
		$designname=$rows['design_name'];
		$designPart=$rows['design_type'];
		$designPart=explode(" ", $designPart);
		$catname=$rows['categoryName'];
		$subcatname=$rows['subcategory'];
		$designcode=$rows['design_code'];
		$colorname=$rows['color_name'];
		if($subcatname=='GLASS FOR WOOD POST'){
			
		$path="admin/DesignPartImages/$designname/FOR WOOD POST/$catname/$subcatname/pngpart.png";
		}else if($subcatname=='GLASS FOR SS POST'){
			
		$path="admin/DesignPartImages/$designname/FOR SS POST/$catname/$subcatname/pngpart.png";
		}else {
		$path="admin/DesignPartImages/$designname/$color/$catname/$subcatname/pngpart.png";
		}
 		if($count==1){
			$count=2;
			$imagesrc= '<div id="draggeddiv" data-colorname="'.$colorname.'" data-designcode="'.$designcode.'" class="dragpart bg-red" data-class="'.$designPart[0].'"  ><img id="imgfordrag" data-class="'.$designPart[0].'" style="height:200px; "src="'.$path.'"/></div>';
 		}
 	}}
	 else{
		 $imagesrc="no image available";
	 }

 	echo $imagesrc;
?>