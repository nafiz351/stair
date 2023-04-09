<?php


include "includes/config.php";
if(isset($_POST['realnamec'])){
	$scval=$_POST['realnamec'];
	$sql="SELECT category.id, category.categoryName FROM category WHERE category.id='$scval'";
	$subquery=mysqli_query($con, $sql);
$read="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['categoryName'];
		
			$read=$name;
	}
 }

echo $read;
}else
if(isset($_POST['realname'])){
	$scval=$_POST['realname'];
	$sql="SELECT subcategory.id, subcategory.subcategory FROM subcategory WHERE subcategory.id='$scval'";
	$subquery=mysqli_query($con, $sql);
$read="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['subcategory'];
		
			$read=$name;
	}
 }

echo $read;
}else
if(isset($_POST['designtypedds'])){
	
$bgid=$_POST['bgid'];
$designmaterial=$_POST['designmaterial'];
$designcolor=$_POST['designcolor'];
$designcategory=$_POST['designcategory'];
	// spindles 
	$designtypedds=$_POST['designtypedds'];
	if($bgid=='1' && $designmaterial=='h1'){
		// wood handrail
		$read="Handrail Selections";
	$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.design_type='HANDRAIL' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='5' && $designmaterial=='h1'){
		// wood handrail
		$read="Handrail Selections";
	$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName NOT LIKE '%STAINLESS STEEL%' AND category.categoryName NOT LIKE '%FOR GLASS%' AND designtype.design_type='HANDRAIL' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
		if($bgid=='2' && $designmaterial=='h1'){
		// wood handrail
		$read=" Handrail Selections ";
	$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.design_type='HANDRAILFOOTRAIL' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
		if($bgid=='3' && $designmaterial=='h1'){
		// wood handrail
		$read=" Handrail Selections ";
	$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.design_type='HANDRAILFOOTRAIL' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
		if($bgid=='4' && $designmaterial=='h1'){
		// wood handrail
		$read=" Handrail Selections ";
	$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE  designtype.design_type='HANDRAIL' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='1' && $designmaterial=='n1'){
		// wood newel post bottom
		$read=" Newel Post Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName LIKE '%BOTTOM NEWEL POST' AND designtype.design_type='NEWEL POST' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='5' && $designmaterial=='n1'){
		// wood newel post bottom
		$read=" Newel Post Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName LIKE '%FOR SPINDLES' AND designtype.design_type='NEWEL POST' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
		
	if($bgid=='2' && $designmaterial=='n1'){
		// wood newel post bottom
		$read=" Newel Post Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE  designtype.design_type='NEWEL POST' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='3' && $designmaterial=='n1'){
		// wood newel post bottom
		$read=" Newel Post Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE  designtype.design_type='NEWEL POST' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='4' && $designmaterial=='n1'){
		// wood newel post bottom
		$read=" Newel Post Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE  designtype.design_type='NEWEL POST' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='1' && $designmaterial=='is1'){
		//iron spindles
		$read=" Iron Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
		
	}else
	if($bgid=='5' && $designmaterial=='is1'){
		//iron spindles
		$read=" Iron Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
		
	}else 
		
	if($bgid=='2' && $designmaterial=='is1'){
		//iron spindles
		$read=" Iron Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
		
	}else 
	if($bgid=='3' && $designmaterial=='is1'){
		//iron spindles
		$read=" Iron Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
		
	}else 
	if($bgid=='4' && $designmaterial=='is1'){
		//iron spindles
		$read=" Iron Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
		
	}else 
	if($bgid=='1' && $designmaterial=='ws1'){
		//wood spindles
		$read=" Wood Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='5' && $designmaterial=='ws1'){
		//wood spindles
		$read=" Wood Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='2' && $designmaterial=='ws1'){
		//wood spindles
		$read=" Wood Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='3' && $designmaterial=='ws1'){
		//wood spindles
		$read=" Wood Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}else 
	if($bgid=='4' && $designmaterial=='ws1'){
		//wood spindles
		$read=" Wood Spindle Selections ";
		$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' 
		  AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;";
	}

$subquery=mysqli_query($con, $sql);
$read1="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['subcategory_show_name'];
		
			$read1.='<li class="nav-item"> <a class="nav-link designsubcategory"  value="'.$id.'" href="#">'.$name.'</a></li>';
	}
 }

//echo $read;
class Result{}
$result=new Result();
	$result->text=$read;
	$result->options=$read1;
header('Content-Type: application/json');
echo json_encode($result);
}else 
if(isset($_POST['designtypeddg'])){
	
$bgid=$_POST['bgid'];
$designmaterial=$_POST['designmaterial'];
$designcolor=$_POST['designcolor'];
$designcategory=$_POST['designcategory'];
	// glass
	$designtypeddg=$_POST['designtypeddg'];
	if($bgid=='1' && $designmaterial=='w2'){
		//wood glass parts
		
		$read=" Select Stair part type ";
	$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAIL' 
		  AND category.categoryName  NOT LIKE '%STAINLESS STEEL%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName NOT LIKE '%STAINLESS STEEL%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='FOOTRAIL' 
		  AND category.categoryName NOT LIKE '%STAINLESS STEEL%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  LIKE '%WOOD%'  
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;
		  ";
	}else 
	if($bgid=='5' && $designmaterial=='w2'){
		//wood glass parts
		
		$read=" Select Stair part type ";
	$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAIL' 
		  AND category.categoryName  NOT LIKE '%STAINLESS STEEL%' 
		  AND category.categoryName  NOT LIKE '%FOR SPINDLES%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName NOT LIKE '%STAINLESS STEEL%' 
		  AND category.categoryName  NOT LIKE '%FOR SPINDLES%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='FOOTRAIL' 
		  AND category.categoryName NOT LIKE '%STAINLESS STEEL%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  LIKE '%WOOD%'  
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;
		  ";
	}else 
		if($bgid=='2' && $designmaterial=='w2'){
		//wood glass parts
		
		$read=" Select Stair part type ";
	$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAILFOOTRAIL' 
		  AND category.categoryName  NOT LIKE '%STAINLESS STEEL%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName NOT LIKE '%STAINLESS STEEL%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  LIKE '%WOOD%'  
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;
		  ";
	}else 
		if($bgid=='3' && $designmaterial=='w2'){
		//wood glass parts
		
		$read=" Select Stair part type ";
	$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAILFOOTRAIL' 
		  AND category.categoryName  NOT LIKE '%STAINLESS STEEL%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName NOT LIKE '%STAINLESS STEEL%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  LIKE '%WOOD%'  
		  AND designtype.designid='$bgid' 
		  AND subcategory.categoryid='$designcategory' GROUP BY design_parts.sub_category_id;
		  ";
	}else 
	if($bgid=='1' && $designmaterial=='ss2'){
		//steel parts
		if($designcategory=='rect'){
			// steel rectangle
		$read=" Select Rectangle Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%RECT%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%RECT%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}else if($designcategory=='round'){
			// steel round
		$read=" Select Round Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%ROUND%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%ROUND%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}else if($designcategory=='squer'){
			// steel squer
		$read=" Select Squer Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%SQUARE%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%SQUARE%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}
		
	}	
	else
	if($bgid=='5' && $designmaterial=='ss2'){
		//steel parts
		if($designcategory=='rect'){
			// steel rectangle
		$read=" Select Rectangle Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%RECT%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%RECT%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}else if($designcategory=='round'){
			// steel round
		$read=" Select Round Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%ROUND%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%ROUND%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}else if($designcategory=='squer'){
			// steel squer
		$read=" Select Squer Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%SQUARE%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%SQUARE%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}
		
	}	
	else
	if($bgid=='2' && $designmaterial=='ss2'){
		//steel parts
		if($designcategory=='rect'){
			// steel rectangle
		$read=" Select Rectangle Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAILFOOTRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%RECT%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%RECT%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}else if($designcategory=='round'){
			// steel round
		$read=" Select Round Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAILFOOTRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%ROUND%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%ROUND%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}else if($designcategory=='squer'){
			// steel squer
		$read=" Select Squer Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAILFOOTRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%SQUARE%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%SQUARE%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}
		
	}	
		
	else
	if($bgid=='3' && $designmaterial=='ss2'){
		//steel parts
		if($designcategory=='rect'){
			// steel rectangle
		$read=" Select Rectangle Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAILFOOTRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%RECT%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%RECT%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}else if($designcategory=='round'){
			// steel round
		$read=" Select Round Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAILFOOTRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%ROUND%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%ROUND%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}else if($designcategory=='squer'){
			// steel squer
		$read=" Select Squer Parts ";
			$sql="SELECT subcategory.id, subcategory.subcategory_show_name FROM subcategory
	      INNER JOIN category ON category.id=subcategory.categoryid
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.sub_category_id=subcategory.id
	      WHERE designtype.design_type='HANDRAILFOOTRAIL' 
		  AND category.categoryName   LIKE '%STAINLESS STEEL%'
		  AND subcategory.subcategory   LIKE '%SQUARE%'   
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='NEWEL POST' 
		  AND category.categoryName  LIKE '%STAINLESS STEEL%' 
		  AND subcategory.subcategory   LIKE '%SQUARE%'  
		  AND design_parts.color_id='$designcolor' 
		  AND designtype.designid='$bgid' 
		  OR designtype.design_type='GLASS'
		  AND subcategory.subcategory  NOT LIKE '%WOOD%'  
		  AND designtype.designid='$bgid'  GROUP BY design_parts.sub_category_id";
		}
		
	}
$subquery=mysqli_query($con, $sql);
$read1="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['subcategory_show_name'];
		
			//$read1.="<option value='".$id."'>".$name." ";
			$read1.='<li class="nav-item"> <a class="nav-link designsubcategory"  value="'.$id.'" href="#">'.$name.'</a></li>';
	}
 }

//echo $read;	
class Result{}
$result=new Result();
	$result->text=$read;
	$result->options=$read1;
header('Content-Type: application/json');
echo json_encode($result);
}




/*
$text="<option>Select sub-category ";
$sql="SELECT subcategory.id, subcategory.subcategory, category.categoryName FROM subcategory INNER JOIN category ON subcategory.categoryid=category.id where categoryid='".$category."'";
$subquery=mysqli_query($con, $sql);
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['subcategory'];
 		$text.="<option value='".$id."'>".$name." ";
 	}}
 	else{
 		$text.="<option >No sub-category available ";
 	}

 	echo $text;*/
?>