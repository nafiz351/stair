<?php
require("includes/smtp/PHPMailerAutoload.php");

  include 'includes/config.php';
$json = file_get_contents('php://input');
//$json='{"pickedcodes":" SPI-8-W ( Black ), SPI-5A-SCS ( Black ), SPI-3B-DC ( Black ), NPL-P-1A-P ( White )","firstname":"sana","lastname":"ameen","address":"karachi maal road","city":"karachi","phone":"533-333-3333","aditionalcmt":"cfffssss","sentto":"amnanaeem5696@gmail.com","fileattach1":"uploads/blogimg.jpg","fileattach2":"uploads/backgroundblog.png","fileattach3":"","fileattach4":"","fileattach5":"","fileattach6":"","fileattach7":"","fileattach8":"","fileattach9":"","fileattach10":""}';
//$json= '{"cid":"439","subject":"tu na","bodytamplate":"<p>\n\t<strong><span style=\"font-size:16px;\">Hi,</span></strong><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b>\n</p>\n<p style=\"text-align:left;\">\n\t<b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hotel Point Template&nbsp;Example&nbsp;</b>\n</p>\n<p style=\"text-align:left;\">\n\t<b>&nbsp;check in date :<em>&nbsp;</em><em>2021-08-19&nbsp;</em></b>\n</p>\n<p style=\"text-align:left;\">\n\t<b>Check out Date: <em>2021-08-23&nbsp;</em></b>\n</p>\n<p style=\"text-align:left;\">\n\t<b>Email of customer: <em>ghulamsayed@gmail.com&nbsp;</em></b>\n</p>\n<p style=\"text-align:left;\">\n\t<b><span style=\"color:#009900;\">So We are going to tell you that your total amount of daily rate are :</span> <em><span style=\"color:#009900;\">€ 1.280,00&nbsp;</span></em></b>\n</p>\n<p style=\"text-align:left;\">\n\t<b>ok See you on your check in time 16:00:00&nbsp;</b>\n</p>\n<p style=\"text-align:right;\">\n\t<b><strong><span style=\"background-color:#99BB00;\">&nbsp; </span></strong></b><strong><span style=\"background-color:#99BB00;\">&nbsp;</span></strong><strong><span style=\"background-color:#99BB00;\"></span></strong><strong><span style=\"background-color:#99BB00;\">Thank you</span></strong>\n</p>","tampid":"14","sentto":"amnanaeem5696@gmail.com","fileattach1":"../email/uploads/5.png","fileattach2":"../email/uploads/7.png","fileattach3":"../email/uploads/9.png","fileattach4":"../email/uploads/2.png","fileattach5":"","fileattach6":""}';
$params = json_decode($json);
$firstname=$params->firstname;
$lastname=$params->lastname;
$address=$params->address;
$city=$params->city;
$phone=$params->phone;
$aditionalcmt=$params->aditionalcmt;
$pickedcodes=$params->pickedcodes;
$sentto=$params->sentto;
$fileattach1=$params->fileattach1;
$fileattach2=$params->fileattach2;
$fileattach3=$params->fileattach3;
$fileattach4=$params->fileattach4;
$fileattach5=$params->fileattach5;
$fileattach6=$params->fileattach6;
$fileattach7=$params->fileattach7;
$fileattach8=$params->fileattach8;
$fileattach9=$params->fileattach9;
$fileattach10=$params->fileattach10;
$filescreenshot="screenshotimages/screenshot_image.png";   
 
// Attachment files 
$files = array( 
    $filescreenshot,
    $fileattach1, 
    $fileattach2, 
    $fileattach3, 
    $fileattach4, 
    $fileattach5, 
    $fileattach6 , 
    $fileattach7 , 
    $fileattach8 , 
    $fileattach9 , 
    $fileattach10 
); 
 $useremail=$sentto;
$file_tmp=$files;
$file_name=$files;
$file_tmpe=array();
$file_namee=array();
 $fromname="";
$receivername="";
$fromemail="";
$receiveremail="";
$subject="New installation qoute";
$password="";
$codesp=explode(",",$pickedcodes);
$body="<table style='border:1px solid black;'>
<tr style='border:1px solid black;' ><td style='border:1px solid black;'>Name:</td><td style='border:1px solid black;'>$firstname $lastname</td></tr>
<tr style='border:1px solid black;' ><td style='border:1px solid black;' >Email:</td><td style='border:1px solid black;' >$useremail</td></tr>
<tr style='border:1px solid black;' ><td style='border:1px solid black;' >Address:</td><td style='border:1px solid black;' >$address</td></tr>
<tr style='border:1px solid black;' ><td style='border:1px solid black;' >City:</td><td style='border:1px solid black;' >$city</td></tr>
<tr style='border:1px solid black;' ><td style='border:1px solid black;' >Telephone:</td><td style='border:1px solid black;' >$phone</td></tr>
<tr style='border:1px solid black;' ><td style='border:1px solid black;' >Comments:</td><td style='border:1px solid black;' >$aditionalcmt</td></tr>
<tr style='border:1px solid black;' ><td style='border:1px solid black;' >Design Codes:</td><td style='border:1px solid black;' ><table style='border:1px solid black;'>";
$c=count($codesp);
for($a=0; $a<$c; $a++){
	$b=$a+1;
	$body .="<tr style='border:1px solid black;' ><td style='border:1px solid black;' >$b</td><td style='border:1px solid black;' >".$codesp[$a]."</td></tr>";
}
$body .="</table></td></tr>
</table> ";
 $status='Message sent';
$query=mysqli_query($con,"SELECT * FROM `emailsettings` ");
//$num=mysqli_fetch_array($query);
$number = mysqli_num_rows($query);
$i = 1;
//echo $number-1;
if(mysqli_num_rows($query)>0)
{
	
	while($rows = mysqli_fetch_array($query)){
 		$emailtype=$rows['emailtype'];
		 $email=$rows['email'];
		 $name=$rows['name'];
		 $emailpassword=$rows['emailpassword'];
		if($emailtype=="sender"){
			$fromname=$name;
			$fromemail=$email;
			$password=$emailpassword;
		}else if($emailtype=="admin receiver"){
				
			  if ($i == $number)
   {     

			$receivername=$name;
			$receiveremail=$email;
   if(phpMailer($file_tmp, $file_name, $body, $fromname, $receivername, $fromemail, $receiveremail, $subject, $password)){
	   $status='Message has been sent to '.$receiveremail;
   }
               $receivername=$firstname." ".$lastname;
			$receiveremail=$useremail;
      if(phpMailer($file_tmpe, $file_namee, $body, $fromname, $receivername, $fromemail, $receiveremail, $subject, $password)){
	   $status='Message has been sent to '.$receiveremail;
   }	
   }else{
	   
			$receivername=$name;
			$receiveremail=$email;
		if(phpMailer($file_tmp, $file_name, $body, $fromname, $receivername, $fromemail, $receiveremail, $subject, $password)){
	  $status='Message has been sent to '.$receiveremail;
   }
   }
		}else if($emailtype=="other receiver"){
				
			  if ($i == $number)
   {     

			$receivername=$name;
			$receiveremail=$email;
   if(phpMailer($file_tmpe, $file_namee, $body, $fromname, $receivername, $fromemail, $receiveremail, $subject, $password)){
	   $status='Message has been sent to '.$receiveremail;
   }
               $receivername=$firstname." ".$lastname;
			$receiveremail=$useremail;
      if(phpMailer($file_tmpe, $file_namee, $body, $fromname, $receivername, $fromemail, $receiveremail, $subject, $password)){
	   $status='Message has been sent to '.$receiveremail;
   }	
   }else{
	   
			$receivername=$name;
			$receiveremail=$email;
		if(phpMailer($file_tmpe, $file_namee, $body, $fromname, $receivername, $fromemail, $receiveremail, $subject, $password)){
	  $status='Message has been sent to '.$receiveremail;
   }
   }
		}
		
	

   $i ++;
 	}
	
	
}

   function phpMailer($file_tmp, $file_name, $body, $fromname, $receivername, $fromemail, $receiveremail, $subject, $password){
	   
$mail = new PHPMailer();
//echo 'ki';
$mail->IsSMTP();

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = true; 
$mail->FromName = $fromname;
	$mail->Username = $fromemail;
	$mail->Password = $password;
	for($i=0; $i<count($file_tmp); $i++){
		
$mail->AddAttachment($file_tmp[$i], $file_name[$i]);
	}
$mail->From = $fromemail;
$mail->SMTPSecure = 'tls'; 
$mail->Port = 587; //SMTP port
$mail->addAddress($receiveremail, $receivername);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody = $body;

if(!$mail->Send())
{
//echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}
else{
//echo "<script>alert('Message has been sent')</script>";
}
   }	
	
	
class Result {}
$response = new Result();
//$response->status = $files;
$response->status = $status;

header('Content-Type: application/json');
echo json_encode($response);
