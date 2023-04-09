<?php
require_once '../includes/config.php';

$json = file_get_contents('php://input');
$params = json_decode($json);
$did=$params->designid;
$uid=$params->userid;
$dtype=$params->designtype;
/*$did='9';
$uid='10';
$dtype='recommended';*/
$SelectQuery="SELECT * FROM `likes` WHERE `user_id`='$uid' AND `design_id`='$did' AND `design_type`='$dtype'";
class Room {}
$resultg = new Room();
$result=mysqli_query($con,$SelectQuery);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
	
	$likeid=$row['id'];
	
	$DeleteQuery="DELETE FROM `likes` WHERE `id`='$likeid' ";
 
	$resultd=mysqli_query($con,$DeleteQuery);
	if($resultd===true){
		$resultg->likestatus="unlike";
	}else{
	}
	
	}
	
}
else{
	$date = date('Y-m-d H:i:s');
$InsertQuery="INSERT INTO `likes`(`user_id`, `design_id`, `like_date`, `design_type`) VALUES ('$uid','$did','$date','$dtype')";
 
$result=mysqli_query($con,$InsertQuery);
if($result===true){
		$resultg->likestatus="like";
}else{
	echo 'Erro:'.mysql_error($con);
}
}
header('Content-Type: application/json');
echo json_encode($resultg);
