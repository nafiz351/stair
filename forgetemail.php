<!DOCTYPE html>
<?php
include "includes/config.php";
include('includes/smtp/PHPMailerAutoload.php');

session_start();
error_reporting(0);
?>
<?php  

if(isset($_POST['change']))
{
   $email=$_POST['femail'];
   
//  echo "<script>alert('Your email is ".$email."');</script>";
$query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' ");
$num=mysqli_fetch_array($query);
if($num>0)
{
	$myuserid=$num['id'];
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
//$to_email = "amnanaeem5696@gmail.com";
$to_email = $num['email'];
$subject1 = "New  confirmation email";
$fromemail="stairstepsdesigns@gmail.com";
$body ="<p><b>Dear customer,</b><br/> click on link</p>";
$body .="<a href='".dirname($actual_link)."/forgetpassword.php?id=".$myuserid."' >click here</a>";
$headers = "From: ".$fromemail."\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
$headers .="Reply-To: noreply@stairstepsdesigns.com";



		//echo "<script>alert('Email process...');</script>";

$html=$body;
function smtp_mailer($to,$subject, $msg){
    
		//echo "<script>alert('Email in function...');</script>";
	$mail = new PHPMailer(); 
	//$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "stairstepsdesigns@gmail.com";
	//$mail->Password = "Stair@1234";vqldcpyyblmhovor
	$mail->Password = "ejilgtjztmcemumk";

	$mail->SetFrom("stairstepsdesigns@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
		
		echo "<script>alert('Email sending fail...');</script>";
	}else{
		return "<script>alert('Email sent to ".$to."'); window.location = 'recomendeddesign.php';</script>";
	}
}

//echo "<script>alert('".dirname($actual_link)."');</script>";
echo smtp_mailer($to_email,$subject1,$html);
/*
if (mail($to_email, $subject, $body, $headers)) {
  //  echo "Email successfully sent to $to_email...";
  echo "<script>alert('Email successfully sent to $to_email...');</script>";
} else {
   // echo "Email sending failed...";
  echo "<script>alert( 'Email sending failed...from '+'$fromemail' );</script>";
}

*/





}
else{
	
  echo "<script>alert('Invalid Email');</script>";
}

}

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Verifyemail</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo/logo-gray-mini.png" />
	<style>
	input{
		color:white !important;
	}
	
	</style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Email Verification</h3>
				<span>  <?php echo htmlentities($_SESSION['errmsg']);
												 
												  echo htmlentities($_SESSION['errmsg']="");
												  ?>
												  </span>
                <form action="" method="post" class="aa-login-form" id="login-form" autocomplete="off" >
                  <div class="form-group">
                    <label>Enter Email to set New Password *</label>
                    <input type="email" name="femail" placeholder="Your Email" id="logemail" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="change" id="logbtn" class="btn btn-primary btn-block enter-btn">Submit</button>
                  </div>
                  <p class="sign-up">Back to Login?<a href="login.php"> Login</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>