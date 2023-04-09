<?php
	
function convertBase64toimage($image_string){
$name='screenshot_image.png';
$folderPath="screenshotimages/"; 
$img_part = explode(";base64,",$image_string);
$img_type_aux = explode("image/",$img_part[0]);
$ext = $img_type_aux[1];
$image_base64 = base64_decode($img_part[1]);
$file = $folderPath .$name;
file_put_contents($file,$image_base64); 
}	

if(isset($_POST['img'])){
$string=$_POST['img'];
$a=convertBase64toimage($string);
}
?>