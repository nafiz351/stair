<!DOCTYPE html>
<?php
include "includes/config.php";

session_start();
error_reporting(0);
?>
<?php 
  if(isset($_POST['update_profile']) )
  {
    $name=$_POST['username'];
    $contactno=$_POST['contactno'];
    $query=mysqli_query($con,"update users set name='$name',contactno='$contactno' where id='".$_SESSION['id']."'");
    if($query)
    {
		
	$_SESSION['username']=$name;
    echo "<script>alert('Your info has been updated'); window.location = 'recomendeddesign.php';</script>";
	
    }
  }


  date_default_timezone_set('Asia/Kolkata');// change according timezone
  $currentTime = date( 'd-m-Y h:i:s A', time () );


  if(isset($_POST['update_password']))
  {
	if($_POST['npassword']==$_POST['copassword']){
		
  $sql=mysqli_query($con,"SELECT password FROM  users where password='".md5($_POST['cpassword'])."' && id='".$_SESSION['id']."'");
  $num=mysqli_fetch_array($sql);
  if($num>0)
  {
   $con=mysqli_query($con,"update users set password='".md5($_POST['npassword'])."', updationDate='$currentTime' where id='".$_SESSION['id']."'");
  echo "<script>alert('Password Changed Successfully !!');window.location = 'recomendeddesign.php';</script>";
  }
  else
  {
    echo "<script>alert('Current Password not match !!');</script>";
  }
  
  }else{ echo "<script>alert('Confirm Password not match with New!!');</script>";} 
  
  
  }

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Settings</title>
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
                <h3 class="card-title text-left mb-3">Profile Settings</h3>
				
                <form action="" method="post"name="changepass" onSubmit="return valid();" >
                  <div class="form-group">
                    <label>Current password</label>
                    <input  type="password" name="cpassword" placeholder="Current password" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>New password</label>
                    <input type="password" placeholder="New password" name="npassword"  autocomplete="off" class="form-control p_input" >
                  </div>
                  <div class="form-group">
                    <label>Confirm password</label>
                    <input  type="password" placeholder="Confirm password" name="copassword" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    
                    <a href="profilesettings.php" class="forgot-pass">Change profile settings</a>
                  </div>
                  <div class="text-center">
                    <button type="submit"   name="update_password"  class="btn btn-primary btn-block enter-btn">Update</button>
                  </div>
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