<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
include "includes/config.php";
$myid=$_GET['id'];

    //echo "<script>alert('Your id is ".$myid."');</script>";
  if(isset($_POST['Newpassword']) )
  {
    $np=md5($_POST['nnpassword']);
    $cp=md5($_POST['ncopassword']);
	if($np==$cp){
		    $query=mysqli_query($con,"update users set password='$np' where id='$myid'");
    if($query)
    {
		
	//$_SESSION['username']=$name;
	
    echo "<script>alert('Your password has been updated'); window.location = 'recomendeddesign.php';</script>";
	
	}else{
		
    echo "<script>alert('Your password not match to confirm password');</script>";
	}

    }
  }


  date_default_timezone_set('Asia/Kolkata');// change according timezone
  $currentTime = date( 'd-m-Y h:i:s A', time () );



?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Password</title>
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
                <h3 class="card-title text-left mb-3">Create New Password</h3>
				<span>  <?php echo htmlentities($_SESSION['errmsg']);
												 
												  echo htmlentities($_SESSION['errmsg']="");
												  ?>
												  </span>
                <form action="" method="post" class="aa-login-form" id="login-form" autocomplete="off" >
                  <div class="form-group">
                    <label>New Password *</label>
                    <input type="password" placeholder="New password" name="nnpassword" required="required"  autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password *</label>
                    <input type="password" placeholder="Confirm password" name="ncopassword" required="required"   autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="Newpassword" id="logbtn" class="btn btn-primary btn-block enter-btn">Save</button>
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