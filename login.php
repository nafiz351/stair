<!DOCTYPE html>
<?php
include "includes/config.php";

session_start();
error_reporting(0);
?>
<?php  
if(isset($_POST['login']))
{
   $email=$_POST['uemail'];
   $password=md5($_POST['upassword']);
$query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="recomendeddesign.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['avatar']=$num['avatar'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['name'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>location.replace('recomendeddesign.php');</script>";
header("location: http://$host$uri/$extra");

exit();
}
else
{
$extra="recomendeddesign.php";
$email=$_POST['uemail'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}
}

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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
   <link rel="shortcut icon" href="assets/images/logo/favicon.ico" />
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
            <div class="card col-lg-4 mx-auto" style="opacity:0.9;" >
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
				<span>  <?php echo htmlentities($_SESSION['errmsg']);
												 
												  echo htmlentities($_SESSION['errmsg']="");
												  ?>
												  </span>
                <form action="" method="post" class="aa-login-form" id="login-form" autocomplete="off" >
                  <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="uemail" placeholder="Your Email" id="logemail" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" name="upassword" placeholder="Your Password" id="logpass" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    
                    <a href="forgetemail.php" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login" id="logbtn" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="register.php"> Sign Up</a></p>
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