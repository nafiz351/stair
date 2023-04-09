<!DOCTYPE html>
<?php
include "includes/config.php";

session_start();
error_reporting(0);
?>
<?php 


if(isset($_POST['register']))
{
$name=$_POST['user_name'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");
if($query)
{
  echo "<script>alert('Registration successful');location.replace('login.php');</script>";
}
else{
echo "<script>alert('name ".$name." password ".$password."');</script>";
}
}

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup</title>
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
	#page_loader{
  display: none;
} 

.loaddiv{
	background-color:rgba(0,0,0,1);height:100%;width:100%;position:fixed;z-index:999999;
}
.gifload{
	z-index:9999999;background-color:black; position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin:auto;height:5em;width:6em;
}
	</style>
  </head>
  <body>
    <div id="page_loader" style="" class="loaddiv" >
  <center><img style="" class="gifload" src="admin/assets/images/stairtool.gif" alt="loading" /></center></div>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto" style="opacity:0.9;">
              <div class="card-body px-5 py-5" id="verifyemailbody" >
                <h3 class="card-title text-left mb-3">Register</h3>
                <form action="" method="post" class="aa-login-form" >
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="verifyemail"  placeholder="Your Email"  autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="button" id="verifyemailsend" name="" class="btn btn-primary btn-block enter-btn">Sign Up</button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="login.php">Login</a></p>
                </form>
              </div>
              <div class="card-body px-5 py-5" id="verifycodebody" style="display:none" >
                <h3 class="card-title text-left mb-3">Register</h3>
                <form action="" method="post" class="aa-login-form" >
                  <div class="form-group">
                    <label>A Code has been sent to your Email...</label>
                    <input type="text" id="code"  placeholder="Enter 6 digit code..."  autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="button" id="codesend" name="" class="btn btn-primary btn-block enter-btn">Confirm</button>
                  </div>
                </form>
              </div>
              <div class="card-body px-5 py-5" id="confirmedbody" style="display:none;" >
                <h3 class="card-title text-left mb-3">Register</h3>
                <form action="" method="post" class="aa-login-form" >
                  <div class="form-group">
                    <label>Username</label>
                    <input  type="text" name="user_name" placeholder="Your Full Name" id="logname" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email"  placeholder="Your Email" id="logemail" autocomplete="off" class="form-control p_input" readonly>
                  </div>
                  <div class="form-group">
                    <label>Cell Phone</label>
                    <input  type="number" name="contactno"  placeholder="Your Contact" id="logphone" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password"  placeholder="Your Password" id="logpass" autocomplete="off" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="submit" id="" name="register" class="btn btn-primary btn-block enter-btn">Sign Up</button>
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
	<script>
	
	const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};
	
	
	$("#verifyemailsend").click(function(){
	//alert('hyhu');

	var email = $('#verifyemail').val();
	
	 if (validateEmail(email)) {
   //alert(email);
     $('#page_loader').css('display', "block");
	    $.ajax({
        type:"POST",
        url:"verifyemail.php",
        data:'emailregister='+email,
        success:function(response){
			//alert(response);
			if(response=="existed"){
				alert("This email already existed");
				location.reload();
			}else{
          //alert(response.roomid);
		  
           $('#page_loader').css('display', "none");
      // alert(response);
	   $('#verifyemailbody').css('display', 'none');
	   $('#verifycodebody').css('display', 'block');
	   //location.reload();
	   var newcode=response;
	   $("#codesend").click(function(){
	//alert('hyhu');

	var code = $('#code').val();
	var okcode=code.toString().length;
	//alert(okcode);
	if(okcode==6){
		
	//	alert(code+' ok hai '+newcode);
		if(code==newcode){
			
	   $('#verifyemailbody').css('display', 'none');
	   $('#verifycodebody').css('display', 'none');
	   $('#logemail').val(email);
	   $('#confirmedbody').css('display', 'block');
		}else{
			alert('Your Email not verified');
			location.reload();
		}
	  
	}else{
		alert('Your code is not valid');
	}
});
		}
        }
      });
  } else {
   alert('email is not valid');
  }
	
});
	
	</script>
  </body>
</html>