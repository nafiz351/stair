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
  $avatar = $_POST['avatar'];
  $query=mysqli_query($con,"update users set name='$name',contactno='$contactno', avatar='$avatar' where id='".$_SESSION['id']."'");
  if($query)
  {
    
   $_SESSION['username']=$name;
   $_SESSION['avatar']=$avatar;
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
  <link rel="shortcut icon" href="assets/images/logo/favicon.ico" />
  <style>
   input{
    color:white !important;
  }

  #logemail {
    background-color: #444;
  }

  img.faceImg {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }

  .cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
  }

  .cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
  .cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
    -moz-filter: none;
    filter: none;
    border: 3px solid red;
    background-color: #FFFFFF;
    width: 56px;
    height: 56px;
    border-radius:50%;
  }
  .drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:50px;height:70px;
    -webkit-transition: all 100ms ease-in;
    -moz-transition: all 100ms ease-in;
    transition: all 100ms ease-in;
    /*-webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
    -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
    filter: brightness(1.8) grayscale(1) opacity(.7);*/
  }
  .drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
    -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
    filter: brightness(1.2) grayscale(.5) opacity(.9);
  }

  /* Extras */
  a:visited{color:#888}
  a{color:#444;text-decoration:none;}
  p{margin-bottom:.3em;}
  span.cc{ color:#6d84b4 }
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
              <?php
              $query=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
              while($row=mysqli_fetch_array($query))
              {
                ?>
                <form action="" method="post" class="aa-login-form" >
                  <div class="form-group">
                    <label>Username</label>
                    <input  type="text" name="username" value="<?php echo $row['name'];?>" placeholder="Your Full Name" id="logname" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email"  placeholder="Your Email" id="logemail" autocomplete="off" class="form-control p_input" value="<?php echo $row['email'];?>"  readonly>
                  </div>
                  <div class="form-group">
                    <label>Cell Phone</label>
                    <input  type="number" name="contactno" value="<?php echo $row['contactno'];?>"  placeholder="Your Contact" id="logemail" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Avatar</label>
                    <!-- <img class="faceImg form-control p_input" src="assets/images/faces/face1.jpg"/> -->
                    <div class="cc-selector">

                      <?php 
                      for ($avatarImageCount = 1; $avatarImageCount <= 22; $avatarImageCount++) {
                        ?>
                        <input 
                        <?php echo $row['avatar'] == $avatarImageCount ? 'checked' : '' ?>
                        id="<?php echo $avatarImageCount; ?>" type="radio" name="avatar" value="<?php echo $avatarImageCount; ?>" />
                        <label class="drinkcard-cc face<?php echo $avatarImageCount; ?>" for="<?php echo $avatarImageCount; ?>">
                          <img style="padding:0rem" class="faceImg form-control p_input" src="assets/images/avatar/<?php echo $avatarImageCount; ?>.png"/></label>
                          <?php 
                        }
                        
                        ?>
                      </div>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                      
                      <a href="changepassword.php" class="forgot-pass">Change password</a>
                    </div>
                    <div class="text-center">
                      <button type="submit"   name="update_profile"  class="btn btn-primary btn-block enter-btn">Update</button>
                      <a href="recomendeddesign.php"><button type="button"   name="cancel_update_profile"  class="btn btn-danger btn-block enter-btn">Cancel</button></a>
                    </div>
                  </form>
                <?php } ?>  
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