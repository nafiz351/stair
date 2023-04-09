<?php

include "includes/config.php";
$read="";
$bgid=$_POST['bgid'];
if(isset($_POST['designtypedds'])){
	// spindles firststep
	
$designmaterial=$_POST['designmaterial'];
$designcolor=$_POST['designcolor'];
$firststep=$_POST['firststep'];
	$designtypedds=$_POST['designtypedds'];
	if($bgid=='1' && $designmaterial=='h1'){
		// wood handrail
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.design_type='HANDRAIL' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'  GROUP BY design_parts.category_id;";
	}else
	if($bgid=='5' && $designmaterial=='h1'){
		// wood handrail
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%STAINLESS STEEL%' AND  category.categoryName NOT LIKE '%FOR GLASS%' AND designtype.design_type='HANDRAIL' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'  GROUP BY design_parts.category_id;";
	}else 
			if($bgid=='2' && $designmaterial=='h1' && $firststep=='1'){
		// wood handrail
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%VOLUTE%' AND category.categoryName NOT LIKE '%STAINLESS STEEL%' AND category.categoryName NOT LIKE '%FOOTRAIL%' AND designtype.design_type='HANDRAILFOOTRAIL' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'  GROUP BY design_parts.category_id;";
	}else 
			if($bgid=='2' && $designmaterial=='h1' && $firststep=='2'){
		// wood handrail
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%STAINLESS STEEL%' AND category.categoryName NOT LIKE '%FOOTRAIL%' AND designtype.design_type='HANDRAILFOOTRAIL' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'  GROUP BY design_parts.category_id;";
	}else if($bgid=='3' && $designmaterial=='h1' && $firststep=='1'){
		// wood handrail
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%VALUTE%' AND category.categoryName NOT LIKE '%STAINLESS STEEL%' AND category.categoryName NOT LIKE '%FOOTRAIL%' AND designtype.design_type='HANDRAILFOOTRAIL' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'  GROUP BY design_parts.category_id;";
	}else 
			if($bgid=='3' && $designmaterial=='h1' && $firststep=='2'){
		// wood handrail
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%STAINLESS STEEL%' AND category.categoryName NOT LIKE '%FOOTRAIL%' AND designtype.design_type='HANDRAILFOOTRAIL' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'  GROUP BY design_parts.category_id;";
	}else if($bgid=='4' && $designmaterial=='h1' && $firststep=='1'){
		// wood handrail
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%VOLUTE%' AND designtype.design_type='HANDRAIL' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'  GROUP BY design_parts.category_id;";
	}else 
			if($bgid=='4' && $designmaterial=='h1' && $firststep=='2'){
		// wood handrail
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE  designtype.design_type='HANDRAIL' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'  GROUP BY design_parts.category_id;";
	}else 
	if($bgid=='1' && $designmaterial=='n1'){
		// wood newel post bottom
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName LIKE '%BOTTOM NEWEL POST' AND designtype.design_type='NEWEL POST' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
	if($bgid=='5' && $designmaterial=='n1'){
		// wood newel post bottom
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName LIKE '%FOR SPINDLES%' AND designtype.design_type='NEWEL POST' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
	if($bgid=='2' && $designmaterial=='n1' && $firststep=='1'){
		// wood newel post bottom
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE  category.categoryName NOT LIKE '%HEADLESS%' AND designtype.design_type='NEWEL POST' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
		
	if($bgid=='2' && $designmaterial=='n1' && $firststep=='2'){
		// wood newel post bottom
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE designtype.design_type='NEWEL POST' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
		
	if($bgid=='3' && $designmaterial=='n1' && $firststep=='1'){
		// wood newel post bottom
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE  category.categoryName NOT LIKE '%HEADLESS%' AND designtype.design_type='NEWEL POST' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
		
	if($bgid=='3' && $designmaterial=='n1' && $firststep=='2'){
		// wood newel post bottom
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE designtype.design_type='NEWEL POST' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
		
	if($bgid=='4' && $designmaterial=='n1' && $firststep=='1'){
		// wood newel post bottom
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE  category.categoryName NOT LIKE '%HEADLESS%' AND designtype.design_type='NEWEL POST' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
		
	if($bgid=='4' && $designmaterial=='n1' && $firststep=='2'){
		// wood newel post bottom
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE designtype.design_type='NEWEL POST' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
	if($bgid=='1' && $designmaterial=='is1'){
		//iron spindles
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
		
	}else 
	if($bgid=='5' && $designmaterial=='is1'){
		//iron spindles
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
		
	}else 
	if($bgid=='2' && $designmaterial=='is1'){
		//iron spindles
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
		
	}else 
	if($bgid=='3' && $designmaterial=='is1'){
		//iron spindles
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
		
	}else 
	if($bgid=='4' && $designmaterial=='is1'){
		//iron spindles
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
		
	}else 
	if($bgid=='1' && $designmaterial=='ws1'){
		//wood spindles
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
	if($bgid=='5' && $designmaterial=='ws1'){
		//wood spindles
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
	if($bgid=='2' && $designmaterial=='ws1'){
		//wood spindles
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
	if($bgid=='3' && $designmaterial=='ws1'){
		//wood spindles
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}else 
	if($bgid=='4' && $designmaterial=='ws1'){
		//wood spindles
		
		$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE category.categoryName NOT LIKE '%IRON' AND designtype.design_type='SPINDLE' AND design_parts.color_id='$designcolor' AND designtype.designid='$bgid'   GROUP BY design_parts.category_id;";
	}

$subquery=mysqli_query($con, $sql);
//$read="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['category_show_name'];
		
			//$read.="<option  data-steel='no'  value='".$id."'>".$name."</option>";
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-steel="no" value="'.$id.'" href="#">'.$name.'</a></li>';
	}
 }

echo $read;
}else 
if(isset($_POST['designtypeddg'])){
	// glass
	
$designmaterial=$_POST['designmaterial'];
$designcolor=$_POST['designcolor'];
	$designtypeddg=$_POST['designtypeddg'];
	if($bgid=='1' && $designmaterial=='w2'){
		//wood glass parts
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE  designtype.design_type='HANDRAIL' 
          AND category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
          OR designtype.design_type='NEWEL POST'
           AND category.categoryName NOT LIKE '%STAINLESS STEEL%'  AND category.categoryName NOT LIKE '%BOTTOM NEWEL POST' AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
           OR designtype.design_type='FOOTRAIL' 
            AND category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
            OR designtype.design_type='GLASS' AND designtype.designid='$bgid'    GROUP BY design_parts.category_id;";
			$subquery=mysqli_query($con, $sql);
//$read="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['category_show_name'];
		
			$read.="<option data-steel='no'  value='".$id."'>".$name."</option>";
	}
 }
	}else 
	if($bgid=='5' && $designmaterial=='w2'){
		//wood glass parts
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE  designtype.design_type='HANDRAIL' 
          AND category.categoryName NOT LIKE '%STAINLESS STEEL%' AND category.categoryName NOT LIKE '%FOR SPINDLES%' AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
          OR designtype.design_type='NEWEL POST'
           AND category.categoryName NOT LIKE '%STAINLESS STEEL%'  AND category.categoryName NOT LIKE '%FOR SPINDLES%' AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
           OR designtype.design_type='FOOTRAIL' 
            AND category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
            OR designtype.design_type='GLASS' AND designtype.designid='$bgid'    GROUP BY design_parts.category_id;";
			$subquery=mysqli_query($con, $sql);
//$read="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['category_show_name'];
		
			//$read.="<option data-steel='no'  value='".$id."'>".$name."</option>";
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-steel="no" value="'.$id.'" href="#">'.$name.'</a></li>';
	}
 }
	}else 
		if($bgid=='2' && $designmaterial=='w2'){
		//wood glass parts
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE  designtype.design_type='HANDRAILFOOTRAIL' 
          AND category.categoryName NOT LIKE '%VOLUTE%' AND category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
          OR designtype.design_type='NEWEL POST'
           AND category.categoryName NOT LIKE '%HEADLESS%'   AND category.categoryName NOT LIKE '%STAINLESS STEEL%'   AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
        
            OR designtype.design_type='GLASS' AND designtype.designid='$bgid'    GROUP BY design_parts.category_id;";
			$subquery=mysqli_query($con, $sql);
//$read="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['category_show_name'];
		
			///$read.="<option data-steel='no'  value='".$id."'>".$name."</option>";
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-steel="no" value="'.$id.'" href="#">'.$name.'</a></li>';
	}
 }
	}else 
		 
		if($bgid=='3' && $designmaterial=='w2'){
		//wood glass parts
		
	$sql="SELECT category.id, category.category_show_name FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      INNER JOIN design_parts ON design_parts.category_id=category.id
	      WHERE  designtype.design_type='HANDRAILFOOTRAIL' 
          AND category.categoryName NOT LIKE '%VALUTE%' AND category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
          OR designtype.design_type='NEWEL POST'
           AND category.categoryName NOT LIKE '%HEADLESS%'   AND category.categoryName NOT LIKE '%STAINLESS STEEL%'   AND designtype.designid='$bgid' AND design_parts.color_id='$designcolor'
        
            OR designtype.design_type='GLASS' AND designtype.designid='$bgid'    GROUP BY design_parts.category_id;";
			$subquery=mysqli_query($con, $sql);
//$read="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['category_show_name'];
		
			//$read.="<option data-steel='no'  value='".$id."'>".$name."</option>";
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-steel="no" value="'.$id.'" href="#">'.$name.'</a></li>';
	}
 }
	}else
	if($bgid=='1' && $designmaterial=='ss2'){
		//steel parts
		//$read.="<option data-steel='yes' data-shape='RECT'   value='rect'>Rectangle</option><option data-steel='yes' data-shape='ROUND'  value='round'>Round</option><option data-steel='yes' data-shape='SQUER'   value='squer'>Square</option>";
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="RECT" data-steel="yes" value="rect" href="#">Rectangle</a></li>';
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="ROUND" data-steel="yes" value="round" href="#">Round</a></li>';
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="SQUER" data-steel="yes" value="squer" href="#">Square</a></li>';
	}else 
	if($bgid=='5' && $designmaterial=='ss2'){
		//steel parts
		//$read.="<option data-steel='yes' data-shape='RECT'   value='rect'>Rectangle</option><option data-steel='yes' data-shape='ROUND'  value='round'>Round</option><option data-steel='yes' data-shape='SQUER'   value='squer'>Square</option>";
	    $read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="RECT" data-steel="yes" value="rect" href="#">Rectangle</a></li>';
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="ROUND" data-steel="yes" value="round" href="#">Round</a></li>';
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="SQUER" data-steel="yes" value="squer" href="#">Square</a></li>';
	}else 
	if($bgid=='2' && $designmaterial=='ss2'){
		//steel parts
		//$read.="<option data-steel='yes' data-shape='RECT'   value='rect'>Rectangle</option><option data-steel='yes' data-shape='ROUND'  value='round'>Round</option><option data-steel='yes' data-shape='SQUER'   value='squer'>Square</option>";
		$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="RECT" data-steel="yes" value="rect" href="#">Rectangle</a></li>';
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="ROUND" data-steel="yes" value="round" href="#">Round</a></li>';
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="SQUER" data-steel="yes" value="squer" href="#">Square</a></li>';
	}	else 
	if($bgid=='3' && $designmaterial=='ss2'){
		//steel parts
		//$read.="<option data-steel='yes' data-shape='RECT'   value='rect'>Rectangle</option><option data-steel='yes' data-shape='ROUND'  value='round'>Round</option><option data-steel='yes' data-shape='SQUER'   value='squer'>Square</option>";
		$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="RECT" data-steel="yes" value="rect" href="#">Rectangle</a></li>';
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="ROUND" data-steel="yes" value="round" href="#">Round</a></li>';
			$read.='<li class="nav-item"> <a class="nav-link designcategory" data-shape="SQUER" data-steel="yes" value="squer" href="#">Square</a></li>';
	}


echo $read;	
}




if(isset($_POST['categorysteel'])){
	//echo "achaa";
	
$bgid=$_POST['bgid'];
$subcategory=$_POST['subcategory'];

		
	$sql="SELECT category.id, category.categoryName FROM category
	      INNER JOIN subcategory ON subcategory.categoryid=category.id
	      WHERE  subcategory.id='$subcategory';";
			$subquery=mysqli_query($con, $sql);
//$read="";
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['categoryName'];
		echo $name;
	}
 }
}



/*
if($bgid=='1' && $balustarde=="1" && $typename=='NEWEL POST'){
	$sql="SELECT category.id, category.categoryName FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      WHERE category.categoryName LIKE '%BOTTOM NEWEL POST' AND designtype.design_type='$typename' AND designtype.designid='$bgid' ";
}else if($bgid=='1' && $balustarde=="1" && $typename=='HANDRAIL'){
	$sql="SELECT category.id, category.categoryName FROM category
	      INNER JOIN designtype ON designtype.id=category.designtypeid
	      WHERE category.categoryName NOT LIKE '%STAINLESS STEEL%' AND designtype.design_type='$typename' AND designtype.designid='$bgid' ";
}
else{

	$sql="SELECT category.id, category.categoryName FROM category
	INNER JOIN designtype ON designtype.id=category.designtypeid
 
    WHERE designtype.design_type='$typename' AND designtype.designid='$bgid' ";
}
$subquery=mysqli_query($con, $sql);
 if (mysqli_num_rows($subquery)>0) {
 	
 	while($rows = mysqli_fetch_array($subquery)){
 		$id=$rows['id'];
 		$name=$rows['categoryName'];
		 if(strpos($name, 'STAINLESS STEEL')==false){
 		    $text.="<option data-steel='no' value='".$id."'>".$name."</option>";
		 }else{
			$text.="<option data-steel='yes' data-shape='ROUND' value='".$id."'>".$name."</option>";
			//  if(strpos($name, 'REC')!==false){
			// 	$text.="<option data-steel='yes' data-shape='REC' value='".$id."'>".$name."</option>";
			//  }
			//  if(strpos($name, 'SQUARE')!==false){
			// 	$text.="<option data-steel='yes' data-shape='SQUARE' value='".$id."'>".$name."</option>";
			//  }
			//  if(strpos($name, 'ROUND')!==false){
			// 	$text.="<option data-steel='yes' data-shape='ROUND' value='".$id."'>".$name."</option>";
			//  }
			
		 }
 	}}
 	else{
 		$text.="<option >No category available</option>";
 	}

 	echo $text;*/
?>