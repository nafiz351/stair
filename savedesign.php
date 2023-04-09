<?php

include "includes/config.php";
$bgid=$_POST['bgid'];
$codes=$_POST['codes'];
$designhtml=$_POST['designhtml'];
$balustrade=$_POST['balustrade'];
$userid=$_POST['userid'];
$screenshot=$_POST['screenshot'];
$name=$_POST['designname'];
$firststepvalue=$_POST['firststepvalue'];
$firststepcolor=$_POST['firststepcolor'];
$firststeptreadcolor=$_POST['firststeptreadcolor'];
$firststeprisercolor=$_POST['firststeprisercolor'];
$firststepshedowcolor=$_POST['firststepshedowcolor'];
//$name="";
$date= date('Y-m-d');

	$six_digit_random_number = random_int(100000, 999999);
	$mynewcode=$six_digit_random_number;
function convertBase64tosaveimage($image_string, $imgname){
$name=$imgname.".png";
$folderPath="userdesigns/"; 
$img_part = explode(";base64,",$image_string);
$img_type_aux = explode("image/",$img_part[0]);
$ext = $img_type_aux[1];
$image_base64 = base64_decode($img_part[1]);
$file = $folderPath .$name;
file_put_contents($file,$image_base64); 
} 
$string=$screenshot;
$imagename=$_POST['designname'].$mynewcode;
$a=convertBase64tosaveimage($string, $imagename);
 $message="something wrong";
 //if($a){
	$screenshot= $imagename.".png";
$thequery="INSERT INTO `user_designs`(`userid`, `type_id`, `balustrade`, `Name`, `image`, `designhtml`, `createddate`, `tags`, `fs_value`, `fs_color`, `fs_treadcolor`, `fs_risercolor`, `fs_shadowcolor`) 
                         VALUES ('$userid', '$bgid', '$balustrade', '$name','$screenshot','$designhtml','$date','$codes',      '$firststepvalue','$firststepcolor','$firststeptreadcolor','$firststeprisercolor','$firststepshedowcolor')";


$sql=mysqli_query($con,$thequery);
if($sql){

$message="Your Design has been saved!";

}else{
    
$message="some error here !!";
}
 //}
echo $message;


?>