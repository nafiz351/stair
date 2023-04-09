<!DOCTYPE html>
<?php 


?>
<html lang="en"><head>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="s">
<meta name="author" content="">
<meta name="keywords" content="">
   <script src="https://kit.fontawesome.com/7f0de4659f.js" crossorigin="anonymous" ></script>
          <link href="https://code.jquery.com/ui/1.13.0/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
         
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!--  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.12.0/css/bootstrap-tour.css"> -->
         <link rel="stylesheet" type="text/css" href="dist/bootstrap_tour5.css">
         <link rel="stylesheet" type="text/css" href="dist/ambiance.css">
        
		    

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
       
       
<title>Stair Steps</title>

<style id="" media="all">
.areatxt:focus{
	outline:none;
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
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 200px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}
/* START TOOLTIP STYLES */
[tooltip] {
  position: relative; /* opinion 1 */
}

/* Applies to all tooltips */
[tooltip]::before,
[tooltip]::after {
  text-transform: none; /* opinion 2 */
  font-size: .9em; /* opinion 3 */
  line-height: 1;
  user-select: none;
  pointer-events: none;
  position: absolute;
  display: none;
  opacity: 0;
}
[tooltip]::before {
  content: '';
  border: 5px solid transparent; /* opinion 4 */
  z-index: 1001; /* absurdity 1 */
}
[tooltip]::after {
  content: attr(tooltip); /* magic! */
  
  /* most of the rest of this is opinion */
  font-family: Helvetica, sans-serif;
  text-align: center;
  
  /* 
    Let the content set the size of the tooltips 
    but this will also keep them from being obnoxious
    */
  min-width: 21em;
  max-width: 21em;
  white-space: initial;
 /* overflow: hidden;
  text-overflow: ellipsis;*/
  padding: 1ch 1.5ch;
  border-radius: .3ch;
  box-shadow: 0 1em 2em -.5em rgba(0, 0, 0, 0.35);
  background: #333;
  color: #fff;
  z-index: 1000; /* absurdity 2 */
}

/* Make the tooltips respond to hover */
[tooltip]:hover::before,
[tooltip]:hover::after {
  display: block;
}

/* don't show empty tooltips */
[tooltip='']::before,
[tooltip='']::after {
  display: none !important;
}

/* FLOW: UP */
[tooltip]:not([flow])::before,
[tooltip][flow^="up"]::before {
  bottom: 100%;
  border-bottom-width: 0;
  border-top-color: #333;
}
[tooltip]:not([flow])::after,
[tooltip][flow^="up"]::after {
  bottom: calc(100% + 5px);
}
[tooltip]:not([flow])::before,
[tooltip]:not([flow])::after,
[tooltip][flow^="up"]::before,
[tooltip][flow^="up"]::after {
  left: 50%;
  transform: translate(-50%, -.5em);
}

/* FLOW: DOWN */
[tooltip][flow^="down"]::before {
  top: 100%;
  border-top-width: 0;
  border-bottom-color: #333;
}
[tooltip][flow^="down"]::after {
  top: calc(100% + 5px);
}
[tooltip][flow^="down"]::before,
[tooltip][flow^="down"]::after {
  left: 50%;
  transform: translate(-50%, .5em);
}

/* FLOW: LEFT */
[tooltip][flow^="left"]::before {
  top: 50%;
  border-right-width: 0;
  border-left-color: #333;
  left: calc(0em - 5px);
  transform: translate(-.5em, -50%);
}
[tooltip][flow^="left"]::after {
  top: 50%;
  right: calc(100% + 5px);
  transform: translate(-.5em, -50%);
}

/* FLOW: RIGHT */
[tooltip][flow^="right"]::before {
  top: 50%;
  border-left-width: 0;
  border-right-color: #333;
  right: calc(0em - 5px);
  transform: translate(.5em, -50%);
}
[tooltip][flow^="right"]::after {
  top: 50%;
  left: calc(100% + 5px);
  transform: translate(.5em, -50%);
}

/* KEYFRAMES */
@keyframes tooltips-vert {
  to {
    opacity: .9;
    transform: translate(-50%, 0);
  }
}

@keyframes tooltips-horz {
  to {
    opacity: .9;
    transform: translate(0, -50%);
  }
}

/* FX All The Things */ 
[tooltip]:not([flow]):hover::before,
[tooltip]:not([flow]):hover::after,
[tooltip][flow^="up"]:hover::before,
[tooltip][flow^="up"]:hover::after,
[tooltip][flow^="down"]:hover::before,
[tooltip][flow^="down"]:hover::after {
  animation: tooltips-vert 300ms ease-out forwards;
}

[tooltip][flow^="left"]:hover::before,
[tooltip][flow^="left"]:hover::after,
[tooltip][flow^="right"]:hover::before,
[tooltip][flow^="right"]:hover::after {
  animation: tooltips-horz 300ms ease-out forwards;
}

</style>


<link href="admin/css/mainform.css" rel="stylesheet" media="all">
<meta name="robots" content="">
</head>
<body class="bg-blue1" style="">

  <div id="page_loader" style="" class="loaddiv" >
  <center><img style="" class="gifload" src="admin/assets/images/stairtool.gif" alt="loading" /></center></div>
<div class="page-wrapper bg-blue  font-robo">
<div class="page-wrapper bg-blue2 p-t-0 p-b-0 font-robo">
<div class="wrapper wrapper--w880" style="overflow-y: hidden;" >
<div class="card card-1">
<div class="card-heading"><img src="admin/images/logoform.png" alt="logo here" style="width:130px; height:30px;" />


</div>

<div class="card-body" style="" id="verifyemailbody" >
<h2 class="title text-center" style="" >Email Verification</h2>


<div class="">
<div class="row ">

<div class="col ">
<form method="POST" action="" enctype="multipart/form-data">

<div class="input-group">
<input class="input--style-1" type="email" placeholder="Enter Email..." name="verifyemail"  id="verifyemail" required>
</div>
<div class="row" style="position:relative;padding-bottom:10px;">
<div class="col">
<div class="p-t-0 " style="float:right;" >
 <button class="btn btn--radius text-right btn--green" style="background:#E0B544;margin-top:0px !important;" id="verifyemailsend" type="button" name="submit2">Submit</button>
</div>
</div></div>
</form>
</div>
</div>


</div>
</div>
<div class="card-body" style="display:none;" id="verifycodebody" >
<h2 class="title text-center" style="" >Email Verification</h2>


<div class="">
<div class="row ">

<div class="col ">
<form method="POST" action="" enctype="multipart/form-data">

<div class="input-group">
<input class="input--style-1" type="number" placeholder="Enter 6 digit Code..." name="code"  id="code" required>
</div>
<div class="row" style="position:relative;padding-bottom:10px;">
<div class="col">
<div class="p-t-0 " style="float:right;" >
 <button class="btn btn--radius text-right btn--green" style="background:#E0B544;margin-top:0px !important;" id="codesend" type="button" name="submit2">Submit</button>
</div>
</div></div>
</form>
</div>
</div>


</div>
</div>
<div class="card-body" style="display:none;" id="formbody">
<h2 class="title text-center" style="" >Installation Quote</h2>


<div class="">
<div class="row ">
<div class="col-md-4 ">
<div class="input-group">

   <form id="fupForm"   enctype="multipart/form-data" >
<center><label  tooltip="We need to see entire work area. Upload up to 10 images."   class="btn btn-warning text-center" id="" style="background:#E0B544;padding:2px 7px;">Attach your project images <i class="fa fa-paperclip" style="color:#fff;padding:0;" aria-hidden="true"></i> 
<input type="file" style="display:none;" name="file" id="file" /></label>
</center>
						
      <input type="submit" value="Upload file" style="display:none;" class="submitBtn" name="submit" id="submit" />
	  </form>
</div>

<div style="background:url('screenshotimages/screenshot_image.png') no-repeat;border:1px solid #CACDC9; background-size: 100%;height:220px;width:100%;overflow:scroll;" id="boxc" class="input-group" >

 <p class="statusMsg"></p>
 <p id="statusMsg1"></p>
 <p id="statusMsg2"></p>
 <p id="statusMsg3"></p>
 <p id="statusMsg4"></p>
 <p id="statusMsg5"></p>
 <p id="statusMsg6"></p>
 <p id="statusMsg7"></p>
 <p id="statusMsg8"></p>
 <p id="statusMsg9"></p>
 <p id="statusMsg10"></p>
  <input type="text" style="display:none;" name="filepath" id="filepath1" /> 
  
  <input type="text" style="display:none;" name="filepath" id="filepath2" /> 
  
  <input type="text" style="display:none;" name="filepath" id="filepath3" /> 
  
  <input type="text" style="display:none;" name="filepath" id="filepath4" /> 
  
  <input type="text" style="display:none;" name="filepath" id="filepath5" /> 
  
  <input type="text" style="display:none;" name="filepath" id="filepath6" /> 
  <input type="text" style="display:none;" name="filepath" id="filepath7" /> 
  <input type="text" style="display:none;" name="filepath" id="filepath8" /> 
  <input type="text" style="display:none;" name="filepath" id="filepath9" /> 
  <input type="text" style="display:none;" name="filepath" id="filepath10" /> 
</div>


</div>
<div class="col-md-8 ">
<form method="POST" action="" enctype="multipart/form-data">
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<label>First Name</label>
<input class="input--style-1" type="text" placeholder="FIRST NAME" name="firstname" id="firstname" required>
</div></div>
<div class="col-2">
<div class="input-group">
<label>Last Name</label>
<input class="input--style-1" type="text" placeholder="LAST NAME" name="lastname" id="lastname" required>
</div></div>
</div>
<div class="input-group">
<label>Address</label>
<input class="input--style-1" type="text" placeholder="ADDRESS" name="address"  id="address" required>
</div>
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<label>City</label>
<input class="input--style-1" type="text" placeholder="CITY" name="city"  id="city" required>
</div>
</div>
<div class="col-2">
<div class="input-group">
<label tooltip="Enter numbers without spaces/dashes">Phone<i class=" fa fa-info-circle"  aria-hidden="true"> </i></label>

<input class="input--style-1" type="text"  maxlength="10" 
onBlur='addDashes(this)'  placeholder="CELL PHONE" name="phone" id="phone" required>
</div>
</div>
</div>

<div class="input-group">
<label tooltip="The more information that you provide here, the more accurate of a quote you will receive" >Additional information<i class=" fa fa-info-circle"  aria-hidden="true"> </i></label>

<textarea class="input--style-1 areatxt" style="border:none;width:100%;" type="text" placeholder="Additional information..." name="aditionalcmt" id="aditionalcmt" required></textarea>
</div>
<div class="row" style="position:relative;padding:0px; padding-bottom:10px;">
<div class="col">
<div class="input-group">
<input class="input--style-1" type="text"  
  placeholder="EMAIL" name="toemail" value="" id="toemail" required disabled>
</div>
</div><div class="col">
<div class="p-t-0 " style="float:right;" >
 <button class="btn btn--radius text-right btn--green" style="background:#E0B544;margin-top:0px !important;" id="finalysendemail" type="button" name="submit2">Submit</button>
</div>
</div></div>
</form>
</div>
</div>


</div>
</div>



</div>
</div>
</div>
</div>


<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
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
        data:'email='+email,
        success:function(response){
			  $('#page_loader').css('display', "none");
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
	   $('#toemail').val(email);
	   $('#formbody').css('display', 'block');
		}else{
			alert('Your Email not verified');
			location.reload();
		}
	  
	}else{
		alert('Your code is not valid');
	}
});
        }
      });
  } else {
   alert('email is not valid');
  }
	
});


$("#finalysendemail").click(function(){
	//alert('hyhu');

	var fileattach1 = $('#filepath1').val();
	
	var fileattach2 = $('#filepath2').val();
	
	var fileattach3 = $('#filepath3').val();
	
	var fileattach4 = $('#filepath4').val();
	
	var fileattach5 = $('#filepath5').val();
	
	var fileattach6 = $('#filepath6').val();
	var fileattach7 = $('#filepath7').val();
	var fileattach8 = $('#filepath8').val();
	var fileattach9 = $('#filepath9').val();
	var fileattach10 = $('#filepath10').val();
	var pickedcodes="<?php  echo $_GET['allpickedcodes'];?>";
       var firstname=$('#firstname').val();
	var lastname=$('#lastname').val();
	var address=$('#address').val();
	var city=$('#city').val();
	var phone=$('#phone').val();
  var aditionalcmt=$('#aditionalcmt').val();
	
	
	//var fname = $('#emailsubject').val();
	//var bodytamplate = $('#etamplate').html();
	//var tampid = $("#emailtamplateselctor").val();
	var sentto = $("#toemail").val();
	//alert('filename');
	if(sentto=="" || firstname=="" || lastname=="" || address=="" || city=="" || phone=="" || aditionalcmt==""){
		alert("Please fill all fields");
	}else{
		if(fileattach1==""){
			
   	   alert("add atleast one design image");

		}else{
		//alert('with file');
   	   // var modal=document.getElementById("cmodal");
   	    $('#page_loader').css('display', "block");
			
							  var data=[];
          var values={
			  
        "pickedcodes":pickedcodes,
        "firstname":firstname,
        "lastname":lastname,
        "address":address,
		"city":city,
		"phone":phone,
		"aditionalcmt":aditionalcmt,
		"sentto":sentto,
        "fileattach1":fileattach1,
        "fileattach2":fileattach2,
        "fileattach3":fileattach3,
        "fileattach4":fileattach4,
        "fileattach5":fileattach5,
        "fileattach6":fileattach6,
        "fileattach7":fileattach7,
        "fileattach8":fileattach8,
        "fileattach9":fileattach9,
        "fileattach10":fileattach10
      };
      data=values;
      var json=JSON.stringify(data);
	 console.log(json);
	  
		    $.ajax({
        type:"POST",
        url:"filedemail.php",
        data:json,
        success:function(response){
          //alert(response.roomid);
           $('#page_loader').css('display', "none");
       alert(response.status);
	   location.reload();
        }
      });
		  
	
     
		}
	//alert(cid);
	//setInterval(function(){   alert("your email successfully sent to "+sentto+"...");
	 //  location.reload(); }, 3000);
	
	}
   	   // var modal=document.getElementById("mymodal");
   	   // modal.style.display="none";
   });
    // Submit form data via Ajax finalysendemail
    $("#delete1").on('click', function(e){
		alert($(this).id);
	});
    $("#fupForm").on('submit', function(e){
	//	alert(new FormData(this));
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'uploadforemail.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(response){ //console.log(response);
                $('.statusMsg').html('');
				//alert('here');
                if(response.status == 1){
				if($('#filepath1').val()==""){	
                $('#filepath1').val(response.filepath); 
				    $('#statusMsg1').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i> </p>');
                   $('.statusMsg').html('');
                }else 
				if($('#filepath2').val()==""){	
                $('#filepath2').val(response.filepath); 
				    $('#statusMsg2').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                  $('.statusMsg').html('');
                }else 
				if($('#filepath3').val()==""){	
                $('#filepath3').val(response.filepath); 
				    $('#statusMsg3').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                  $('.statusMsg').html('');
                }else 
				if($('#filepath4').val()==""){	
                $('#filepath4').val(response.filepath); 
				    $('#statusMsg4').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                 $('.statusMsg').html('');
                 }else 
				if($('#filepath5').val()==""){	
                $('#filepath5').val(response.filepath); 
				    $('#statusMsg5').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                 $('.statusMsg').html('');
                 }else 
				if($('#filepath6').val()==""){	
                $('#filepath6').val(response.filepath); 
				    $('#statusMsg6').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                  $('.statusMsg').html('');
                } else
				if($('#filepath7').val()==""){	
                $('#filepath7').val(response.filepath); 
				    $('#statusMsg7').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                  $('.statusMsg').html('');
                } else
				if($('#filepath8').val()==""){	
                $('#filepath8').val(response.filepath); 
				    $('#statusMsg8').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                  $('.statusMsg').html('');
                } else
				if($('#filepath9').val()==""){	
                $('#filepath9').val(response.filepath); 
				    $('#statusMsg9').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                  $('.statusMsg').html('');
                } else
				if($('#filepath10').val()==""){	
                $('#filepath10').val(response.filepath); 
				    $('#statusMsg10').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                  $('.statusMsg').html('');
                } else {
					
                $('#filepath10').val(response.filepath); 
				    $('#statusMsg10').html('<p class="alert alert-success">'+response.message+'<i class="fa fa-paperclip" style="color:black;" aria-hidden="true"></i></p>');
                $('.statusMsg').html('');
                  } 
                    $('#fupForm')[0].reset();
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                }
                $('#fupForm').css("opacity","");
				//alert(response.filename);
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
	// File type validation
$("#file").change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
        alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
        $("#file").val('');
        return false;
    }
$("#submit").click();	
});


function addDashes(f)
{
    f_val = f.value.replace(/\D[^\.]/g, "");
    f.value = f_val.slice(0,3)+"-"+f_val.slice(3,6)+"-"+f_val.slice(6);
}
</script>

</body></html>