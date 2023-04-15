<!DOCTYPE html>
<?php
include "includes/config.php";

session_start();
error_reporting(0);
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recomended Designs</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
 <script src="https://kit.fontawesome.com/7f0de4659f.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo/logo-gray-mini.png" />
	<style>
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
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #161616; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
 /* background: #df4759; */
  background: gray; 
}
	</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     
  <?php include "includes/Filternavigation.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-print-none d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo/logo-gray-mini.png" style="min-width:100%;" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" id="menbtn" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
            
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-web"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Browse Pages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="index.php" style="background-color:rgba(0,0,0,0);" id="rdes" >
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Design Tool</p>
                      <p class="text-muted ellipsis mb-0">Create a new Design</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item"  href="customerDesigns.php" id="cdes"  >
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Customer Designs</p>
                      <p class="text-muted ellipsis mb-0">Saved by other users </p>
                    </div>
                  </a>
				  <?php if(strlen($_SESSION['login']))
	{   ?>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" id="mdes"  href="myDesigns.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">My Designs</p>
                      <p class="text-muted ellipsis mb-0">Your Saved Designs</p>
                    </div>
                  </a>
	<?php } ?>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">StairsSteps Designs</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                  
					 <?php if(strlen($_SESSION['login']))
	{   ?>
                    <img class="img-xs rounded-circle" src="assets/images/faces/<?php echo ($_SESSION['avatar'] == '' || $_SESSION['avatar'] == null) ? 'face0' : $_SESSION['avatar']; ?>.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo htmlentities($_SESSION['username']);?></p>
					<?php } else {?> 
              <img class="img-xs rounded-circle" src="assets/images/faces/face0.jpg" alt="">
            <?php } ?>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  	  <?php if(strlen($_SESSION['login']))
    { ?>
				  <h6 class="p-3 mb-0" data-bs-toggle="modal" data-bs-target="#settings" >Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item"  href="profilesettings.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1" >Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="includes/logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1" >Log out</p>
                    </div>
                  </a>
				  <?php } else 	  if(strlen($_SESSION['login'])==0)
    { ?>
                  <div class="dropdown-divider"></div>
				   <a class="dropdown-item preview-item" id="mdes"  href="login.php">
                    
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Login/Signup</p>
                    </div>
                  </a>
                 <?php } ?>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
		  <form method="post"  >
            <div class="row" id="filterdata"  >
			  	<?php
$ret=mysqli_query($con,"select * from recommended_designs");
$countcol=0;
while ($row=mysqli_fetch_array($ret)) 
{
	?>
			
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex align-items-center align-self-start">
                         <img src="recommendeddesigns/<?php echo $row['image'];?>" alt="recommendeddesigns/<?php echo $row['image'];?>"  width="100%" height="225" />
                        </div>
                      </div>
                    </div>
                    <h6 class="text-light font-weight-normal">ID: <span style="color:red;"><?php echo $row['id'];?></span></h6>
                    <h6 class="text-muted font-weight-normal"><?php echo $row['Name'];?></h6>
                    <div class="row">
                      <div class="col-10">
                        <div class="d-flex align-items-left align-self-start">
						
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" onclick="like(this.id);" id="<?php echo $row['id'];?>" class="btn btn-outline-secondary">
									    	<?php
						$firstid=$row['id'];
						$thisid=$row['id'];
$retl=mysqli_query($con,"select * from likes WHERE design_id='$thisid' AND user_id='".$_SESSION['id']."' AND design_type='recommended'");
if(mysqli_fetch_array($retl)>0){

?>

							<i class="mdi mdi-heart"></i>
 <?php

}else{
	
	?>
							
							<i class="mdi mdi-heart-outline"></i>
							
							
							<?php
} ?>
							</button>
                            <button type="button"  onclick="edit(<?php echo $thisid ;?>)" class="btn btn-outline-secondary"><i class="mdi mdi-pencil-box-outline"></i></button>
                            <button type="button"  class="btn btn-outline-secondary sharer" id="s<?php echo $thisid ;?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="mdi mdi-share-variant"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="d-flex align-items-center align-self-start">
                              <i class="mdi mdi-heart"></i>
                            <?php	$retc=mysqli_query($con,"select * from likes WHERE design_id='$thisid' AND design_type='recommended'");
			$likecount=0;
	
	while ($rowc=mysqli_fetch_array($retc)) 
{
	$likecount=$likecount+1;
	// echo $likecount;
}?>
				<span>  <?php echo $likecount;?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  
			  
	   <?php } ?>
			  
            </div>
			</form>
          </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
	
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Share Design with others</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

  <?php include "includes/sharedesign.php"; ?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal" >OK</button>
      </div>
    </div>
  </div>
</div>
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
	<script>
function copyToClipboard(text) {
    var dummy = document.createElement("input");
    // to avoid breaking orgain page when copying more words
    // cant copy when adding below this code
    // dummy.style.display = 'none'
    document.body.appendChild(dummy);
    //Be careful if you use texarea. setAttribute('value', value), which works with "input" does not work with "textarea". – Eduard
    dummy.value = text;
    dummy.select();
    document.execCommand("copy");
    document.body.removeChild(dummy);
}


var fulllink="";
$(document).on('click', '.sharer', function(e) {
        // Add other DIV
       // $(this).append('<div class="other">XYZ</div>');
	   var url = window.location.href;
url = url.substring(0, url.lastIndexOf("/") + 1);
	   var shid= $(this).attr('id');
	   shid= shid.match(/\d+/g);
	//   alert('getid here  '+shid);
	    fulllink=url+"/index.php?recomend_design="+shid;
	   // fulllink="https://arfaweb.com/";
		$('#tx').val(fulllink);
    })
    .on('click', 'a#fb', function(e) {
        //$(this).remove();
	 window.open('https://www.facebook.com/sharer/sharer.php?u='+fulllink, '_blank').focus();
		//alert("here link");
        e.stopPropagation();
    })
    .on('click', 'a#tr', function(e) {
        //$(this).remove();
	 window.open('https://twitter.com/share?url='+fulllink, '_blank').focus();
//alert("here link");
        e.stopPropagation();
    })
    .on('click', 'a#ln', function(e) {
        //$(this).remove();
	 window.open('https://www.linkedin.com/share?url='+fulllink, '_blank').focus();
		//alert("here link");
        e.stopPropagation();
    })
    .on('click', 'a#insta', function(e) {
        //$(this).remove();
	 window.open('https://www.instagram.com/sharer?u='+fulllink, '_blank').focus();
		//alert("here link");
        e.stopPropagation();
    })
    .on('click', 'a#cpy', function(e) {
		
         copyToClipboard(fulllink);
		alert(fulllink);
        e.stopPropagation();
    })
    .on('click', 'a#mal', function(e) {
        //$(this).remove();
	 window.open('mailto:?subject='+fulllink, '_blank').focus();
		//alert("here link");
        e.stopPropagation();
    })
    .on('click', 'a#whtapp', function(e) {
        //$(this).remove();
	 window.open('https://api.whatsapp.com/send?text='+fulllink, '_blank').focus();
		//alert("here link");
        e.stopPropagation();
    });
var fby="1";
var spin="0";
var handr="0";
var nwlp="0";
var bkgr="0";
$(document).ready(function(){
	
//$('#hul li').on('click', function() {  
    $('#hul li.active').removeClass('active');
    $('#rdes').addClass('active');    
	//alert($('#rdes').text());
//});

$('#edit').on('click', function() {  
   // $('#logotour').popover('show');
});

 $("#filterby").on('click', '.cf', function(){
	  $('.cf').css('color', '#6c757d');
  $(this).css('color', 'white');
	 fby=$(this).attr('value');
		myfilterby();
	});
 $("#spindle").on('click', '.spi', function(){
	  $('.spi').css('color', '#6c757d');
  $(this).css('color', 'white');
	 spin=$(this).attr('value');
		myfilter();
	});
 $("#handrails").on('click', '.hand', function(){
	  $('.hand').css('color', '#6c757d');
  $(this).css('color', 'white');
	 handr=$(this).attr('value');
		myfilter();
	});
 $("#newel").on('click', '.nwl', function(){
	  $('.nwl').css('color', '#6c757d');
  $(this).css('color', 'white');
	 nwlp=$(this).attr('value');
		myfilter();
	});
 $("#backgrounds").on('click', '.bkg', function(){
	  $('.bkg').css('color', '#6c757d');
  $(this).css('color', 'white');
	 bkgr=$(this).attr('value');
		myfilter();
	});
});
function myfilterby() {
	
var filterby=fby;
if(filterby=='1'){
	$.ajax({
	type: "POST",
	url: "editorphpfiles/filterspindalname.php",
	data:'des_id='+filterby,
	success: function(data){
		$("#spindle").html(data);
	}
	});
	$.ajax({
	type: "POST",
	url: "editorphpfiles/filterhandrailsname.php",
	data:'des_id='+filterby,
	success: function(data){
		$("#handrails").html(data);
	}
	});
	$.ajax({
	type: "POST",
	url: "editorphpfiles/filternewelname.php",
	data:'des_id='+filterby,
	success: function(data){
		$("#newel").html(data);
	}
	});
}else if(filterby=='2'){
	$.ajax({
	type: "POST",
	url: "editorphpfiles/filterspindalcode.php",
	data:'des_id='+filterby,
	success: function(data){
		$("#spindle").html(data);
	}
	});
	$.ajax({
	type: "POST",
	url: "editorphpfiles/filterhandrailscode.php",
	data:'des_id='+filterby,
	success: function(data){
		$("#handrails").html(data);
	}
	});
	$.ajax({
	type: "POST",
	url: "editorphpfiles/filternewelcode.php",
	data:'des_id='+filterby,
	success: function(data){
		$("#newel").html(data);
	}
	});
}

}
function myfilter() {
	
var filterby=fby;
var spindle=spin;
var handrails=handr;
var newel=nwlp;
var backgrounds=bkgr;
var uid="<?php echo $_SESSION['id'];?>";
		//alert('he'+filterby);
			  var data=[];
          var values={
        "userid":uid,
		"status":'recommended',
        "filterby":filterby,
        "spindle":spindle,
        "handrails":handrails,
		"newel":newel,
		"backgrounds":backgrounds
      };
	  data=values;
      var json=JSON.stringify(data);
      console.log(json);
       $.ajax({
        type:"POST",
        url:"editorphpfiles/filterdesigns.php",
        data:json,
        success:function(response){
         // alert('success');
                        
      $("#filterdata").html(response);
        }
      });
	  
	 
}
function edit(va){
	var id=va;
	//alert(id);
  window.location.replace('index.php?recomend_design='+id);
}
function like(did){
	var mid=did;
    var uid="<?php echo $_SESSION['id'];?>";
	//alert("design id: "+mid+" and user id: "+uid);
			  var data=[];
          var values={
        "designid":mid,
		"userid":uid,
		"designtype":'recommended'
      };
		 data=values;
      var json=JSON.stringify(data);
      console.log(json);
	  if(uid==""){
		//  alert('login first hunh ');
		  $('#loginsignup').modal('show');
	  }else{
		  $.ajax({
        type:"POST",
        url:"editorphpfiles/getlikes.php",
        data:json,
        success:function(response){
       // alert("here"+mid);
		//alert(response.likestatus);
             $(mid).find('i').remove();
          if(response.likestatus=="like"){
			  $(mid).html($('<i/>',{class:'fa fa-heart'}));
			  location.reload();
		  }else if(response.likestatus=="unlike"){
			  $(mid).html($('<i/>',{class:'fa fa-heart-o'}));
			  location.reload();
		  }
        }
      });
	  }
		 
	  
	  
}
</script>
  </body>
</html>
