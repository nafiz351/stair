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
    <title class="d-print-none">Design Tool</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
         <link rel="stylesheet" type="text/css" href="dist/ambiance.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo/logo-gray-mini.png" />
		 <script src="html2canvas.min.js" type="text/javascript"></script> 
	<style>
	
@media screen and (orientation:landscape)
and (min-device-width: 300px) 
and (max-device-width: 1000px){
  #maindiv, #maindiv svg {
    max-width:261px	!important;
    min-width:261px	!important;
	min-height:276px !important;
	max-height:276px !important;
	overflow:auto;
	float:left;
  }
  .testcolor{
	  color:red !important;
  }
}
  .testcolor{
	  color:black;
  }
	#designbase{
		display:none;
		width: 1020px;
		padding:0px;
	/*overflow-y:scroll;
		max-height:64% !important;*/
		
	overflow-x: auto;
	white-space: nowrap;
	}
.maindiv{
       width:1020px ;
				height:997px ;
        max-width:1020px ;
				min-height:997px ;
        min-width:1020px ;
				max-height:997px;
				
				background-color:rgba(0,0,0,0);
				position: relative;
        float: right;
		padding:0px;
		
	overflow-x: auto;
	white-space: nowrap;
        /*overflow:hidden;*/
			}
			.maindiv svg{
        width:1020px ;
				height:997px;
        max-width:1020px;
				max-height:997px;
        min-width:1020px ;
				min-height:997px ;
				
				viewbox:auto ;
				position:absolute;
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
#dreamid{
    top:0;
    left:0;
    right:0;
    bottom:0;
}
.whenstairchoosed{
	display:none;
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
.colorcontainer{
	 border: 1px solid #C21E56;  
       /* background: linear-gradient(to bottom, #C21E56, #f1f1f1); */
    background-color: #fff;
     display: flex;
     flex-wrap: wrap;
     margin: 0 auto;
     margin-top: 5px;
     margin-left: 22px;
     position: relative;
     width: 200px;
     border-radius: 2px;
     padding: 5px;
}
.box{ 
        cursor: pointer;  
        /*border: 1px solid #C21E56;  */
        align-items: center;
        box-sizing: border-box;
        display: flex;
        font-family: Arial;
        margin:2%;
        /*font-size: 10px;*/
        height: 22px;
        justify-content: center;
        width: 12%;
}
.box2{ 
        cursor: pointer;  
        /*border: 1px solid #C21E56;  */
        align-items: center;
        box-sizing: border-box;
        display:inline-block;
        font-family: Arial;
        margin:2%;
        /*font-size: 10px;*/
        height: 22px;
        justify-content: center;
        width: 12%;
}
 #designbase{
	max-width:1020px;
	max-height:500px;
	/*overflow:scroll;*/
}
.scrollsystem{
	display:inline-block;
	margin:5px;
  overflow-y: scroll;
  white-space: nowrap;
}

.highlight {
  border: 1px solid blue !important;
  background:blue;
  opacity: 0.3;
  
 
}
.non_highlight{
  border: 1px solid transparent !important;
  background:transparent;
  opacity: 1;
}
.activepart_highlight {
  border: 1px solid blue !important;
  background:blue;
  opacity: 0.3;
}
.dropdiv{
  /* border: 1px solid yellow !important; */
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
  min-width: 10em;
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
  </head>
  <body id="design_body" class="" style="overflow-y: hidden;margin:0px;">
  

<?php //include "includes/loginsignup.php" ?>
<?php //include "includes/settings.php" ?>
  <div id="page_loader" style="display:none;" class="loaddiv" >
  <center><img style="" class="gifload" src="assets/images/stairtool.gif" alt="loading" /></center>
  </div>
    <div class="container-scroller ">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar d-print-none sidebar-offcanvas" id="sidebar" style="">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="admin/images/logo-tool.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo/logo-gray-mini.png" style="min-width:100%;" alt="logo" /></a>
        </div>
        <ul class="nav" style="">
          <li class="nav-item profile">
            <a class="nav-link" href="#">
              <!--span class="menu-icon">
               <!--img src="assets/images/logo/logo-gray-mini.png" style="min-width:100%;" alt="logo" /->
              </span-->
              <span class="menu-title"><img src="admin/images/logo-toolinside.png" style="max-width:130px; max-height:30px;" alt="logo" /></span>
            </a>
          
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Design Tools</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Start Designing</span>
            </a>
          </li>
          <li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-delete-sweep"></i>
              </span>
              <span class="menu-title"><button type="button" id="clr_btn" class="btn btn-danger btn-fw">Clear Design</button></span>
            </a>
          </li>
          <li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-delete"></i>
              </span>
              <span class="menu-title"><button type="button" id="delete_part_btn" class="btn btn-danger btn-fw">Delete Selection</button></span>
            </a>
          </li>  <?php// if(strlen($_SESSION['login']))
	//{   ?>
          <li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-database-plus"></i>
              </span>
              <span class="menu-title"><button type="button" id="savedesign_btn" class="btn btn-danger btn-fw">Save Design</button></span>
            </a>
          </li>
          <!--li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-database-plus"></i>
              </span>
              <span class="menu-title"><button type="button" id="check_btn" class="btn btn-danger btn-fw">check Design</button></span>
            </a>
          </li-->
		  <?php //} ?>
		  <li class="nav-item nav-category">
            <span class="nav-link">Choose your Staircase</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link choosebgbtn" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Choose Staircase...</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
			    <?php	$retc=mysqli_query($con,"select * from stairdesigns");
										
								
                         while ($rowc=mysqli_fetch_array($retc)) 
                           {
                              ?>
                <li class="nav-item"> <a class="nav-link choosebg" id="<?php echo $rowc['id'];?>" href="#"><?php echo $rowc['design_name'];?></a></li>
               <?php
                    
                         }?>
			  </ul>
            </div>
          </li>
		  
		  <li class="nav-item nav-category whenstairchoosed">
            <span class="nav-link">Colour Sections</span>
          </li>
          <li class="nav-item menu-items whenstairchoosed" id="treads" >
            <a class="nav-link basiccolors" data-toggle="collapse" value="treads" href="#treadcolors" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-stairs"></i>
              </span>
              <span class="menu-title">Treads</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="treadcolors">
           <div id="container1" class="shadow-lg  colorcontainer rounded" style="background-color:#D6FFEF;" >
			<div class="box" style="background-color:#000000" value="#000000" data-color="Black" title="Black"></div>
			<div class="box" style="background-color:#DDB28E" value="#DDB28E" data-color="Tan" title="Tan"></div>
			<div class="box" style="background-color:#D48541" value="#D48541" data-color="Amaretto" title="Amaretto"></div>
			<div class="box" style="background-color:#65340A" value="#65340A" data-color="Coco" title="Coco"></div>
			<div class="box" style="background-color:#652310" value="#652310" data-color="Praline" title="Praline"></div>
			<div class="box" style="background-color:#472203" value="#472203" data-color="Coffee" title="Coffee"></div>
			<div class="box" style="background-color:#847055" value="#847055" data-color="Sienna" title="Sienna"></div>
			<div class="box" style="background-color:#B7B3A9" value="#B7B3A9" data-color="LightGrey" title="LightGrey"></div>
			<div class="box" style="background-color:#676560" value="#676560" data-color="DarkGrey" title="DarkGrey"></div>
			<div class="box" style="background-color:#6F1E14" value="#6F1E14" data-color="DarkMahogany" title="DarkMahogany"></div>
			<div class="box" style="background-color:#815438" value="#815438" data-color="dark" title="dark"></div>
			<div class="box" style="background-color:#B48463" value="#B48463" data-color="medium" title="medium"></div>
			<div class="box" style="background-color:#caa472" value="#caa472" data-color="light" title="light"></div>
            </div>
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed" id="risers">
            <a class="nav-link basiccolors" value="risers" data-toggle="collapse" href="#riserscolors" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-stairs"></i>
              </span>
              <span class="menu-title">Risers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="riserscolors">
           <div id="container2" class="shadow-lg  colorcontainer rounded" style="background-color:#D6FFEF;">
			<div class="box" style="background-color:#000000" value="#000000" data-color="Black" title="Black"></div>
			<div class="box" style="background-color:#DDB28E" value="#DDB28E" data-color="Tan" title="Tan"></div>
			<div class="box" style="background-color:#D48541" value="#D48541" data-color="Amaretto" title="Amaretto"></div>
			<div class="box" style="background-color:#65340A" value="#65340A" data-color="Coco" title="Coco"></div>
			<div class="box" style="background-color:#652310" value="#652310" data-color="Praline" title="Praline"></div>
			<div class="box" style="background-color:#472203" value="#472203" data-color="Coffee" title="Coffee"></div>
			<div class="box" style="background-color:#847055" value="#847055" data-color="Sienna" title="Sienna"></div>
			<div class="box" style="background-color:#B7B3A9" value="#B7B3A9" data-color="LightGrey" title="LightGrey"></div>
			<div class="box" style="background-color:#676560" value="#676560" data-color="DarkGrey" title="DarkGrey"></div>
			<div class="box" style="background-color:#6F1E14" value="#6F1E14" data-color="DarkMahogany" title="DarkMahogany"></div>
			<div class="box" style="background-color:#fff" value="#fff" data-color="white" title="white"></div>
			<div class="box" style="background-color:#EAE5D9;font-size:11px;color:black;" value="#EAE5D9" data-color="Marble" title="Marble">TILE</div>
            </div>
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed" id="stringers">
            <a class="nav-link basiccolors" value="stringers" data-toggle="collapse" href="#stringerscolors" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-stairs"></i>
              </span>
              <span class="menu-title">Stringers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="stringerscolors">
           <div id="container3" class="shadow-lg  colorcontainer rounded" style="background-color:#D6FFEF;">
			<div class="box" style="background-color:#000000" value="#000000" data-color="Black" title="Black"></div>
			<div class="box" style="background-color:#DDB28E" value="#DDB28E" data-color="Tan" title="Tan"></div>
			<div class="box" style="background-color:#D48541" value="#D48541" data-color="Amaretto" title="Amaretto"></div>
			<div class="box" style="background-color:#65340A" value="#65340A" data-color="Coco" title="Coco"></div>
			<div class="box" style="background-color:#652310" value="#652310" data-color="Praline" title="Praline"></div>
			<div class="box" style="background-color:#472203" value="#472203" data-color="Coffee" title="Coffee"></div>
			<div class="box" style="background-color:#847055" value="#847055" data-color="Sienna" title="Sienna"></div>
			<div class="box" style="background-color:#B7B3A9" value="#B7B3A9" data-color="LightGrey" title="LightGrey"></div>
			<div class="box" style="background-color:#676560" value="#676560" data-color="DarkGrey" title="DarkGrey"></div>
			<div class="box" style="background-color:#6F1E14" value="#6F1E14" data-color="DarkMahogany" title="DarkMahogany"></div>
			<div class="box" style="background-color:#fff" value="#fff" data-color="white" title="white"></div>
			<div class="box" style="background-color:#EAE5D9;font-size:11px;color:black;" value="#EAE5D9" data-color="Marble" title="Marble">TILE</div>
            </div>
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link basiccolors" value="walls"  data-toggle="collapse" href="#wallscolors" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-file-word-box"></i>
              </span>
              <span class="menu-title">Walls</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="wallscolors">
           <div id="container4" class="shadow-lg  colorcontainer rounded" style="background-color:#CACFD2;">
			<div class="box" style="background-color:#F0F9DC" value="#F0F9DC" data-color="LightGreen" title="LightGreen"></div>
			<div class="box" style="background-color:#FFFFFF" value="#FFFFFF" data-color="White" title="White"></div>
			<div class="box" style="background-color:#FAF2D4" value="#FAF2D4" data-color="Beige" title="Beige"></div>
			<div class="box" style="background-color:#EAC7AA" value="#EAC7AA" data-color="Tan" title="Tan"></div>
			<div class="box" style="background-color:#FFFFD5" value="#FFFFD5" data-color="LightYellow" title="LightYellow"></div>
			<div class="box" style="background-color:#C74535" value="#C74535" data-color="LightMahogany" title="LightMahogany"></div>
			<div class="box" style="background-color:#B7B3A9" value="#B7B3A9" data-color="LightGrey" title="LightGrey"></div>
			<div class="box" style="background-color:#676560" value="#676560" data-color="DarkGrey" title="DarkGrey"></div>
			<div class="box" style="background-color:#E4E3E1" value="#E4E3E1" data-color="orignal" title="orignal"></div>
            </div>
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link basiccolors" value="floor" data-toggle="collapse" href="#floorscolors" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank"></i>
              </span>
              <span class="menu-title">Floor</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="floorscolors">
           <div id="container5" class="shadow-lg  colorcontainer rounded" style="background-color:#D6FFEF;">
			<div class="box" style="background-color:#000000" value="#000000" data-color="Black" title="Black"></div>
			<div class="box" style="background-color:#DDB28E" value="#DDB28E" data-color="Tan" title="Tan"></div>
			<div class="box" style="background-color:#D48541" value="#D48541" data-color="Amaretto" title="Amaretto"></div>
			<div class="box" style="background-color:#65340A" value="#65340A" data-color="Coco" title="Coco"></div>
			<div class="box" style="background-color:#652310" value="#652310" data-color="Praline" title="Praline"></div>
			<div class="box" style="background-color:#472203" value="#472203" data-color="Coffee" title="Coffee"></div>
			<div class="box" style="background-color:#847055" value="#847055" data-color="Sienna" title="Sienna"></div>
			<div class="box" style="background-color:#B7B3A9" value="#B7B3A9" data-color="LightGrey" title="LightGrey"></div>
			<div class="box" style="background-color:#676560" value="#676560" data-color="DarkGrey" title="DarkGrey"></div>
			<div class="box" style="background-color:#6F1E14" value="#6F1E14" data-color="DarkMahogany" title="DarkMahogany"></div>
			<div class="box" style="background-color:#EAE5D9;font-size:11px;color:black;" value="#EAE5D9" id="tilefloor" data-color="Marble" title="Marble">TILE</div>
			<div class="box" style="background-color:#815438" value="#815438" data-color="dark" title="dark"></div>
			<div class="box" style="background-color:#B48463" value="#B48463" data-color="medium" title="medium"></div>
			<div class="box" style="background-color:#caa472" value="#caa472" data-color="light" title="light"></div>
            </div>
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed" id="firststep">
            <a class="nav-link firststepvbtn" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-crop-landscape"></i>
              </span>
              <span class="menu-title">First Step</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link firststepv" value="1" href="#">First Squre Step</a></li>
                <li class="nav-item"> <a class="nav-link firststepv" value="2"  href="#">First Round Step</a></li>
              </ul>
            </div>
          </li>
		  <li class="nav-item nav-category whenstairchoosed">
            <span class="nav-link">Parts Sections</span>
          </li>
          <li class="nav-item menu-items whenstairchoosed" id="mybalu">
            <a class="nav-link designtypeddbtn" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title ">Choose your Balustrade</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu " id="designtypeddvalues" >
                <li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li>
                <li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed" id="designmaterial">
            <a class="nav-link designmaterialbtn" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title" id="designmaterialtext" >Select Stair Parts...</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu" id="designmaterialvalues">
               </ul>
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed" id="designcolor">
            <a class="nav-link designcolorbtn" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title designcolortext">Select Colour</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
           <div id="designcolorvalues" class="shadow-lg  colorcontainer designcolorvalues rounded" style="background-color:#D6FFEF;">
			</div>
			
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed" id="designcategory">
            <a class="nav-link designcategorybtn" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Select Profile</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul id="designcategoryvalues" class="nav flex-column sub-menu">
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed" id="designsubcategory">
            <a class="nav-link designsubcategorybtn" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title" id="designsubcategorytext" > Selections</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul id="designsubcategoryvalues" class="nav flex-column sub-menu">
               </ul>
			   
            </div>
			
          </li>
          <li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link "  data-toggle="collapse" id="imgdrag" href="#img" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-stairs"></i>
              </span>
              <span class="menu-title" id="designsubcategorytext1" >Dragable Image</span>
            </a>
            <div class="collapse" id="img">
          <div  class="mb-3 d-flex justify-content-center align-items-center" style="background:white; overflow: hidden; height: 200px;width:200px;margin-left:22px;" id="partsimagediv" >
                           <div id="draggeddiv" class="dragpart ui-widget-content" style="height:200px; " ><!--img   style="height:200px;" src="Straight Stairs/II SPINDLE WOOD/SPINDLE WOOD 1A PLAIN OAK/1.png "/--></div>
                        </div> <div>
                          <input type="hidden" id="savedtype">
                        </div>
                        </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link "  data-toggle="collapse" id="picked_tab" href="#img1" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-stairs"></i>
              </span>
              <span class="menu-title" id="designsubcategorytext1" >Picked Parts</span>
            </a>
            <div class="collapse" id="img1">
          
                      <div id="partdetail" style="color:black;background:white; overflow: hidden; height: 200px;width:200px;margin-left:22px;" ><h5>This is picked tab. Here used parts will be shown</h5></div>
                        </div>
          </li>
		      <li class="nav-item menu-items whenstairchoosed" id="headsforwhite">
            <a class="nav-link basiccolors" data-toggle="collapse" value="headsforwhite" href="#headsforwhitecolors" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-stairs"></i>
              </span>
              <span class="menu-title">White Posts Heads</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="headsforwhitecolors">
           <div id="container1" class="shadow-lg  colorcontainer rounded" style="background-color:#D6FFEF;" >
			<div class="box" style="background-color:#000000" value="#000000" data-color="Black" title="Black"></div>
			<div class="box" style="background-color:#DDB28E" value="#DDB28E" data-color="Tan" title="Tan"></div>
			<div class="box" style="background-color:#D48541" value="#D48541" data-color="Amaretto" title="Amaretto"></div>
			<div class="box" style="background-color:#65340A" value="#65340A" data-color="Coco" title="Coco"></div>
			<div class="box" style="background-color:#652310" value="#652310" data-color="Praline" title="Praline"></div>
			<div class="box" style="background-color:#472203" value="#472203" data-color="Coffee" title="Coffee"></div>
			<div class="box" style="background-color:#847055" value="#847055" data-color="Sienna" title="Sienna"></div>
			<div class="box" style="background-color:#B7B3A9" value="#B7B3A9" data-color="Light Grey" title="LightGrey"></div>
			<div class="box" style="background-color:#676560" value="#676560" data-color="Dark Grey" title="DarkGrey"></div>
			<div class="box" style="background-color:#6F1E14" value="#6F1E14" data-color="Dark Mahogany" title="DarkMahogany"></div>
			<div class="box" style="background-color:#ffff" value="#ffff" data-color="White" title="White"></div>
			<div class="box" style="background-color:#caa472" value="#caa472" data-color="Oak" title="Oak"></div>
            </div>
            </div>
          </li>
          <li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-printer"></i>
              </span>
              <span class="menu-title"><button type="button" id="printproject" class="btn btn-dark btn-fw">Print Project</button></span>
            </a>
          </li>
          <li class="nav-item menu-items whenstairchoosed">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-printer"></i>
              </span>
              <span class="menu-title"><button type="button" id="instalationqute" tooltip="Greater Toronto Area only"  class="btn btn-dark btn-fw">Have this Design</br> Installed </button></span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper " style="">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-print-none d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo/logo-gray-mini.png" style="min-width:100%;" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="zoom" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-magnify-minus zoom-out"></i>
                </a>
			  </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="zoom" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-magnify zoom-init"></i>
                </a>
			  </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="zoom" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-magnify-plus zoom"></i>
                </a>
			  </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-web"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Browse Pages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="recomendeddesign.php"  id="rdes" >
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Recommended Designs</p>
                      <p class="text-muted ellipsis mb-0">Recommended by Admin</p>
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
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
					 <?php if(strlen($_SESSION['login']))
	{   ?>
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo htmlentities($_SESSION['username']);?></p>
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
        <div class="main-panel ">
          <div class="content-wrapper ">
		  <h1 class="text-center testcolor" id="dreamid" style="margin-top:20% !important;font-size:45px;" >Let's start designing your dreams...</h1>

		  <h1 class="text-center" id="printheading" style="display:none;" >StairsSteps Design Tool</h1>
            <div class="row"  >
              <!--div class="col-md-4 " id="mobilecol" style="display:none;" >
                <div class="card">
                  <div class="card-body">
          <div  class="mb-3 d-flex justify-content-center align-items-center" style="background:white; overflow: hidden; height: 200px;width:200px;margin-left:22px;" id="partsimagediv1" >
                           <div id="draggeddiv1" class="dragpart ui-widget-content" style="height:200px; " ><!--img   style="height:200px;" src="Straight Stairs/II SPINDLE WOOD/SPINDLE WOOD 1A PLAIN OAK/1.png "/-></div>
                        </div> 
                  </div>
                </div>
              </div--> 
              <div class="col-12 " id="pccol">
                <div class="card" style="opacity:0;" >
                  <div id="designcardbody"  class=" card-body">
       <div class="scrollsystem " id="designbase" style="display:none;">
 
                <main class=" designbase" style="width: 100%;height: 100%;padding:0px !important;margin:0px !important;">
                  <div class="maindiv " id="maindiv"></div>
                        
               
                </main>
        </div> 
                  </div>
                </div>
              </div>
            </div>
			<div id="previewImg" style="display:none;" ></div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
	
	
	<!---------------- modal for saving design name ----------------->
<div class="modal fade" id="savedesignName" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Save design</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center" >
       
          <label class="mr-3">Enter name for your design</label>
          <input type="text" id="myDesignName" placeholder="Your design name"/>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
        <button type="button" id="saveMyDesign" class="btn btn-primary">Save </button>
      </div>
    </div>
  </div>
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
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
	
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script> ->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script-->
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script-->
<script type="text/javascript" src="dist/jquery_touch_punch.min.js"></script>
<script src="dist/ambiance.js"></script>
<!--script src="dist/pablo.min.js"></script-->
	<script>
	    // .......show selected parts with design code and color name
        $("#picked_tab").on('click', function(){
       let elmArray=[];
       let pickelm=document.getElementsByClassName("dynamicparts");
       for (let i = 0; i < pickelm.length; i++) {
          let element_color=pickelm[i].getAttribute("data-color");
          let elm_design_code=pickelm[i].getAttribute("data-designcode");
          if (element_color==null || elm_design_code==null || elm_design_code=="" || element_color=="") {
            
          }else{
          elmArray.push(element_color+"/"+elm_design_code);
          }
         
       }
      //  console.log(elmArray);
       let newArray=Array.from(new Set(elmArray));
      //  console.log(newArray);
       let pickedtab=document.getElementById("partdetail");
       pickedtab.innerHTML="";
       if (newArray.length==0) {
        pickedtab.innerHTML+="<div><h6> Here you will see design code and color of selected parts</h6></div>";
       }else{
       for (let i = 0; i < newArray.length; i++) {
           let elem=newArray[i];
           if (elem=="null/null") {
             
           }else{
              let splitpart=elem.split("/");
              let colorname =splitpart[0];
              let designcode=splitpart[1];
              pickedtab.innerHTML+="<div style='margin-left:2px; margin-top:3px;'><h6 class='pickedpartcode' style='font-size:14px;'> "+designcode+" ( "+colorname+" )</h6></div>";
           }
           
         
       }
      }
    });
$("#instalationqute").on('click', function(){
	var myurl="";
	$('#previewImg').html("");
		html2canvas(document.getElementById("maindiv"),
			{
				allowTaint: true,
				useCORS: true
			}).then(function (canvas) {
				var anchorTag = document.createElement("img");
				document.body.appendChild(anchorTag);
				anchorTag.src = canvas.toDataURL();
				document.getElementById("previewImg").appendChild(anchorTag);
			});
			//alert(myurl);
			//console.log(myurl);
			 setTimeout(() => {
          document.getElementById("page_loader").style.display="none";
          document.getElementById("design_body").style.removeProperty('position');
          
	var myimg=$('#previewImg img').attr('src');
			///console.log(myimg);
         // loadRectangles();
        //  $(".round").hide();
           	 $.ajax({
      type: "POST",
      url: "testupload.php",
      data: { 
         img: myimg
      }
    }).done(function(o) {
		
			$('#picked_tab').trigger('click');
	//var selectedparts= $('.pickedpartcode').html();
	var all = $(".pickedpartcode").map(function() {
    return this.innerHTML;
}).get();
var allpickedcodes= all.join();
console.log(allpickedcodes);
	//$('#parts_tab').trigger('click');
	
	
	if(allpickedcodes==""){
		alert("design something");
	}else{
	window.open(
  'installationdesign.php?allpickedcodes='+allpickedcodes,
  '_blank' // <- This is what makes it open in a new window.
);
	}	
      console.log(o); 
    });                   
         }, 9000);
		

	//alert(myimg);
	$('#picked_tab').trigger('click');
	//$.post('installationdesign.php', {'allpickedcodes':allpickedcodes});
});
$("#check_btn").on('click', function(){
	var checkurl=$('#wall').attr('data-url');
	alert(checkurl);
	var checkurl2=$('#treads').attr('data-url');
	alert(checkurl2);
	//$('#treads').attr('data-url', 'mydesign');
});
$("#savedesign_btn").on('click', function(){
	var thisuser="<?php echo $_SESSION['id']; ?>";
//alert(thisuser);
	 if(thisuser==""){
		
	alert('Please login to save your design');
	 	//$('#loginsignup').modal('show');
	 }else{
		 $('#previewImg').html("");
		html2canvas(document.getElementById("maindiv"),
			{
				allowTaint: true,
				useCORS: true
			}).then(function (canvas) {
				var anchorTag = document.createElement("img");
				document.body.appendChild(anchorTag);
				anchorTag.src = canvas.toDataURL();
				document.getElementById("previewImg").appendChild(anchorTag);
			});
    $("#savedesignName").modal("show");
	 }
});

    $("#printproject").click(function(){
		$('#designbase').removeClass('scrollsystem');
		$('#printheading').css('display','block');
      window.print();
	});

    $(window).on('afterprint', function(){
                 $('#designbase').addClass('scrollsystem');
		$('#printheading').css('display','none');
             });
$(".close").on('click', function(){
	$('#savedesignName').modal('hide');
});
$("#saveMyDesign").on('click', function(){
	
	var myimg=$('#previewImg img').attr('src');
	var ssimg=myimg;
	//alert($('#risers').attr('data-url'));

			//alert(ssimg);
  var myalldesign='';
var thisuser="<?php echo $_SESSION['id']; ?>";
//alert(thisuser);
	 if(thisuser==""){
		
	 }else{
  var getAllParts=document.getElementsByClassName("gridpart");
  for (let i = 0; i < getAllParts.length; i++) {
    let thisid=getAllParts[i].id;
     let thisclasses=getAllParts[i].classList;
     //let thisurl=getAllParts[i].getAttribute('data-url');
     let thisurl=$('#'+thisid).attr('data-url');
     let thiscolor=$('#'+thisid).attr('data-color');
     let thiscode=$('#'+thisid).attr('data-designcode');

     if(thisurl){
      thispart='<div id="'+thisid+'" class="'+thisclasses+'" data-url="'+thisurl+'" data-designcode="'+thiscode+'" data-color="'+thiscolor+'"> </div>';
     }else{
      thispart='<div id="'+thisid+'" class="'+thisclasses+'" data-designcode="'+thiscode+'" data-color="'+thiscolor+'"></div>';
     }
     myalldesign+=thispart;
      if(thisid=="treads" || thisid=="risers"){
		 //alert( myalldesign);
	  }

    
  }
	//alert("save here");
	// var thisdesign= $('#maindiv').html();
  var thisbalustrade=designtypeid;
  var thisdesignname=$("#myDesignName").val();
	// thisdesign='<div style="height:200px;width:200px;background:red;">hello div </div>';
	$('#picked_tab').trigger('click');
	//var selectedparts= $('.pickedpartcode').html();
	var all = $(".pickedpartcode").map(function() {
    return this.innerHTML;
}).get();
var allpickedcodes= all.join();
//console.log(allpickedcodes);
	//$('#parts_tab').trigger('click');
	
//	alert(thisuser);
	// ssimg="sss.png";
	var bgid=choosedesign;
	/*getScreenshotOfElement($("#maindiv").get(0), 0, 0, 100, 100, function(data) {
    // in the data variable there is the base64 image
    // exmaple for displaying the image in an <img>
    $("img#captured").attr("src", "data:image/png;base64,"+data);
	alert("data:image/png;base64,"+data);
});*/
// console.log(thisdesign);
 console.log(myalldesign);
// console.log(ssimg);
// console.log(bgid);
 $.ajax({
              	url:"savedesign.php",
              	type:"post",
              	data:{codes:allpickedcodes, 
				designhtml:myalldesign, 
				userid:thisuser,
				screenshot:ssimg,
				bgid:bgid, 
				balustrade:thisbalustrade, 
				designname:thisdesignname, 
				firststepvalue:firststepvalue, 
				firststepcolor:firststepcolor, 
				firststeptreadcolor:firststeptreadcolor, 
				firststeprisercolor:firststeprisercolor, 
				firststepshedowcolor:firststepshedowcolor},
              	success:function(data){
                  $("#savedesignName").modal("hide");
					        alert(data);
          
              	}
              });
	 }
});	
$("#clr_btn").on("click", function(){
         $('.dynamicparts').html("");
         $('.dynamicparts').attr('data-color', '');
         $('.dynamicparts').attr('data-designcode', '');
         $('.dynamicparts').attr('data-url', '');
         $(".activepart").removeClass("activepart_highlight");
         $(".activepart").removeClass("activepart");
    });
$("#delete_part_btn").on("click", function(){
  
    var allactiveParts=document.getElementById("maindiv").querySelectorAll('.activepart_highlight');
    let designid=choosedesign;
    let material=designmaterialid;
    if (allactiveParts.length>0) {
    for (let index = 0; index < allactiveParts.length; index++) {
        let cpart=allactiveParts[index].getAttribute('data-name');
        let cvalue=allactiveParts[index].getAttribute('data-value');
        console.log('\ncpart '+cpart+' cvalue '+cvalue);

        if (cpart=="spindle") {
           document.getElementById(cpart+cvalue).innerHTML="";
           document.getElementById(cpart+cvalue).setAttribute('data-color', '');
           document.getElementById(cpart+cvalue).setAttribute('data-designcode', '');
           document.getElementById(cpart+cvalue).setAttribute('data-url', '');
        }else if(cpart=="glass"){
          document.getElementById(cpart).innerHTML="";
          document.getElementById("glass_bottom").innerHTML="";
          document.getElementById(cpart).setAttribute('data-color', '');
           document.getElementById(cpart).setAttribute('data-designcode', '');
           document.getElementById(cpart).setAttribute('data-url', '');
        }else if (designid=="2" && (material=='n1' || material=='w2') && (cpart=="newelpost2"|| cpart=="newelpost4" || cpart=="newelpost5") ) {
           document.getElementById("newelpost2").innerHTML="";
           document.getElementById("newelpost2").setAttribute('data-color', '');
           document.getElementById("newelpost2").setAttribute('data-designcode', '');
           document.getElementById("newelpost2").setAttribute('data-url', '');
           console.log('I am corner post');
        }else if (designid=="4" && (material=='n1' || material=='w2') && (cpart=="newelpost1"|| cpart=="newelpost2" ) ) {
           document.getElementById("newelpost1").innerHTML="";
           document.getElementById("newelpost1").setAttribute('data-color', '');
           document.getElementById("newelpost1").setAttribute('data-designcode', '');
           document.getElementById("newelpost1").setAttribute('data-url', '');
           console.log('I am bottom post');
        }else if (designid=="3" && (material=='n1' || material=='w2') && (cpart=="newelpost2"|| cpart=="newelpost4" || cpart=="newelpost3") ) {
           document.getElementById("newelpost2").innerHTML="";
           document.getElementById("newelpost2").setAttribute('data-color', '');
           document.getElementById("newelpost2").setAttribute('data-designcode', '');
           document.getElementById("newelpost2").setAttribute('data-url', '');
           console.log('I am corner post');
        }else if (designid=="2" && (material=='n1' || material=='w2') && (cpart=="newelpost6"|| cpart=="newelpost7") ) {
           document.getElementById("newelpost6").innerHTML="";
           document.getElementById("newelpost6").setAttribute('data-color', '');
           document.getElementById("newelpost6").setAttribute('data-designcode', '');
           document.getElementById("newelpost6").setAttribute('data-url', '');
		   document.getElementById("bottom_newel_shadow").innerHTML="";
           document.getElementById("bottom_newel_shadow").setAttribute('data-color', '');
           document.getElementById("bottom_newel_shadow").setAttribute('data-designcode', '');
           document.getElementById("bottom_newel_shadow").setAttribute('data-url', '');
           console.log('I am bottom post');
        }else if (designid=="3" && (material=='n1' || material=='w2') && (cpart=="newelpost6"|| cpart=="newelpost5") ) {
           document.getElementById("newelpost6").innerHTML="";
           document.getElementById("newelpost6").setAttribute('data-color', '');
           document.getElementById("newelpost6").setAttribute('data-designcode', '');
           document.getElementById("newelpost6").setAttribute('data-url', '');
		   document.getElementById("bottom_newel_shadow").innerHTML="";
           document.getElementById("bottom_newel_shadow").setAttribute('data-color', '');
           document.getElementById("bottom_newel_shadow").setAttribute('data-designcode', '');
           document.getElementById("bottom_newel_shadow").setAttribute('data-url', '');
           console.log('I am bottom post');
        }else if (designid=="2" && material=='ss2' && (cpart=="newelpost1" || cpart=="newelpost2" || cpart=="newelpost3"|| cpart=="newelpost4" || cpart=="newelpost5" || cpart=="newelpost6" || cpart=="newelpost7")) {
           document.getElementById("newelpost3").innerHTML="";
           document.getElementById("newelpost3").setAttribute('data-color', '');
           document.getElementById("newelpost3").setAttribute('data-designcode', '');
           document.getElementById("newelpost3").setAttribute('data-url', '');
           break;
           console.log('I am all post');
        }else if (designid=="3" && material=='ss2' && (cpart=="newelsteel1" || cpart=="newelsteel2" || cpart=="newelsteel3"|| cpart=="newelsteel4" || cpart=="newelsteel5" || cpart=="newelsteel6" || cpart=="newelsteel7" || cpart=="newelsteel8")) {
           document.getElementById("newelsteel1").innerHTML="";
           document.getElementById("newelsteel1").setAttribute('data-color', '');
           document.getElementById("newelsteel1").setAttribute('data-designcode', '');
           document.getElementById("newelsteel1").setAttribute('data-url', '');
           break;
           console.log('I am all post');
        }else if (designid=="5"  && (cpart=="newelposts" || cpart=="newelposts2" || cpart=="newelposts3")) {
           document.getElementById("newelposts").innerHTML="";
           document.getElementById("newelposts").setAttribute('data-color', '');
           document.getElementById("newelposts").setAttribute('data-designcode', '');
           document.getElementById("newelposts").setAttribute('data-url', '');
           break;
           console.log('I am all post');
        }
        else{
          document.getElementById(cpart).innerHTML="";
          document.getElementById(cpart).setAttribute('data-color', '');
           document.getElementById(cpart).setAttribute('data-designcode', '');
           document.getElementById(cpart).setAttribute('data-url', '');
           console.log('I am remaining post');
        }


        
      
    }
    $(".activepart").removeClass("activepart_highlight");
    $(".activepart").removeClass("activepart");
    $.ambiance({
               message:"Deleted Successfully.",
               type:"success",
               fade:true
             })
  }

    
    

});
    $("#maindiv").on('click', '.dropdiv', function(){
       $(this).toggleClass('activepart');
       let partid=$(this).attr("id");
       console.log(partid);
       if (partid=="thandrail" || partid=="tfootrail" || partid=="tglass" || partid=="thandrailfront" || partid=="thandrailfrontV") {
         
       }else{
         $(this).toggleClass('activepart_highlight');
       }
      
    });
		var zoom = 1;
		
		$('.zoom').on('click', function(){
			zoom += 0.1;
			$('#maindiv').css('transform', 'scale(' + zoom + ')');
		});
		$('.zoom-init').on('click', function(){
			zoom = 1;
			$('#maindiv').css('transform', 'scale(' + zoom + ')');
		});
		$('.zoom-out').on('click', function(){
			zoom -= 0.1;
			$('#maindiv').css('transform', 'scale(' + zoom + ')');
		});
	var choosedesign="";
	var choosedesigntext="";
	var selectedbasecolors="";
	
var firststepvalue="2";
 var designtypeid="";
 var designmaterialname="";
 var designmaterialid="";
 var designcolorid="";
 var designcoloridtext="";
 var designcategoryid="";
 var designcategoryidtext="";
 var designsubcategoryid="";
 var designtypeidtext="Spindle Design options";
var firststepcolor="Marble";
var firststeptreadcolor="light";
var firststeprisercolor="Marble";
var firststepshedowcolor="Marble";
	function checkWidth() {
		let ww=$('#designcardbody').width();
		let wh=$(window).height();
		wh=wh/1.5;
		wh=parseInt(wh);
		//alert(wh);
		let realwidth=2550;
		let realheight=2700;
			var mnumber=1;
			var tempwidth=realwidth;
			ww=ww+50;
		if(realwidth>ww){
			for(var c=1; ww<tempwidth; c++){
				mnumber=mnumber+0.5;
				tempwidth=realwidth/mnumber;
			}
		}
   
	var tempheight=realheight/mnumber;
	var tempminus=mnumber*33.33;
	if(tempwidth >= 1001){
		tempheight=tempheight-tempminus;
	}else{}
	tempheight=parseInt(tempheight);
	tempwidth=parseInt(tempwidth);
	 if (ww < 914) {
        //$('#mobilecol').css('display', 'block');
        $('#designbase').width(tempwidth).height(wh);
    } else {
       // $('#mobilecol').css('display', 'none');
        $('#designbase').width(tempwidth).height(tempheight);
    }
	//alert(tempwidth);
	//alert(tempheight);
        $('.maindiv').width(tempwidth).height(tempheight);
        $('.maindiv svg').width(tempwidth).height(tempheight);

}
checkWidth();
$(window).resize(checkWidth);

    $(".basiccolors").click(function(){
		var selected=$(this).attr('value');
		selectedbasecolors=selected;
	 //alert(selectedid);
	});
    $(".box").click(function(){
      var designvl=choosedesign;
      var colorname=$(this).attr('data-color');
	  var selectedid=selectedbasecolors;
	  //alert(designvl);
	  if(designvl=='1'){
		
      if(selectedid=="floor"){
		  let thisurl="";
		    let cpath="";
			let thisrurl="";
			let thisr2url="";
		   if(colorname=='Marble'){
		   thisurl="Straight Stairs/FLOOR/FLOOR TILE.svg";
		   thisrurl='Straight Stairs/ACCESSORIES/PLANT REFLECTION FOR TILE.svg';
		   thisr2url='Straight Stairs/ACCESSORIES/TABLE REFLECTION FOR TILE.svg';
		  // document.getElementById("plant_reflection").setAttribute('data-url', thisrurl);
      // console.log(thisurl);
	  }else{
		  if(colorname=='Amaretto' || colorname=='Black' || colorname=='Coco' || colorname=='Coffee'
		  || colorname=='DarkMahogany' || colorname=='Praline' || colorname=='Tan'){
			  thisrurl="Straight Stairs/ACCESSORIES/PLANT SHADOW "+colorname+".svg";
		  }
		  
		  else{
			  thisrurl='Straight Stairs/ACCESSORIES/PLANT SHADOW.svg';
		  }
         thisurl="Straight Stairs/FLOOR/FLOOR "+colorname+".svg";
		   thisr2url='Straight Stairs/ACCESSORIES/TABLE SHADOW.svg';
		 
		 //  document.getElementById("plant_reflection").setAttribute('data-url', thisrurl);
	  }
       cpath=encodeURI(thisurl);
      $("#maindiv #floor").load(cpath, function(response, status, xhr){

           if(status=="error"){
             // console.log($("#"+droptarget).html());
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
			   
            document.getElementById("floor").setAttribute('data-url', thisurl);
           }
           });
		   
		   let crpath="";
		   let cr2path="";
       crpath=encodeURI(thisrurl);
       cr2path=encodeURI(thisr2url);
      $("#maindiv #plant_reflection").load(crpath, function(response, status, xhr){

           if(status=="error"){
             // console.log($("#"+droptarget).html());
             $.ambiance({
               message:"Sorry! You cannot change this reflaction here.",
               type:"error",
               fade:true
             })
           }else{
			   
            document.getElementById("plant_reflection").setAttribute('data-url', thisrurl);
           }
           });
		   
      $("#maindiv #table_reflection").load(cr2path, function(response, status, xhr){

           if(status=="error"){
             // console.log($("#"+droptarget).html());
             $.ambiance({
               message:"Sorry! You cannot change this reflaction here.",
               type:"error",
               fade:true
             })
           }else{
			   
            document.getElementById("table_reflection").setAttribute('data-url', thisr2url);
           }
           });

      }else if(selectedid=="treads"){

        let thisurl="Straight Stairs/TREADS/TREADS"+colorname+".svg";
        let cpath=encodeURI(thisurl);
        //alert(thisurl);
        $("#maindiv #treads").load(cpath, function(response, status, xhr){

             if(status=="error"){
               
               $.ambiance({
                 message:"Sorry! You cannot change this color here.",
                 type:"error",
                 fade:true
               })
             }else{
              document.getElementById("treads").setAttribute('data-url', thisurl);
             }
             });
      }else if(selectedid=="risers"){
      let thisurl="";
	    let cpath="";
	  if(colorname=='Marble'){
		   thisurl="Straight Stairs/RISERS/RISER PLAIN.svg";
      // console.log(thisurl);
	  }else
	 if(colorname=='white'){
		   thisurl="Straight Stairs/RISERS/RISER PLAIN "+colorname+".svg";
      // console.log(thisurl);
	  }
	  else{
		   thisurl="Straight Stairs/RISERS/RISER GRAIN "+colorname+".svg"
       
	  }
      cpath=encodeURI(thisurl);
      $("#maindiv #risers").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("risers").setAttribute('data-url', thisurl);
           }
           });
      }else if(selectedid=="stringers"){//Coffee
	  let cpath="";
    let thisurl="";
	  if(colorname=='Marble'){
		   thisurl="Straight Stairs/STRINGERS/STRINGER FORE PLAIN.svg";
       
	  }else
	  if(colorname=='white'){
		    thisurl="Straight Stairs/STRINGERS/STRINGER FORE PLAIN "+colorname+".svg";
      // console.log(thisurl);
	  }else{
		   thisurl="Straight Stairs/STRINGERS/STRINGER FORE GRAINS "+colorname+".svg";
       
	  }
    cpath=encodeURI(thisurl);
      $("#maindiv #stringers").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("stringers").setAttribute('data-url', thisurl);
           }
           });
      }else if(selectedid=="walls"){
		 let wallurl="";
		   let lowerurl="";
	  if(colorname=='orignal'){
		  wallurl="Straight Stairs/BASE ETC/WALLPAPER.svg";
		  lowerurl="Straight Stairs/BASE ETC/WALLPAPER LOWER TRIANGLE.svg";
	  }else{
		   wallurl="Straight Stairs/WALLS/WALLPAPER"+colorname+".svg";
		  lowerurl="Straight Stairs/WALLS/WALLPAPERLOWERTRIANGLE"+colorname+".svg";
	  }
      let cpath=encodeURI(wallurl);
      let bpath=encodeURI(lowerurl);
      // 
      $("#maindiv #wallpaper").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("wallpaper").setAttribute('data-url', wallurl);
           }
           });

           $("#maindiv #wallpaper_lower_triangle").load(bpath, function(response, status, xhr){

                if(status=="error"){
                  
                  $.ambiance({
                    message:"Sorry! You cannot change this color here.",
                    type:"error",
                    fade:true
                  })
                }else{
                  document.getElementById("wallpaper_lower_triangle").setAttribute('data-url', lowerurl);
                }
                });
      }  
	  }else
	  if(designvl=='5'){
		if(selectedid=="headsforwhite"){
		  let thisurl="";
		    let cpath="";
			//alert(colorname);
		if(colorname=="White"){
			
        $('.newelparthead').html("");
        $('.newelparthead').attr('data-color', '');
         $('.newelparthead').attr('data-designcode', '');
					  $('.newelparthead').attr('data-url', '');
			  }else {
                                    let postid="newelposts";
                                    let pgurl=document.getElementById(postid).getAttribute("data-url");
									if (pgurl) {
                                       let spliturl=pgurl.split("/");
									   let checkcolor=spliturl[3];
									   if(checkcolor=="White"){
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else   if (index==6) {
                                            makeNewurl+="HEADS FOR WHITE"+".svg";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
									   //alert(makeNewurl);
                                       let path=encodeURI(makeNewurl);
                                       $("#"+postid+"h").load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(postid+"h").setAttribute('data-url', makeNewurl);
                                            }
                                      });
									}else{
                                              $.ambiance({
                                                message:"Sorry! You cannot change head color here.",
                                                type:"error",
                                                fade:true
                                              })
										
									}
                                    }
									
									//alert(postid+" and url "+pgurl);
								 
		   }
		   }
      if(selectedid=="floor"){
		  let thisurl="";
		    let cpath="";
		
         thisurl="Balcony/FLOOR/FLOOR "+colorname+".svg";
		 
		 //  document.getElementById("plant_reflection").setAttribute('data-url', thisrurl);
	  
       cpath=encodeURI(thisurl);
      $("#maindiv #floor").load(cpath, function(response, status, xhr){

           if(status=="error"){
             // console.log($("#"+droptarget).html());
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
			   
            document.getElementById("floor").setAttribute('data-url', thisurl);
           }
           });
		   

      }else   if(selectedid=="walls"){
		 let wallurl="";
	 
		   wallurl="Balcony/WALL/WALL "+colorname+".svg";
	  
      let cpath=encodeURI(wallurl);
      // 
      $("#maindiv #wall").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("wall").setAttribute('data-url', wallurl);
           }
           });
      }  
	  }else if(designvl=='2'){
		  var firstpori=firststepvalue;
		   if(selectedid=="headsforwhite"){
		  let thisurl="";
		    let cpath="";
			//alert(colorname);
		if(colorname=="White"){
			
        $('.newelparthead').html("");
        $('.newelparthead').attr('data-color', '');
         $('.newelparthead').attr('data-designcode', '');
					  $('.newelparthead').attr('data-url', '');
			  }else {
                                 let totalposts='7';
                                 for (let i = 1; i <=totalposts ; i++) {
                                    let postid="newelpost"+i;
                                    let pgurl=document.getElementById(postid).getAttribute("data-url");
									if (pgurl) {
                                       let spliturl=pgurl.split("/");
									   let checkcolor=spliturl[3];
									   let checkheadless=spliturl[4];
									   if(checkheadless=="IV B HEADLESS NEWEL POST WOOD"){}else{
									   if(checkcolor=="White"){
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else   if (index==6) {
                                            makeNewurl+="HEADS FOR WHITE"+".svg";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
									   //alert(makeNewurl);
                                       let path=encodeURI(makeNewurl);
                                       $("#"+postid+"h").load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(postid+"h").setAttribute('data-url', makeNewurl);
                                            }
                                      });
									}else{
                                              $.ambiance({
                                                message:"Sorry! You cannot change head color here.",
                                                type:"error",
                                                fade:true
                                              })
										
									}
                                    }}
									
									//alert(postid+" and url "+pgurl);
								 }
		   }
		   }
      if(selectedid=="floor"){
    		  let thisurl="";
    		  let cpath="";
    			let thisrurl="";
    			let thisr2url="";
    			let thisr3url="";
    			firststepshedowcolor=colorname;
    		   if(colorname=='Marble' && firstpori=='1'){
      		   thisurl="Stairs with Landing/FLOOR/TILE.svg";
      		   thisrurl='Stairs with Landing/1ST STEP/1ST STEP SQUARE/1ST STEP square REFLECTION ON  TILE.svg';
      		   thisr2url='Stairs with Landing/FLOOR/2ND STEP REFLECTION ON TILE.svg';
          // console.log(thisurl);
    	    }else if(colorname=='Marble' && firstpori=='2'){
      		   thisurl="Stairs with Landing/FLOOR/TILE.svg";
      		   thisrurl='Stairs with Landing/1ST STEP/1ST STEP ROUND/1ST STEP ROUND SHADOW ON  TILE.svg';
      		   thisr2url='Stairs with Landing/FLOOR/2ND STEP REFLECTION ON TILE.svg';
          // console.log(thisurl);
    	  }else{
    		 
      		   thisurl="Stairs with Landing/FLOOR/FLOOR "+colorname+".svg";
      		   if(firstpori=='1'){
      		   thisrurl="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE REFLECTION ON "+colorname+".svg";
      		   }else if(firstpori=='2'){
      		   thisrurl="Stairs with Landing/1ST STEP/1ST STEP ROUND/1ST STEP ROUND SHADOW ON "+colorname+".svg";
      		   }
      		   thisr2url="Stairs with Landing/FLOOR/2ND STEP REFLECTION ON "+colorname+".svg";
            
    	  }
		  
      		   thisr3url="Stairs with Landing/ACCESSORIES 1/SHADOW "+colorname+".svg";
           cpath=encodeURI(thisurl);
    	 //  alert(thisurl);
          $("#maindiv #floor").load(cpath, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("floor").setAttribute('data-url', thisurl);
               }
               });
    		   
    		   let crpath="";
    		   let cr2path="";
    		   let cr3path="";
           crpath=encodeURI(thisrurl);
           cr2path=encodeURI(thisr2url);
           cr3path=encodeURI(thisr3url);
          $("#maindiv #first_step_shadow").load(crpath, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                 $.ambiance({
                   message:"Sorry! You cannot change this reflaction here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("first_step_shadow").setAttribute('data-url', thisrurl);
               }
               });
    		   
          $("#maindiv #second_step_reflection").load(cr2path, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                $.ambiance({
                   message:"Sorry! You cannot change this reflaction here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("second_step_reflection").setAttribute('data-url', thisr2url);
               }
               });
          $("#maindiv #table_shadow").load(cr3path, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                 $.ambiance({
                   message:"Sorry! You cannot change this reflaction here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("table_shadow").setAttribute('data-url', thisr3url);
               }
               });
      }else if(selectedid=="treads"){

    		  let thisurl2="";
    		  firststeptreadcolor=colorname;
    		  firststepcolor=colorname;
            let thisurl="Stairs with Landing/TREADS/TREADS "+colorname+".svg";
            let thisurl3="Stairs with Landing/TREADS/TREADS "+colorname+".svg";
    		if(firstpori=='1'){
    			//square
    			if(firststepcolor=='Marble'){
		 thisurl3="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE.svg";
		 }else {
		 thisurl3="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE "+firststepcolor+".svg";
		 }
             thisurl2="Stairs with Landing/TREADS/1ST STEP TREAD SQUARE/1ST STEP sq TREAD "+colorname+".svg";
    		}else if(firstpori=='2'){
    			//round
    			 if(firststepcolor=='Marble'){
		 thisurl3="Stairs with Landing/1ST STEP/1ST STEP ROUND/1ST STEP ROUND.svg";
		  }else {
		 thisurl3="Stairs with Landing/1ST STEP/1ST STEP ROUND/1ST STEP ROUND "+firststepcolor+".svg";
		  }
             thisurl2="Stairs with Landing/TREADS/1ST STEP TREAD ROUND/1ST STEP TREAD "+colorname+".svg";
    		}
          let cpath=encodeURI(thisurl);
          let cpath2=encodeURI(thisurl2);
          let cpath3=encodeURI(thisurl3);
          
          $("#maindiv #first_step").load(cpath3, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("first_step").setAttribute('data-url', thisurl3);
               }
               });
          $("#maindiv #treads").load(cpath, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("treads").setAttribute('data-url', thisurl);
                document.getElementById("treads").setAttribute('data-color', colorname);
               }
               });
    		   
          $("#maindiv #first_step_tread").load(cpath2, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("first_step_tread").setAttribute('data-url', thisurl2);
               }
               });
			   
			   						let svgurl=document.getElementById("footrail").getAttribute('data-url');
							//alert(colorname);
							  if(svgurl){
								  //alert(svgurl);
                                       let spliturl=svgurl.split("/");
									   let spindlecategory=spliturl[4];
									   
							 
									//  alert(temp1);
									   let spindlesshadow="Stairs with Landing/"+spindlecategory+"/SHADOW "+colorname+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#footrail_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("footrail_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
							  }	
							  	let svgurln=document.getElementById("newelpost6").getAttribute('data-url');
							//alert(colorname);
							  if(svgurln){
								  //alert(svgurl);
                                       let spliturl=svgurln.split("/");
									   let spindlecategory=spliturl[4];
									   
							 
									//  alert(temp1);
									   let spindlesshadow="Stairs with Landing/"+spindlecategory+"/SHADOW "+colorname+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#bottom_newel_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("bottom_newel_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
							  }	
							  
      }else if(selectedid=="risers"){

          let thisurl="";
    	    let thisurl2="";
    	    let cpath2="";
    	    let cpath="";
    		firststeprisercolor=colorname;
    		firststepcolor=colorname;
    	  if(colorname=='Marble'){
    		   thisurl="Stairs with Landing/RISERS/RISER PLAIN.svg";
    		   if(firstpori=='1'){
    			//square
    			
             thisurl2="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER PLAIN.svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Stairs with Landing/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER PLAIN.svg";
    		}
          // console.log(thisurl);
    	  }else
    	 if(colorname=='white'){
    		   thisurl="Stairs with Landing/RISERS/RISER PLAIN white.svg";
    		      if(firstpori=='1'){
    			//square
    			
             thisurl2="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER PLAIN white.svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Stairs with Landing/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER PLAIN white.svg";
    		}
          // console.log(thisurl);
    	  }
    	  else{
    		   thisurl="Stairs with Landing/RISERS/RISER GRAIN "+colorname+".svg"
                if(firstpori=='1'){
    			//square
    			
             thisurl2="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER GRAIN "+colorname+".svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Stairs with Landing/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER GRAIN "+colorname+".svg";
    		}
    	  }
          cpath=encodeURI(thisurl);
          cpath2=encodeURI(thisurl2);
          $("#maindiv #risers").load(cpath, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("risers").setAttribute('data-url', thisurl);
                document.getElementById("risers").setAttribute('data-color', colorname);
               }
               });
    		   
          $("#maindiv #first_step_riser").load(cpath2, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("first_step_riser").setAttribute('data-url', thisurl2);
               }
               });

      }else if(selectedid=="stringers"){//Coffee

	  let cpath="";
    let thisurl="";
	  if(colorname=='Marble'){
		   thisurl="Stairs with Landing/STRINGERS/STRINGER FRONT PLAIN.svg";
       
	  }else
	  if(colorname=='white'){
		    thisurl="Stairs with Landing/STRINGERS/STRINGER FRONT PLAIN white.svg";
      // console.log(thisurl);
	  }else{
		   thisurl="Stairs with Landing/STRINGERS/STRINGER FRONT GRAIN "+colorname+".svg";
       
	  }
    cpath=encodeURI(thisurl);
      $("#maindiv #stringer_front").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("stringer_front").setAttribute('data-url', thisurl);
           }
           });
      }else if(selectedid=="walls"){
		  let wallurl="";

		   wallurl="Stairs with Landing/WALLS/WALL "+colorname+".svg";
	
     // let wallurl="Stairs with Landing/WALLS/WALLPAPER BACK "+colorname+".svg";
      let cpath=encodeURI(wallurl);
      
      $("#maindiv #wall").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("wall").setAttribute('data-url', wallurl);
           }
           });

      }
	  }
else if(designvl=='3'){
		  var firstpori=firststepvalue;
		   if(selectedid=="headsforwhite"){
		  let thisurl="";
		    let cpath="";
			//alert(colorname);
		if(colorname=="White"){
			
        $('.newelparthead').html("");
        $('.newelparthead').attr('data-color', '');
         $('.newelparthead').attr('data-designcode', '');
					  $('.newelparthead').attr('data-url', '');
			  }else {
                                 let totalposts='6';
                                 for (let i = 1; i <=totalposts ; i++) {
                                    let postid="newelpost"+i;
                                    let pgurl=document.getElementById(postid).getAttribute("data-url");
									if (pgurl) {
                                       let spliturl=pgurl.split("/");
									   let checkcolor=spliturl[3];
									   let checkheadless=spliturl[4];
									   if(checkheadless=="IV B HEADLESS NEWEL POST WOOD"){}else{
									   if(checkcolor=="White"){
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else   if (index==6) {
                                            makeNewurl+="HEADS FOR WHITE"+".svg";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+postid+"h").load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(postid+"h").setAttribute('data-url', makeNewurl);
                                            }
                                      });
									}else{
                                              $.ambiance({
                                                message:"Sorry! You cannot change head color here.",
                                                type:"error",
                                                fade:true
                                              })
										
									}
                                    }}
									
									//alert(postid+" and url "+pgurl);
								 }
		   }
		   }
      if(selectedid=="floor"){
    		  let thisurl="";
    		  let cpath="";
    			let thisrurl="";
    			let thisr2url="";
    			let thisr3url="";
    			let thisr4url="";
    			firststepshedowcolor=colorname;
    		   if(colorname=='Marble' && firstpori=='1'){
      		   thisurl="Stairs with Triangles/FLOOR/TILE.svg";
      		   thisrurl='Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE REFLECTION ON TILE.svg';
      		   thisr3url='Stairs with Triangles/1ST STEP/1ST STEP SQUARE/Shadow.svg';
      		   thisr2url='Stairs with Triangles/FLOOR/2ND STEP REFLECTION ON TILE.svg';
          // console.log(thisurl);
    	    }else if(colorname=='Marble' && firstpori=='2'){
      		   thisurl="Stairs with Triangles/FLOOR/TILE.svg";
      		   thisrurl='Stairs with Triangles/1ST STEP/1ST STEP ROUND/1ST STEP ROUND REFLECTION ON TILE.svg';
      		   thisr3url='Stairs with Triangles/1ST STEP/1ST STEP ROUND/Shadow.svg';
      		   thisr2url='Stairs with Triangles/FLOOR/2ND STEP REFLECTION ON TILE.svg';
          // console.log(thisurl);
    	  }else{
    		 
      		   thisurl="Stairs with Triangles/FLOOR/FLOOR "+colorname+".svg";
      		   if(firstpori=='1'){
				     thisr3url='Stairs with Triangles/1ST STEP/1ST STEP SQUARE/Shadow '+colorname+'.svg';
      		   thisrurl="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE REFLECTION ON "+colorname+".svg";
      		   }else if(firstpori=='2'){
				    thisr3url='Stairs with Triangles/1ST STEP/1ST STEP ROUND/Shadow '+colorname+'.svg';
      		   thisrurl="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1ST STEP ROUND REFLECTION ON "+colorname+".svg";
      		   }
      		   thisr2url="Stairs with Triangles/FLOOR/2ND STEP REFLECTION ON "+colorname+".svg";
            
    	  }
		  if(colorname=='Marble'){
				     thisr4url='Stairs with Triangles/ACCESSORIES/TABLE/SHADOW.svg';
		  }else{
				     thisr4url='Stairs with Triangles/ACCESSORIES/TABLE/SHADOW '+colorname+'.svg';
					 }
           cpath=encodeURI(thisurl);
    	 //  alert(thisurl);
          $("#maindiv #floor").load(cpath, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("floor").setAttribute('data-url', thisurl);
               }
               });
    		   
    		   let crpath="";
    		   let cr2path="";
    		   let cr3path="";
    		   let cr4path="";
           crpath=encodeURI(thisrurl);
           cr2path=encodeURI(thisr2url);
           cr3path=encodeURI(thisr3url);
           cr4path=encodeURI(thisr4url);
          $("#maindiv #table_shadow").load(cr4path, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                 $.ambiance({
                   message:"Sorry! You cannot change this reflaction here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("table_shadow").setAttribute('data-url', thisr4url);
               }
               });
          $("#maindiv #first_step_shadow").load(crpath, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                 $.ambiance({
                   message:"Sorry! You cannot change this reflaction here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("first_step_shadow").setAttribute('data-url', thisrurl);
               }
               });
          $("#maindiv #first_step_reflaction").load(cr3path, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                 $.ambiance({
                   message:"Sorry! You cannot change this reflaction here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("first_step_reflaction").setAttribute('data-url', thisr3url);
               }
               });
    		   
          $("#maindiv #second_step_reflection").load(cr2path, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                 $.ambiance({
                   message:"Sorry! You cannot change this reflaction here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("second_step_reflection").setAttribute('data-url', thisr2url);
               }
               });
      }else if(selectedid=="treads"){

    		  let thisurl2="";
    		  firststeptreadcolor=colorname;
            let thisurl="Stairs with Triangles/TREADS/TREADS "+colorname+".svg";
    		if(firstpori=='1'){
    			//square
    			
             thisurl2="Stairs with Triangles/TREADS/TREADS 1ST STEP SQUARE/TREAD "+colorname+".svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Stairs with Triangles/TREADS/TREADS 1ST STEP ROUND/TREAD "+colorname+".svg";
    		}
          let cpath=encodeURI(thisurl);
          let cpath2=encodeURI(thisurl2);
          
          $("#maindiv #treads").load(cpath, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("treads").setAttribute('data-url', thisurl);
               }
               });
    		   
          $("#maindiv #first_step_tread").load(cpath2, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("first_step_tread").setAttribute('data-url', thisurl2);
               }
               });
			   						let svgurl=document.getElementById("newelpost6").getAttribute('data-url');
							//alert(colorname);
							  if(svgurl){
								  //alert(svgurl);
                                       let spliturl=svgurl.split("/");
									   let spindlecategory=spliturl[4];
									   
							 
									  if(colorname=="light" || colorname=="medium" ){
										  colorname="Oak";
									  }
									  
									  if(colorname=="dark"){
										  colorname="Sienna";
									  }
									//  alert(temp1);
									   let spindlesshadow="Stairs with Triangles/"+spindlecategory+"/SHADOW "+colorname+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#bottom_newel_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("bottom_newel_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
							  }	
							  			let svgurlu=document.getElementById("newelpost2").getAttribute('data-url');
							//alert(colorname);
							  if(svgurlu){
								  //alert(svgurl);
                                       let spliturl=svgurlu.split("/");
									   let spindlecategory=spliturl[4];
									   
							 
									  if(colorname=="light" || colorname=="medium" ){
										  colorname="Oak";
									  }
									  
									  if(colorname=="dark"){
										  colorname="Sienna";
									  }
									//  alert(temp1);
									   let spindlesshadow="Stairs with Triangles/"+spindlecategory+"/SHADOW "+colorname+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#upper_newel_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("upper_newel_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
							  }	
							  
							  	let svgurluf=document.getElementById("footrail").getAttribute('data-url');
							//alert(colorname);
							  if(svgurluf){
								  //alert(svgurl);
                                       let spliturl=svgurluf.split("/");
									   let spindlecategory=spliturl[4];
									   
							 
									  if(colorname=="light" || colorname=="medium" ){
										  colorname="Oak";
									  }
									  
									  if(colorname=="dark"){
										  colorname="Sienna";
									  }
									//  alert(temp1);
									   let spindlesshadow="Stairs with Triangles/"+spindlecategory+"/SHADOW "+colorname+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#footrail_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("footrail_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
							  }	
      }else if(selectedid=="risers"){

          let thisurl="";
    	    let thisurl2="";
    	    let cpath2="";
    	    let cpath="";
    		firststeprisercolor=colorname;
    		firststepcolor=colorname;
    	  if(colorname=='Marble'){
    		   thisurl="Stairs with Triangles/RISERS/RISER PLAIN.svg";
    		   if(firstpori=='1'){
    			//square
    			
             thisurl2="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER PLAIN.svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER PLAIN.svg";
    		}
          // console.log(thisurl);
    	  }else
    	 if(colorname=='white'){
    		   thisurl="Stairs with Triangles/RISERS/RISER PLAIN white.svg";
    		      if(firstpori=='1'){
    			//square
    			
             thisurl2="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER PLAIN white.svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER PLAIN white.svg";
    		}
          // console.log(thisurl);
    	  }
    	  else{
    		   thisurl="Stairs with Triangles/RISERS/RISER GRAIN "+colorname+".svg"
                if(firstpori=='1'){
    			//square
    			
             thisurl2="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER GRAIN "+colorname+".svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER GRAIN "+colorname+".svg";
    		}
    	  }
          cpath=encodeURI(thisurl);
          cpath2=encodeURI(thisurl2);
          $("#maindiv #risers").load(cpath, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("risers").setAttribute('data-url', thisurl);
               }
               });
    		   
          $("#maindiv #first_step_riser").load(cpath2, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("first_step_riser").setAttribute('data-url', thisurl2);
               }
               });

      }else if(selectedid=="stringers"){//Coffee

	  let cpath="";
    let thisurl="";
	  if(colorname=='Marble'){
		   thisurl="Stairs with Triangles/STRINGERS/STRINGER PLAIN.svg";
       
	  }else
	  if(colorname=='white'){
		    thisurl="Stairs with Triangles/STRINGERS/STRINGER PLAIN white.svg";
      // console.log(thisurl);
	  }else{
		   thisurl="Stairs with Triangles/STRINGERS/STRINGER GRAIN "+colorname+".svg";
       
	  }
    cpath=encodeURI(thisurl);
      $("#maindiv #stringer").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("stringer").setAttribute('data-url', thisurl);
           }
           });
      }else if(selectedid=="walls"){
      let wallurl="Stairs with Triangles/WALL/WALL "+colorname+".svg";
      let cpath=encodeURI(wallurl);
     // let lowerurl="Straight Stairs/WALLS/WALLPAPERLOWERTRIANGLE"+colorname+".svg";
      //let bpath=encodeURI(lowerurl);
      // 
      $("#maindiv #wall").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("wall").setAttribute('data-url', wallurl);
           }
           });

        /*   $("#maindiv #wallpaper_lower_triangle").load(bpath, function(response, status, xhr){

                if(status=="error"){
                  
                  $.ambiance({
                    message:"Sorry! You cannot change this color here.",
                    type:"error",
                    fade:true
                  })
                }else{
                  document.getElementById("wallpaper_lower_triangle").setAttribute('data-url', lowerurl);
                }
                });*/
      }
	  }else if(designvl=='4'){
		  var firstpori=firststepvalue;
		 // alert(firstpori);
		   if(selectedid=="headsforwhite"){
		  let thisurl="";
		    let cpath="";
			//alert(colorname);
		if(colorname=="White"){
			
        $('.newelparthead').html("");
        $('.newelparthead').attr('data-color', '');
         $('.newelparthead').attr('data-designcode', '');
					  $('.newelparthead').attr('data-url', '');
			  }else {
                                    let postid="newelpost1";
                                    let pgurl=document.getElementById(postid).getAttribute("data-url");
									if (pgurl) {
                                       let spliturl=pgurl.split("/");
									   let checkcolor=spliturl[3];
									   let checkheadless=spliturl[4];
									   if(checkheadless=="HEADLESS NEWEL POST"){}else{
									   if(checkcolor=="White"){
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else   if (index==6) {
                                            makeNewurl+="HEADS FOR WHITE"+".svg";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+postid+"h").load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(postid+"h").setAttribute('data-url', makeNewurl);
                                            }
                                      });
									}else{
                                              $.ambiance({
                                                message:"Sorry! You cannot change head color here.",
                                                type:"error",
                                                fade:true
                                              })
										
									}
                                    }}
									
									//alert(postid+" and url "+pgurl);
								 
		   }
		   }
      if(selectedid=="floor"){
    		  let thisurl="";
    		  let cpath="";
    			firststepshedowcolor=colorname;
    		   if(colorname=='Marble'){
      		   thisurl="Curved Stairs/FLOOR/TILE.svg";
          // console.log(thisurl);
    	    }else{
      		   thisurl="Curved Stairs/FLOOR/FLOOR "+colorname+".svg";
			  // alert(thisurl);
    	  }
           cpath=encodeURI(thisurl);
    	 //  alert(thisurl);
          $("#maindiv #floor").load(cpath, function(response, status, xhr){

               if(status=="error"){
                 // console.log($("#"+droptarget).html());
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
    			   
                document.getElementById("floor").setAttribute('data-url', thisurl);
               }
               });
    		   
      }else if(selectedid=="treads"){

    		  let thisurl2="";
    		  firststeptreadcolor=colorname;
            let thisurl="Curved Stairs/TREADS/TREADS "+colorname+".svg";
    		if(firstpori=='1'){
    			//square
    			
             thisurl2="Curved Stairs/TREADS/TREADS FIRST STEP SQUARE/FIRST STEP SQUARE "+colorname+".svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Curved Stairs/TREADS/TREADS FIRST STEP ROUND/FIRST STEP ROUND "+colorname+".svg";
    		}
          let cpath=encodeURI(thisurl);
          let cpath2=encodeURI(thisurl2);
          
          $("#maindiv #treads").load(cpath, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("treads").setAttribute('data-url', thisurl);
               }
               });
    		   
          $("#maindiv #first_step_tread").load(cpath2, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("first_step_tread").setAttribute('data-url', thisurl2);
               }
               });
      }else if(selectedid=="risers"){

          let thisurl="";
    	    let thisurl2="";
    	    let cpath2="";
    	    let cpath="";
    		firststeprisercolor=colorname;
    		firststepcolor=colorname;
    	  if(colorname=='Marble'){
    		   thisurl="Curved Stairs/RISERS/RISER.svg";
    		   if(firstpori=='1'){
    			//square
    			
             thisurl2="Curved Stairs/RISERS/RISER FIRST STEP SQUARE/RISER FIRST STEP SQUARE.svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Curved Stairs/RISERS/RISER FIRST STEP ROUND/RISER FIRST STEP ROUND.svg";
    		}
          // console.log(thisurl);
    	  }else
    	 if(colorname=='white'){
    		   thisurl="Curved Stairs/RISERS/RISER white.svg";
    		      if(firstpori=='1'){
    			//square
    			
             thisurl2="Curved Stairs/RISERS/RISER FIRST STEP SQUARE/RISER FIRST STEP SQUARE white.svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Curved Stairs/RISERS/RISER FIRST STEP ROUND/RISER FIRST STEP ROUND white.svg";
    		}
          // console.log(thisurl);
    	  }
    	  else{
    		   thisurl="Curved Stairs/RISERS/RISER "+colorname+".svg"
                if(firstpori=='1'){
    			//square
    			
             thisurl2="Curved Stairs/RISERS/RISER FIRST STEP SQUARE/RISER FIRST STEP SQUARE "+colorname+".svg";
    		}else if(firstpori=='2'){
    			//round
    			
             thisurl2="Curved Stairs/RISERS/RISER FIRST STEP ROUND/RISER FIRST STEP ROUND "+colorname+".svg";
    		}
    	  }
          cpath=encodeURI(thisurl);
          cpath2=encodeURI(thisurl2);
          $("#maindiv #risers").load(cpath, function(response, status, xhr){

               if(status=="error"){
                
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("risers").setAttribute('data-url', thisurl);
               }
               });
    		   
          $("#maindiv #first_step_riser").load(cpath2, function(response, status, xhr){

               if(status=="error"){
                 
                 $.ambiance({
                   message:"Sorry! You cannot change this color here.",
                   type:"error",
                   fade:true
                 })
               }else{
                document.getElementById("first_step_riser").setAttribute('data-url', thisurl2);
               }
               });

      }else if(selectedid=="stringers"){//Coffee

	  let cpath="";
    let thisurl="";
	  if(colorname=='Marble'){
		   thisurl="Curved Stairs/STRINGERS/STRINGER PLAIN.svg";
       
	  }else
	  if(colorname=='white'){
		    thisurl="Curved Stairs/STRINGERS/STRINGER PLAIN white.svg";
      // console.log(thisurl);
	  }else{
		   thisurl="Curved Stairs/STRINGERS/STRINGER "+colorname+".svg";
       
	  }
    cpath=encodeURI(thisurl);
      $("#maindiv #stringer").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("stringer").setAttribute('data-url', thisurl);
           }
           });
      }else if(selectedid=="walls"){
      let wallurl="Curved Stairs/WALLS/WALL "+colorname+".svg";
      let cpath=encodeURI(wallurl);
      // 
      $("#maindiv #wall").load(cpath, function(response, status, xhr){

           if(status=="error"){
             
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("wall").setAttribute('data-url', wallurl);
           }
           });

         
      }
	  }
     
   
 });

 

$(".choosebg").on('click', function(){
	//alert($(this).attr('id'));

  document.getElementById("page_loader").style.display="block";
  document.getElementById("design_body").style.position="fixed";
  $('.whenstairchoosed').css('display', 'block');
  $('#dreamid').css('display', 'none');
  $('.card').css('opacity', '1');
  $('.choosebg').css('color', '#6c757d');
  $(this).css('color', 'white');
   var bgid=$(this).attr('id');
   choosedesign=bgid;
   choosedesigntext=$(this).html();
   if(bgid=='1'){
      designurl='designs/straight_stairs.php';
	  $('#firststep').css('display', 'none');
	  $('#headsforwhite').css('display', 'none');
	     $('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
			 }else if (bgid=='2') {
      designurl='designs/stairs_with_landing.php';
	  $('#firststep').css('display', 'block');
	  firststepvalue="2";
	  $('#headsforwhite').css('display', 'block');
	 $('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
		}else if (bgid=='3') {
      designurl='designs/stairs_with_triangles.php';
	  $('#firststep').css('display', 'block');
	 firststepvalue="2";
	  $('#headsforwhite').css('display', 'block');
	$('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
		}else if (bgid=='4') {
      designurl='designs/curved_stairs.php';
	  $('#firststep').css('display', 'block');
	 firststepvalue="2";
	  $('#headsforwhite').css('display', 'block');
	$('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li>');
		 }else if (bgid=='5') {
      designurl='designs/balcony.php';
	  $('#firststep').css('display', 'none');
	  $('#treads').css('display', 'none');
	  $('#risers').css('display', 'none');
	  $('#stringers').css('display', 'none');
	
	  $('#tilefloor').css('display', 'none');
	 $('#headsforwhite').css('display', 'block');
	$('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
		}else{
      designurl='';
    }

   if(bgid !='5'){
	   
	  $('#treads').css('display', 'block');
	  $('#risers').css('display', 'block');
	  $('#stringers').css('display', 'block');
	  $('#tilefloor').css('display', 'block');
   }
    $("#maindiv").load(designurl, function(){
       
         setTimeout(() => {
          document.getElementById("page_loader").style.display="none";
          document.getElementById("design_body").style.removeProperty('position');
          
          loadRectangles();
        //  $(".round").hide();
                              
         }, 6000);
    });
    
  $('#designbase').css('display', 'block'); 
  $('#designmaterial').css('display', 'none'); 
$('.choosebgbtn').click();

						  $('#designcolor').css('display', 'none');
						  $('#designcategory').css('display', 'none');
						  $('#designsubcategory').css('display', 'none');
              $("#partsimagediv").html("");   $("#partsimagediv1").html("");
						 $('#designmaterial').css('display', 'none');
});


 $("#designtypeddvalues").on('click', '.designtypedd', function(){
	   $('.designtypedd').css('color', '#6c757d');
  $(this).css('color', 'white');
						  $('#designcolor').css('display', 'none');
						  $('#designcategory').css('display', 'none');
						  $('#designsubcategory').css('display', 'none');
              $("#partsimagediv").html("");   $("#partsimagediv1").html("");
						 $('#designmaterial').css('display', 'none');
    	       // alert($("#catdropdown").val());
		
    	  var balustradeid=$(this).attr('value');
		 // alert(balustradeid);
		 if(balustradeid==designtypeid){}else{
			 
    	   designtypeid=balustradeid;
		   
        $('.dynamicparts').html("");
        $('.dynamicparts').attr('data-color', '');
         $('.dynamicparts').attr('data-designcode', '');
         $('.dynamicparts').attr('data-url', '');
		 }
		   designtypeidtext=$(this).html();
		   //alert(designtypeidtext);
        var bgid=choosedesign;
		var fstp=firststepvalue;

	// if(loaded==0){
    
  //   loaded2=1;

	// }else{
	// 	loaded=0;
	// }	
	
var dotsurl="";
var cpath5="";
        if(balustradeid=='1'){
			$('#designmaterialtext').html('Select Stair Parts...');
			$('#designmaterialvalues').html('<li class="nav-item"> <a class="nav-link designmaterial" value="h1" href="#">Handrails</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="n1" href="#">Newel Posts</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="is1" href="#">Iron Spindles</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="ws1" href="#">Wood Spindles</a></li>');
			$('#designmaterial').css('display', 'block');
			if(bgid=='1'){
				dotsurl="Straight Stairs/dots.svg";
			}else if(bgid=='2'){
				if(fstp=='1'){
					//squre
					dotsurl="Stairs with Landing/dots1.svg";
				}else if(fstp=='2'){
					// round
					dotsurl="Stairs with Landing/dots.svg";
				}
				
			}else if(bgid=='3'){
				if(fstp=='1'){
					//squre
					dotsurl="Stairs with Triangles/dots1.svg";
				}else if(fstp=='2'){
					// round
					dotsurl="Stairs with Triangles/dots.svg";
				}
			}else if(bgid=='4'){
				if(fstp=='1'){
					//squre
					dotsurl="Curved Stairs/dots1.svg";
				}else if(fstp=='2'){
					// round
					dotsurl="Curved Stairs/dots.svg";
				}
			}else if(bgid=='5'){
				dotsurl="Balcony/dots.svg";
			}
		}else if(balustradeid=='2'){
			$('#designmaterialtext').html('Select Accent Material...');
			$('#designmaterialvalues').html('<li class="nav-item"> <a class="nav-link designmaterial" value="w2" href="#">Hardwood</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="ss2" href="#">Stainless Steel</a></li>');
			$('#designmaterial').css('display', 'block');
				if(bgid=='1'){
				dotsurl="Straight Stairs/glassdots.svg";
			}else if(bgid=='2'){
				dotsurl="Stairs with Landing/glassdots.svg";
				
			}else if(bgid=='3'){
			dotsurl="Stairs with Triangles/glassdots.svg";
			}else if(bgid=='5'){
				dotsurl="Balcony/glassdots.svg";
			}
			 
		}
		
		
		
		
		cpath5=encodeURI(dotsurl);
		
		  $("#maindiv #dots").load(cpath5, function(response, status, xhr){
           if(status=="error"){
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("dots").setAttribute('data-url', dotsurl);
           }
           });
		   
		   $('.designtypeddbtn').click();
    });

 var materialvlstart=0;
 $("#designmaterialvalues").on('click', '.designmaterial', function(){
		 $('.designmaterial').css('color', '#6c757d');
  $(this).css('color', 'white');
var materialvl=0;	 
					
					  $('#designcategory').css('display', 'none');
					 $('#designsubcategory').css('display', 'none');
              $("#partsimagediv").html("");   $("#partsimagediv1").html("");
						 
			 
		    var balustradeid=$(this).attr('value');
			//alert(balustradeid);
			designmaterialid=balustradeid;
		     designmaterialname=$(this).html();
		    var balustradetype=designtypeid;
        var bgid=choosedesign;
		if(balustradetype=='2'){
        $('.dynamicparts').html("");
        $('.dynamicparts').attr('data-color', '');
         $('.dynamicparts').attr('data-designcode', '');
         $('.dynamicparts').attr('data-url', '');			  
		}		  
    
        var balustradeName=designtypeidtext;

      let savedtypename=document.getElementById("savedtype").value;
      let typename=designmaterialname;
      if (balustradeName=="Spindle Design options" && typename=="Iron Spindles") {
          if (typename==savedtypename) {
              
			 materialvl=0;
          }else if(materialvlstart==0){
			   materialvl=0;
			   	document.getElementById("savedtype").value=typename;
								  materialvlstart=1;
		  } else{          //   if(materialvlstart==1){
							  if (confirm('Your current spindle design will be deleted if you continue.')) {
							$('.spindleparts').html("");
							$('.spindleparts').attr('data-color', '');
							$('.spindleparts').attr('data-designcode', '');
							$('.spindleparts').attr('data-url', '');
							document.getElementById("savedtype").value=typename;
							
							 materialvl=0;
							  }else{
								//  alert(previous);
								  materialvl=1;
								  //materialvlstart=1;
										 $('#designcolor').css('display', 'none');
										  $('#designcategory').css('display', 'none');
										  $('#designsubcategory').css('display', 'none');
							  $("#partsimagediv").html("");   $("#partsimagediv1").html("");
							$('#designmaterialtext').html('Select Stair Parts...');
			$('#designmaterialvalues').html('<li class="nav-item"> <a class="nav-link designmaterial" value="h1" href="#">Handrails</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="n1" href="#">Newel Posts</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="is1" href="#">Iron Spindles</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="ws1" href="#">Wood Spindles</a></li>');
				$('#designmaterial').css('display', 'block');
							  }
		 // }else{
			  
			//  materialvlstart=1;
		 // }
          }
         
      }else if (balustradeName=="Spindle Design options" && typename=="Wood Spindles") {
          if (typename==savedtypename) {
              
			 materialvl=0;
          }else if(materialvlstart==0){
			   materialvl=0;
			   	document.getElementById("savedtype").value=typename;
								  materialvlstart=1;
								  
		  } else{      //if(materialvlstart==1){
						  if (confirm('Your current spindle design will be deleted if you continue.') ) {
						$('.spindleparts').html("");
						$('.spindleparts').attr('data-color', '');
						$('.spindleparts').attr('data-designcode', '');
						$('.spindleparts').attr('data-url', '');
						document.getElementById("savedtype").value=typename;
						 materialvl=0;
						  }else{
							  //alert(previous);
							 materialvl=1;
								//  materialvlstart=1;
									  $('#designcolor').css('display', 'none');
									  $('#designcategory').css('display', 'none');
									 $('#designsubcategory').css('display', 'none');
									 $("#partsimagediv").html("");   $("#partsimagediv1").html("");
							$('#designmaterialtext').html('Select Stair Parts...');
			$('#designmaterialvalues').html('<li class="nav-item"> <a class="nav-link designmaterial" value="h1" href="#">Handrails</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="n1" href="#">Newel Posts</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="is1" href="#">Iron Spindles</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="ws1" href="#">Wood Spindles</a></li>');
			$('#designmaterial').css('display', 'block');
						  }
						   // }else{
						  
						//  materialvlstart=1;
					  //}
          }
         
      }else{
			 materialvl=0;
			 }
	    if(materialvl==0){
			 $.ajax({
              	url:"load_colors.php",
              	type:"post",
              	data:{materialid:balustradeid},
              	success:function(data){
					
              		document.getElementById("designcolorvalues").innerHTML=data;
					//$('#designcolorvalues2').html(data);
					
				           	$('#designcolor').css('display', 'block');
              	}
              });
		}
		$('.designmaterialbtn').click();
 });
 
 $("#designcolorvalues").on('click', '.box2', function(){
	// alert($(this).attr('value'));
	 
	 
						
						  $('#designsubcategory').css('display', 'none');
              $("#partsimagediv").html("");   $("#partsimagediv1").html("");
						
    	var designcolor=$(this).attr('value');
		designcolorid=designcolor;
		designcoloridtext=$(this).attr('data-color');
        var bgid=choosedesign;
        var designmaterial=designmaterialid;
        var designtypedd=designtypeid;
        var firststep=firststepvalue;
		//alert(firststep);
		 if(designtypedd=='1'){
			 var checktypeandbackgound=0;
			 if(bgid=='1'){
				 checktypeandbackgound=0;
			 }else
				 if(bgid=='2' && designmaterial=='is1' || bgid=='2' && designmaterial=='ws1'){
					 checktypeandbackgound=0;
				 }else
				 if(bgid=='2' && designmaterial=='n1' || bgid=='2' && designmaterial=='h1'){
					 checktypeandbackgound=1;
				 }else
				 if(bgid=='3' && designmaterial=='is1' || bgid=='3' && designmaterial=='ws1'){
					 checktypeandbackgound=0;
				 }else
				 if(bgid=='3' && designmaterial=='n1' || bgid=='3' && designmaterial=='h1'){
					 checktypeandbackgound=1;
				 }else
				 if(bgid=='4' && designmaterial=='is1' || bgid=='4' && designmaterial=='ws1'){
					 checktypeandbackgound=0;
				 }else
				 if(bgid=='4' && designmaterial=='n1' || bgid=='4' && designmaterial=='h1'){
					 checktypeandbackgound=1;
				 }
				 
				 if(checktypeandbackgound==0){
			 // spindles
			 
			 $.ajax({
						url:"load_categories.php",
						type:"post",
						data:{bgid:bgid, designtypedds:designtypedd, designmaterial:designmaterial, designcolor:designcolor, firststep:firststep},
						success:function(data){
							document.getElementById("designcategoryvalues").innerHTML=data;
							$('#designcategory').css('display', 'none');
								//alert(data);
										 //$('select[name=name] option:eq(1)').attr('selected', 'selected');
										$('.designcategory').first().click();
										var checkit= $('.designcategory').first();
										//alert(designtypeid);
										var catval=checkit.attr('value');
										designcategoryidtext=checkit.html();
										//alert(designcategoryidtext);
									if(designtypeid=='1'){
										
										//alert('category should be eliminated');
										
										
										  $("#partsimagediv").html("");   $("#partsimagediv1").html("");
						var designcategory=catval;
						var designcolor=designcolorid;
						var bgid=choosedesign;
						var designmaterial=designmaterialid;
						var designtypedd=designtypeid;
						//alert(designcategory);
						 if(designtypedd=='1'){
							 // spindles
							// console.log({bgid:bgid, designtypedds:designtypedd, designmaterial:designmaterial, designcolor:designcolor, designcategory:designcategory});
							 $.ajax({
								url:"load_sub_categories.php",
								type:"post",
								data:{bgid:bgid, designtypedds:designtypedd, designmaterial:designmaterial, designcolor:designcolor, designcategory:designcategory},
								success:function(data){
									//alert(data);
									document.getElementById("designsubcategorytext").innerHTML=data.text;
									document.getElementById("designsubcategoryvalues").innerHTML=data.options;
									$('#designsubcategory').css('display', 'block');
								}
							  });
						}
										
										
									}else{}
									
			}
              });
			  
		 }	else if(checktypeandbackgound==1){
			 // spindles
			 $.ajax({
						url:"load_categories.php",
						type:"post",
						data:{bgid:bgid, designtypedds:designtypedd, designmaterial:designmaterial, designcolor:designcolor, firststep:firststep},
						success:function(data){
							document.getElementById("designcategoryvalues").innerHTML=data;
							//alert(data);
							$('#designcategory').css('display', 'block');
							
			}
              });
		 }		  
			  
			  
			  
		}else if(designtypedd=='2'){
			// glass
			$.ajax({
              	url:"load_categories.php",
              	type:"post",
              	data:{bgid:bgid, designtypeddg:designtypedd, designmaterial:designmaterial, designcolor:designcolor},
              	success:function(data){
              		document.getElementById("designcategoryvalues").innerHTML=data;
					//alert(data);
					$('#designcategory').css('display', 'block');
				
              	}
              });
		}
	
		$('.designcolorbtn').click();
$('.designcategorybtn').click();		
 });

 $("#designcategoryvalues").on('click', '.designcategory', function(){
    	// alert($("#catdropdown").val());
		
	  $('.designcategory').css('color', '#6c757d');
  $(this).css('color', 'white');
		var checkcategory=0;
      $("#partsimagediv").html("");   $("#partsimagediv1").html("");
    	var designcategory=$(this).attr('value');
		designcategoryid=designcategory;
		designcategoryidtext=$(this).html();
		//alert(designcategoryidtext);
        var designcolor=designcolorid;
        var bgid=choosedesign;
        var designmaterial=designmaterialid;
        var designtypedd=designtypeid;
        var fstep=firststepvalue;
		 if(designtypedd=='1'){
			  var ctytxt="";
			   $.ajax({
				url:"load_sub_categories.php",
				type:"post",
				async : false,
				data:{realnamec:designcategory},
				success:function(data){
					ctytxt=data;
					//alert(data);
				}
					
					
				});
			 if(designmaterial=="h1" && bgid=='2' && fstep=='2' || designmaterial=="h1" && bgid=='3' && fstep=='2'  || designmaterial=="h1" && bgid=='4' && fstep=='2' ){
				 // check newel
				
				if(bgid=='4'){
				 var nl=document.getElementById('newelpost1').getAttribute('data-url');
				 }else{
				 var nl=document.getElementById('newelpost6').getAttribute('data-url');
				}
				 if(nl){
						 let spliturl=nl.split("/");
						   let checkcolor=spliturl[3];
						   let checkpost=spliturl[4];
						   
						  
							 if(checkpost=="IV B HEADLESS NEWEL POST WOOD" || checkpost=="HEADLESS NEWEL POST"){
								  if(ctytxt=="WOOD HANDRAIL STRAIGHT FRONT" || ctytxt=="VI A-1 WOOD STRAIGHT HANDRAIL" || ctytxt=="STRAIGHT HANDRAIL"){
									  //should not process further 
								  alert("You can't add this category untill you have HEADLESS NEWEL POST");
								  checkcategory=1;
								  }else{checkcategory=0;}
								 
							 }else if(checkpost=="IV B BOTTOM NEWEL POST" || checkpost=="BOTTOM NEWEL POST"){
								 
								   if(ctytxt=="WOOD HANDRAIL VALUTE FRONT" || ctytxt=="VI A-1 WOOD VOLUTE HANDRAIL" || ctytxt=="VOLUTE HANDRAIL"){
									  //should not process further 
								 alert("You can't add this category untill you have BOTTOM NEWEL POST");
								 checkcategory=1;
								  }else{checkcategory=0;}
								
							 }else{checkcategory=0;}
						}else{checkcategory=0;}
			 }
			 else  if(designmaterial=="n1" && bgid=='2' && fstep=='2'  || designmaterial=="n1" && bgid=='3' && fstep=='2' || designmaterial=="n1" && bgid=='4' && fstep=='2'){
				 // check handrail
				  var vhand=document.getElementById('handrailfrontV').getAttribute('data-url');
				  var shand=document.getElementById('handrailfront').getAttribute('data-url');
					
				  if(vhand){
					  if(ctytxt=="IV B BOTTOM NEWEL POST" || ctytxt=="BOTTOM NEWEL POST"){
						  //should not process further 
					   alert("You can't add this category untill you have VOLUTE HANDRAIL");
					   checkcategory=1;
					  }else{checkcategory=0;}
				 }else if(shand){
					  if(ctytxt=="IV B HEADLESS NEWEL POST WOOD" || ctytxt=="HEADLESS NEWEL POST"){
						  //should not process further 
					 alert("You can't add this category untill you have STRAIGHT HANDRAIL");
					 checkcategory=1;
					  }else{checkcategory=0;}
				 }else{checkcategory=0;}
			 }
			 if(checkcategory==0){
			 // spindles
			 $.ajax({
              	url:"load_sub_categories.php",
              	type:"post",
              	data:{bgid:bgid, designtypedds:designtypedd, designmaterial:designmaterial, designcolor:designcolor, designcategory:designcategory},
              	success:function(data){
              		document.getElementById("designsubcategorytext").innerHTML=data.text;
              		document.getElementById("designsubcategoryvalues").innerHTML=data.options;
					$('#designsubcategory').css('display', 'block');
              	}
              });
			 }else {$('#designsubcategory').css('display', 'none');
			 }
		}else if(designtypedd=='2'){
			// glass
			$.ajax({
              	url:"load_sub_categories.php",
              	type:"post",
              	data:{bgid:bgid, designtypeddg:designtypedd, designmaterial:designmaterial, designcolor:designcolor, designcategory:designcategory},
              	success:function(data){
              		//document.getElementById("designsubcategory").innerHTML=data;
              		document.getElementById("designsubcategorytext").innerHTML=data.text;
              		document.getElementById("designsubcategoryvalues").innerHTML=data.options;
				        	$('#designsubcategory').css('display', 'block');
              	}
              });
		}
		$('.designcategorybtn').click();    
    });
	
	
 $("#designsubcategoryvalues").on('click', '.designsubcategory', function(){
	 
	  $('.designsubcategory').css('color', '#6c757d');
  $(this).css('color', 'white');
    	var catvalue=designcategoryid;
    	var subcatvalue=$(this).attr('value');
		designsubcategoryid=subcatvalue;
		//alert(subcatvalue);
		var subcattext="";
		$.ajax({
              	url:"load_sub_categories.php",
              	type:"post",
				async : false,
              	data:{realname:subcatvalue},
              	success:function(data){
					subcattext=data;
					//alert(data);
				}
					
					
				});
					//alert(subcattext);
    	//var subcattext=document.getElementById("designsubcategory").selectedOptions[0].text;
      var colorid=designcolorid;
	   var categoryv=designcategoryid;
	   var cty="";
							  		$.ajax({
											url:"load_sub_categories.php",
											type:"post",
											async : false,
											data:{realnamec:categoryv},
											success:function(data){
												cty=data;
												//alert(data);
											}
												
												
											});
	  if(cty=="VI A-1 WOOD STRAIGHT HANDRAIL" || cty=="WOOD HANDRAIL STRAIGHT FRONT" || cty=="STRAIGHT HANDRAIL"){
							
							
		  $('#handrailfrontV').html("");
							$('#handrailfrontV').attr('data-color', '');
							$('#handrailfrontV').attr('data-designcode', '');
							$('#handrailfrontV').attr('data-url', '');
							//alert(subcattext);
	  }else 
	  if(cty=="VI A-1 WOOD VOLUTE HANDRAIL" || cty=="WOOD HANDRAIL VALUTE FRONT" || cty=="VOLUTE HANDRAIL"){
		  
		  $('#handrailfront').html("");
							$('#handrailfront').attr('data-color', '');
							$('#handrailfront').attr('data-designcode', '');
							$('#handrailfront').attr('data-url', '');
							//alert(subcattext);
	  }else
	  if(subcattext=='GLASS FOR SS POST'){
		  colorid='15';
	  }else if(subcattext=='GLASS FOR WOOD POST'){
		  colorid='17';
	  }else{}
	  var stairdesi = choosedesign;
              $.ajax({
              	url:"load_images.php",
              	type:"post",
              	data:{category:catvalue, subcategory:subcatvalue, color:colorid},
              	success:function(data){
                      var imagesrc=data;
					 
                      $("#partsimagediv").html(imagesrc);  $("#partsimagediv1").html(imagesrc);
                      var selectedPart=$("#partsimagediv div").attr("data-class");
                     
                     partwidth=$("."+selectedPart).css("width");
                      partheight=$("."+selectedPart).css("height");
                      let splitit=selectedPart.split(" ");
					             typename=splitit[0];
					  
                      
						//  alert("img load");
                    // alert(imagesrc);
                      var balustradeName=designtypeidtext;
                      $(".dropdiv").hide();
                      $("."+typename).show();
                      // if (stairdesi=='2' && ) {}
                        var dmtrl=designmaterialname;
					 // var thisdoc= $("."+typename).attr('id');
					 // alert('id value '+thisdoc);
                      // console.log("balustrade "+balustradeName+" typename "+typename);
					  
						 // alert("before check b "+balustradeName+" type "+typename+" id "+stairdesi);
                      if (balustradeName=="Spindle Design options" && typename=="NEWEL" && stairdesi=='1') {
                          $("#tnewelpost2").hide();
                          $("#tnewelpost3").hide();
                        }else if (balustradeName=="Spindle Design options" && typename=="NEWEL" && stairdesi=='4' && cty=="BOTTOM NEWEL POST") {
                          $("#tnewelpost2").hide();
						$('.ROUND').html("");
						$('.ROUND').attr('data-color', '');
						 $('.ROUND').attr('data-designcode', '');
						 $('.ROUND').attr('data-url', '');
                        }else if (balustradeName=="Spindle Design options" && typename=="NEWEL" && (stairdesi=='2' || stairdesi=='3') && cty=="IV B BOTTOM NEWEL POST") {
                         // $("#tnewelpost2").hide();
						$('.ROUND').html("");
						$('.ROUND').attr('data-color', '');
						 $('.ROUND').attr('data-designcode', '');
						 $('.ROUND').attr('data-url', '');
						    $("#tnewelpost1").hide();
                          $("#tnewelsteel1").hide();
                          $("#tnewelsteel2").hide();
                          $("#tnewelsteel3").hide();
                          $("#tnewelsteel4").hide();
                          $("#tnewelsteel5").hide();
                          $("#tnewelsteel6").hide();
                          $("#tnewelsteel7").hide();
                          $("#tnewelsteel8").hide();
                        }else if (balustradeName=="Spindle Design options" && typename=="NEWEL" && stairdesi=='4' && cty=="HEADLESS NEWEL POST") {
                          $("#tnewelpost1").hide();
                        }else if (balustradeName=="Spindle Design options" && typename=="SPINDLE" && (stairdesi=='2' || stairdesi=='3' || stairdesi=='4')) {
							if(stairdesi=='4'){
							var newelct=document.getElementById('newelpost1').getAttribute('data-url');
							}else{
							var newelct=document.getElementById('newelpost6').getAttribute('data-url');
							}
				 if(newelct){
						 let spliturl=newelct.split("/");
						   let checkcolor=spliturl[3];
						   let checkpost=spliturl[4];
						   if(checkpost=="IV B BOTTOM NEWEL POST" || checkpost=="BOTTOM NEWEL POST"){
							   if(stairdesi=='4'){
							  $("#tspindle1").hide(); 
							  $("#tspindle2").hide(); 
							  $("#tspindle3").hide(); 
							   }else{
							  $("#tspindleL1").hide(); 
							  $("#tspindleL2").hide(); 
							  $("#tspindleL3").hide(); 
							  $("#tspindleL4").hide(); 
							  $("#tspindleR1").hide(); 
							  $("#tspindleR2").hide(); 
							  $("#tspindleR3").hide(); 
							  $("#tspindleR4").hide(); 
							   }
						   }else{}
				 }
							
                         // $("#tnewelpost1").hide();
                        }else  if (balustradeName=="Spindle Design options" && typename=="NEWEL" && stairdesi=='2') {
                          $("#tnewelpost1").hide();
                          $("#tnewelpost3").hide();
                        }else  if (balustradeName=="Spindle Design options" && typename=="NEWEL" && stairdesi=='5') {
                          $("#tnewelposts").hide();
                          $("#tnewelposts3").hide();
                        }else  if (balustradeName=="Spindle Design options" && typename=="NEWEL" && stairdesi=='3') {
                          $("#tnewelpost1").hide();
                          $("#tnewelsteel1").hide();
                          $("#tnewelsteel2").hide();
                          $("#tnewelsteel3").hide();
                          $("#tnewelsteel4").hide();
                          $("#tnewelsteel5").hide();
                          $("#tnewelsteel6").hide();
                          $("#tnewelsteel7").hide();
                          $("#tnewelsteel8").hide();
						 /*  $("#tnewelsteel1").css('display', 'none');
                          $("#tnewelsteel2").css('display', 'none');
                          $("#tnewelsteel3").css('display', 'none');
                          $("#tnewelsteel4").css('display', 'none');
                          $("#tnewelsteel5").css('display', 'none');
                          $("#tnewelsteel6").css('display', 'none');
                          $("#tnewelsteel7").css('display', 'none');
                          $("#tnewelsteel8").css('display', 'none');*/
						  //alert("css aplied");
                        }else  if (balustradeName=="Glass Design Options" && typename=="NEWEL" && stairdesi=='3' && dmtrl=='Hardwood') {
                        //  $("#tnewelpost2").hide();
                          $("#tnewelsteel1").hide();
                          $("#tnewelsteel2").hide();
                          $("#tnewelsteel3").hide();
                          $("#tnewelsteel4").hide();
                          $("#tnewelsteel5").hide();
                          $("#tnewelsteel6").hide();
                          $("#tnewelsteel7").hide();
                          $("#tnewelsteel8").hide();
						  /* $("#tnewelsteel1").css('display', 'none');
                          $("#tnewelsteel2").css('display', 'none');
                          $("#tnewelsteel3").css('display', 'none');
                          $("#tnewelsteel4").css('display', 'none');
                          $("#tnewelsteel5").css('display', 'none');
                          $("#tnewelsteel6").css('display', 'none');
                          $("#tnewelsteel7").css('display', 'none');
                          $("#tnewelsteel8").css('display', 'none');*/
                        }else  if (balustradeName=="Glass Design Options" && typename=="NEWEL" && stairdesi=='3' && dmtrl=='Stainless Steel') {
                        //  $("#tnewelpost2").hide();
                          $("#tnewelpost1").hide();
                          $("#tnewelpost2").hide();
                          $("#tnewelpost3").hide();
                          $("#tnewelpost4").hide();
                          $("#tnewelpost5").hide();
                          $("#tnewelpost6").hide();
						 /* $("#tnewelpost1").css('display', 'none');
                          $("#tnewelpost2").css('display', 'none');
                          $("#tnewelpost3").css('display', 'none');
                          $("#tnewelpost4").css('display', 'none');
                          $("#tnewelpost5").css('display', 'none');
                          $("#tnewelpost6").css('display', 'none');*/
                        }
                      
                      
                     // .........drag function...........
                    $(".dragpart").draggable({
                        
                        helper:function (event) {
                        return $(event.currentTarget).clone().css({'height':partheight, 'width':partwidth, 'max-height':'250px'});

                       },
                       start:dropit(typename),
                       revert:'invalid'
                      });

                     

                      
                      

                     
              	}
              });
$('.designsubcategorybtn').click();
$('#imgdrag').click();
    });
	

   function dropit(parttype){
   
                         
                              var designname=choosedesigntext;
                              var designid=choosedesign;
                              var balustradeName=designtypeidtext;
							  
                             
                              var category=designcategoryidtext;
							 // alert(category);
                              var typename=parttype;
                              
                              var subcategory="";
                             // var subcategory=document.getElementById("designsubcategory").selectedOptions[0].text;
                              var subcategoryid=designsubcategoryid;
							  	$.ajax({
											url:"load_sub_categories.php",
											type:"post",
											async : false,
											data:{realname:subcategoryid},
											success:function(data){
												subcategory=data;
												//alert(data);
											}
												
												
											});
                              var colorname=designcoloridtext;
                              var designcode=document.getElementById("draggeddiv").getAttribute("data-designcode");
                              var cy="";
                              if(subcategory=='GLASS FOR SS POST'){
                                colorname='FOR SS POST';
                              }else if(subcategory=='GLASS FOR WOOD POST'){
                                colorname='FOR WOOD POST';
                              }else{}
							  //alert(category);
                              if(category=='Rectangle' || category=='Round' || category=='Square'){
                              
                              $.ajax({
                                  url:"load_categories.php",
                                  type:"post",
                                  async: false,
                                  data:{categorysteel:category, bgid:designid, subcategory:subcategoryid},
                                  success:function(args){
                                  
                                    cy=args;
                                  }

                                });
                                 //  alert(cy);       
                            }else {
								 var categoryv=designcategoryid;
							  		$.ajax({
											url:"load_sub_categories.php",
											type:"post",
											async : false,
											data:{realnamec:categoryv},
											success:function(data){
												category=data;
												//alert(data);
											}
												
												
											});
                              cy=category;
                                        
                            }
                            let dropelm="";
                            let drophover="";
                            let getactiveParts=document.getElementById("maindiv").querySelectorAll('.activepart');
                            if (getactiveParts.length>0) {
                              
                            }else{
                               
                               
                            }
							//alert(typename);
                            if (typename=="HANDRAIL" || typename=="FOOTRAIL" || typename=="HANDRAILFOOTRAIL" || typename=="GLASS") {
                                   dropelm=".dropdiv";
                                   drophover="non_highlight";
                               }else{
                                    dropelm=".dropdiv";
                                    drophover="highlight";
                               }

                        
                        
          $("#maindiv "+dropelm).droppable({
                accept:'.dragpart',
                hoverClass:drophover,
                drop:function(event, ui){
                         
								   if (typename=="NEWEL" && balustradeName=="Glass Design Options" && designid=='1') {

                        for (let i = 0; i < 3; i++) {
                                 if (i==0) {
                                   targetvalue="Top";
                                   droptarget="newelpost3";
                                 }else if (i==1) {
                                   targetvalue="Center";
                                   droptarget="newelpost2";
                                 }else{
                                   targetvalue="Bottom";
                                   droptarget="newelpost1";
                                 }

                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                                let path=encodeURI(thisurl);
                              
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                                

                              }
                              $(".activepart").removeClass("activepart");
                              $(".activepart").removeClass("activepart_highlight");
                              
                              
                   }else
								   if (typename=="NEWEL"   && designid=='5') {

                                   targetvalue="NEWEL POSTS";
                                   droptarget="newelposts";
                                

                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                                let path=encodeURI(thisurl);
                              
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                                
                              $(".activepart").removeClass("activepart");
                              $(".activepart").removeClass("activepart_highlight");
                              
                              
                   }else if (typename=="NEWEL" && designid=='2') {
					     let svgurlnpp="";
								let urlforbp="";  
                    $('.newelparthead').html("");
                    $('.newelparthead').attr('data-color', '');
                    $('.newelparthead').attr('data-designcode', '');
            				$('.newelparthead').attr('data-url', '');
                      // .......drop on all selected parts...........
                      let getactiveParts=document.getElementById("maindiv").querySelectorAll('.activepart_highlight');
                            // console.log("active parts are "+getactiveParts.length);
                        if (getactiveParts.length>0) {
                          for (let index = 0; index < getactiveParts.length; index++) {
                              if(postcolor=="Stainless Steel"){

                                    targetvalue="ALL POSTS";
                                    droptarget="newelpost3";
                                        
                                      let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                      
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                      let path=encodeURI(thisurl);
                                      $("#"+droptarget).load(path, function(response, status, xhr){

                                      if(status=="error"){
                                        $.ambiance({
                                          message:"Sorry! You cannot place this part here.",
                                          type:"error",
                                          fade:true
                                        })
                                      }else{
                                         document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                         document.getElementById(droptarget).setAttribute('data-color', colorname);
                                         document.getElementById(droptarget).setAttribute('data-url', thisurl);
                                      }
                                    });

                                    $(".activepart").removeClass('activepart');
                                    $(".activepart_highlight").removeClass("activepart_highlight");
                                    break;

                                }else if(cy=="IV B BOTTOM NEWEL POST" || cy=="IV B HEADLESS NEWEL POST WOOD"){
                                   let droptarget=getactiveParts[index].getAttribute("data-name");
                                   let targetvalue=getactiveParts[index].getAttribute("data-value");
                            
                              // targetvalue="UPPER POST";
                              // droptarget="newelpost1";
                            if (droptarget=="newelpost6" || droptarget=="newelpost7") {
                                 droptarget="newelpost6";
                          
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                                 urlforbp=thisurl;
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                let path=encodeURI(thisurl);
                              
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
              
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }else{
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                              }
                 }  else if(cy=="IV A-1 UPPER NEWEL POST"){
                    
                            let droptarget=getactiveParts[index].getAttribute("data-name");
                            let targetvalue=getactiveParts[index].getAttribute("data-value");
                          
                              // targetvalue="UPPER POST";
                              // droptarget="newelpost1";
                              if (droptarget=="newelpost1") {
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                
                                let path=encodeURI(thisurl);
                              
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
              
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }
                              else if (droptarget=="newelpost2" || droptarget=="newelpost4" || droptarget=="newelpost5") {
                   
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                                svgurlnpp=thisurl;
                                let path=encodeURI(thisurl);
                                droptarget="newelpost2";
                              
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
              
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }
                              else{
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                              }
                  
    
                 
                  
                
                 }else{

                              let droptarget=getactiveParts[index].getAttribute("data-name");
                              let targetvalue=getactiveParts[index].getAttribute("data-value");
                              let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                              let path=encodeURI(thisurl);
                            
                               
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                              $("#"+droptarget).load(path, function(response, status, xhr){

                                if(status=="error"){
                                  $.ambiance({
                                    message:"Sorry! You cannot place this part here.",
                                    type:"error",
                                    fade:true
                                  })
                                }else{
                                   document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                   document.getElementById(droptarget).setAttribute('data-color', colorname);
                                   document.getElementById(droptarget).setAttribute('data-url', thisurl);
                                }
                              });

                 }


                              

                              getactiveParts[index].classList.remove('activepart');
                              getactiveParts[index].classList.remove('activepart_highlight');
                             
                      }
                  }else{
								  	var postcolor=designmaterialname;
                  
								//alert(postcolor);
  								  if(postcolor=="Stainless Steel"){

  									    targetvalue="ALL POSTS";
                        droptarget="newelpost3";
  							
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');	          
                          let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
					
                          let path=encodeURI(thisurl);
                        
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this part here.",
                                  type:"error",
                                  fade:true
                                })

                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
				
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }
  								 }else if(cy=="IV B BOTTOM NEWEL POST" || cy=="IV B HEADLESS NEWEL POST WOOD"){
                        let droptarget=event.target.getAttribute("data-name");
                            let targetvalue=event.target.getAttribute("data-value");
                            
                             
                            if (droptarget=="newelpost6" || droptarget=="newelpost7") {
									               droptarget="newelpost6";
								          
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
								urlforbp=thisurl;
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
								// alert(thisurl);
                                let path=encodeURI(thisurl);
                              
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
							
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }else{
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                              }
								 }	else if(cy=="IV A-1 UPPER NEWEL POST"){
									  
										        let droptarget=event.target.getAttribute("data-name");
                            let targetvalue=event.target.getAttribute("data-value");
                            
									            // targetvalue="UPPER POST";
                              // droptarget="newelpost1";
                              if (droptarget=="newelpost1") {
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
            //    alert(thisurl);
			
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                let path=encodeURI(thisurl);
                              
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
              
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }
                              else if (droptarget=="newelpost2" || droptarget=="newelpost4" || droptarget=="newelpost5") {
									 
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
								  svgurlnpp=thisurl;
                                let path=encodeURI(thisurl);
                                droptarget="newelpost2";
                              // alert(thisurl);
                               //alert(droptarget);
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
							     // alert(thisurl);
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }
                              else{
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                              }
								  
    
                 
									
								
								 }else{

                 }
               }


                 // ........change color of all post that are already attached.........
                    let totalposts='7';
                        for (let i = 1; i <=totalposts ; i++) {
                             if(i==3 || i==4 || i==5 || i==7){ }
                             else{
                                    let postid="newelpost"+i;
                                    let pgurl=document.getElementById(postid).getAttribute("data-url");
                                    if (pgurl) {
                                       let spliturl=pgurl.split("/");
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else   if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+postid).load(path, function(response, status, xhr){

                                            if(status=="error"){
                        
                                                $('#'+postid).html("");
                                                $('#'+postid).attr('data-color', '');
                                                 $('#'+postid).attr('data-designcode', '');
                                                    $('#'+postid).attr('data-url', '');
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                        
                        
                                            }else{
                                              document.getElementById(postid).setAttribute('data-url', makeNewurl);
                                            }
                                      });

                                    }
                                  }
                                }
								 
                            let svgurluf=document.getElementById("footrail").getAttribute('data-url');
							if(svgurlnpp==""){
							 svgurlnpp=document.getElementById("newelpost2").getAttribute('data-url');
							}
							//alert(svgurluf);
							//alert(svgurlnpp);
							
							
									let svgurluhnd=document.getElementById("handrailfront").getAttribute('data-url');
									let svgurluhnd2=document.getElementById("handrailfrontV").getAttribute('data-url');
							//alert(svgurl);
							  if(urlforbp){
								 // alert(svgurl);
                                       let spliturl=urlforbp.split("/");
									   let spindlecategory=spliturl[4];
									   if(spindlecategory != "IV B HEADLESS NEWEL POST WOOD" ){
									   let svgurl2=document.getElementById("treads").getAttribute('data-url');
									   if(svgurl2 != null){
										 
									   }else{
										  svgurl2="Stairs with Landing/TREADS/TREADS light.svg";
									   }
									   
									    let temp1=svgurl2.split("/");
									   temp1=temp1[2].split(".");
									  temp1=temp1[0].split(" ");
									  temp1=temp1[1]; 
									 
									 // alert(temp1);
									   let spindlesshadow="Stairs with Landing/"+spindlecategory+"/SHADOW "+temp1+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#bottom_newel_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("bottom_newel_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
							  }
							  }	
							  if(svgurluf !="" && svgurlnpp !=""){
								//  alert(svgurlu);
                                       let spliturl=svgurluf.split("/");
									   let spindlecategory=spliturl[4];
									   
									  if(colorname=="Dark Mahogany"){
										 colorname="DarkMahogany"; 
									  }else if(colorname=="Dark Grey"){
										  colorname="DarkGrey";
									  }else if(colorname=="Light Grey"){
										  colorname="LightGrey";
									  }else{}
									 // alert(temp1);
									   let spindlesshadow="Stairs with Landing/"+spindlecategory+"/SHADOW2 "+colorname+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#footrail_shadow2").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("footrail_shadow2").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
									  
									 
							  
							  
							  
							  }
							  if(svgurluhnd !="" && svgurlnpp !="" || svgurluhnd2 !="" && svgurlnpp !=""){
								//  alert(svgurlu);
                                       let spliturl=svgurlnpp.split("/");
									   let spindlecategory=spliturl[4];
									   
									  if(colorname=="Dark Mahogany"){
										 colorname="DarkMahogany"; 
									  }else if(colorname=="Dark Grey"){
										  colorname="DarkGrey";
									  }else if(colorname=="Light Grey"){
										  colorname="LightGrey";
									  }else{}
									 // alert(temp1);
									   let spindlesshadow="Stairs with Landing/"+spindlecategory+"/SHADOW2 "+colorname+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#upper_newel_shadow2").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("upper_newel_shadow2").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
									  
									 
							  
							  
							  
							  }
							}else if (typename=="NEWEL" && designid=='3') {
								let svgurl="";  
								let svgurlu="";  
                    $('.newelparthead').html("");
                    $('.newelparthead').attr('data-color', '');
                    $('.newelparthead').attr('data-designcode', '');
            				$('.newelparthead').attr('data-url', '');
                      // .......drop on all selected parts...........
                      let getactiveParts=document.getElementById("maindiv").querySelectorAll('.activepart_highlight');
                            // console.log("active parts are "+getactiveParts.length);
                        if (getactiveParts.length>0) {
                          for (let index = 0; index < getactiveParts.length; index++) {
                              if(postcolor=="Stainless Steel"){

                                    targetvalue="ALL POSTS";
                                    droptarget="newelsteel1";
                                        
                                      let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                                    svgurl=thisurl;
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                      let path=encodeURI(thisurl);
                                      $("#"+droptarget).load(path, function(response, status, xhr){

                                      if(status=="error"){
                                        $.ambiance({
                                          message:"Sorry! You cannot place this part here.",
                                          type:"error",
                                          fade:true
                                        })
                                      }else{
                                         document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                         document.getElementById(droptarget).setAttribute('data-color', colorname);
                                         document.getElementById(droptarget).setAttribute('data-url', thisurl);
                                      }
                                    });

                                    $(".activepart").removeClass('activepart');
                                    $(".activepart_highlight").removeClass("activepart_highlight");
                                    break;

                                }else if(cy=="IV B BOTTOM NEWEL POST" || cy=="IV B HEADLESS NEWEL POST WOOD"){
                                   let droptarget=getactiveParts[index].getAttribute("data-name");
                                   let targetvalue=getactiveParts[index].getAttribute("data-value");
                            
                              // targetvalue="UPPER POST";
                              // droptarget="newelpost1";
                            if (droptarget=="newelpost5" || droptarget=="newelpost6") {
                                 droptarget="newelpost6";
                          
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                                svgurl=thisurl;
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                let path=encodeURI(thisurl);
                              
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
              
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }else{
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                              }
                 }  else if(cy=="UPPER NEWEL POST"){
                    
                            let droptarget=getactiveParts[index].getAttribute("data-name");
                            let targetvalue=getactiveParts[index].getAttribute("data-value");
                            
                              // targetvalue="UPPER POST";
                              // droptarget="newelpost1";
                              if (droptarget=="newelpost1") {
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                               svgurlu=thisurl;
                                let path=encodeURI(thisurl);
                              
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
              
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }
                              else if (droptarget=="newelpost2" || droptarget=="newelpost3" || droptarget=="newelpost4") {
                   
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                          svgurlu=thisurl;
                                let path=encodeURI(thisurl);
                                droptarget="newelpost2";
                              
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
              
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }
                              else{
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                              }
                  
    
                 
                  
                
                 }else{

                              let droptarget=getactiveParts[index].getAttribute("data-name");
                              let targetvalue=getactiveParts[index].getAttribute("data-value");
                              let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                              let path=encodeURI(thisurl);
                             
                               
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                              $("#"+droptarget).load(path, function(response, status, xhr){

                                if(status=="error"){
                                  $.ambiance({
                                    message:"Sorry! You cannot place this part here.",
                                    type:"error",
                                    fade:true
                                  })
                                }else{
                                   document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                   document.getElementById(droptarget).setAttribute('data-color', colorname);
                                   document.getElementById(droptarget).setAttribute('data-url', thisurl);
                                }
                              });

                 }


                              

                              getactiveParts[index].classList.remove('activepart');
                              getactiveParts[index].classList.remove('activepart_highlight');
                             
                      }
                  }else{
								  	var postcolor=designmaterialname;
                  
								//alert(postcolor);
  								  if(postcolor=="Stainless Steel"){

  									    targetvalue="ALL POSTS";
                        droptarget="newelsteel1";
  							
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');	          
                          let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
					
                          let path=encodeURI(thisurl);
                        
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this part here.",
                                  type:"error",
                                  fade:true
                                })

                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
				
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }
  								 }else if(cy=="IV B BOTTOM NEWEL POST" || cy=="IV B HEADLESS NEWEL POST WOOD"){
                        let droptarget=event.target.getAttribute("data-name");
                            let targetvalue=event.target.getAttribute("data-value");
                            
                             
                            if (droptarget=="newelpost6" || droptarget=="newelpost5") {
									               droptarget="newelpost6";
								          
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
								 svgurl=thisurl;
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
								// alert(thisurl);
                                let path=encodeURI(thisurl);
                              
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
							
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }else{
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                              }
							  
							  
								 }	else if(cy=="UPPER NEWEL POST"){
									  
										        let droptarget=event.target.getAttribute("data-name");
                            let targetvalue=event.target.getAttribute("data-value");
                            
									            // targetvalue="UPPER POST";
                              // droptarget="newelpost1";
                              if (droptarget=="newelpost1") {
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
            //    alert(thisurl);
			               svgurlu=thisurl;
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                let path=encodeURI(thisurl);
                              
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this part here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
              
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }
                              else if (droptarget=="newelpost2" || droptarget=="newelpost4" || droptarget=="newelpost3") {
									 
                                let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
								 svgurlu=thisurl;
                                let path=encodeURI(thisurl);
                                droptarget="newelpost2";
                              // alert(thisurl);
                               //alert(droptarget);
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
							     // alert(thisurl);
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
                              }
                              else{
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                              }
								  
    
                 
									
								
								 }else{

                 }
               }


                 // ........change color of all post that are already attached.........
                    let totalposts='6';
                        for (let i = 1; i <=totalposts ; i++) {
                             if(i==3 || i==4 || i==5){ }
                             else{
                                    let postid="newelpost"+i;
                                    let pgurl=document.getElementById(postid).getAttribute("data-url");
                                    if (pgurl) {
                                       let spliturl=pgurl.split("/");
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else   if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+postid).load(path, function(response, status, xhr){

                                            if(status=="error"){
                        
                                                $('#'+postid).html("");
                                                $('#'+postid).attr('data-color', '');
                                                 $('#'+postid).attr('data-designcode', '');
                                                    $('#'+postid).attr('data-url', '');
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                        
                        
                                            }else{
                                              document.getElementById(postid).setAttribute('data-url', makeNewurl);
                                            }
                                      });

                                    }
                                  }
                                }
						//	let svgurl=document.getElementById("newelpost6").getAttribute('data-url');
							//alert(svgurl);
							  if(svgurl){
								 // alert(svgurl);
                                       let spliturl=svgurl.split("/");
									   let spindlecategory=spliturl[4];
									   if(spindlecategory != "IV B HEADLESS NEWEL POST WOOD" ){
									   let svgurl2=document.getElementById("treads").getAttribute('data-url');
									   if(svgurl2 != null){
										 
									   }else{
										  svgurl2="Stairs with Triangles/TREADS/TREADS light.svg";
									   }
									   
									    let temp1=svgurl2.split("/");
									   temp1=temp1[2].split(".");
									  temp1=temp1[0].split(" ");
									  temp1=temp1[1]; 
									  if(temp1=="light" || temp1=="medium" ){
										  temp1="Oak";
									  }
									  
									  if(colorname=="dark"){
										  colorname="Sienna";
									  }
									 // alert(temp1);
									   let spindlesshadow="Stairs with Triangles/"+spindlecategory+"/SHADOW "+temp1+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#bottom_newel_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("bottom_newel_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
							  }
							  }	 
							  if(svgurlu ==""){
								  svgurlu=document.getElementById("newelpost2").getAttribute('data-url');
							  }
							  if(svgurlu){
								//  alert(svgurlu);
                                       let spliturl=svgurlu.split("/");
									   let spindlecategory=spliturl[4];
									   
									   let svgurl2=document.getElementById("treads").getAttribute('data-url');
									   if(svgurl2 != null){
										 
									   }else{
										  svgurl2="Stairs with Triangles/TREADS/TREADS light.svg";
									   }
									   
									    let temp1=svgurl2.split("/");
									   temp1=temp1[2].split(".");
									  temp1=temp1[0].split(" ");
									  temp1=temp1[1]; 
									  if(temp1=="light" || temp1=="medium" ){
										  temp1="Oak";
									  }
									  
									  if(colorname=="dark"){
										  colorname="Sienna";
									  }
									 // alert(temp1);
									   let spindlesshadow="Stairs with Triangles/"+spindlecategory+"/SHADOW "+temp1+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#upper_newel_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("upper_newel_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
									  
									  let checkfsvgurl=document.getElementById("handrailfront").getAttribute('data-url');
									  let checkvsvgurl=document.getElementById("handrailfrontV").getAttribute('data-url');
									 // alert(checkfsvgurl);
									 // alert(checkvsvgurl);
									  if(checkfsvgurl !="" || checkvsvgurl !=""){
									   let spindlesshadow2="Stairs with Triangles/"+spindlecategory+"/SHADOW2 "+colorname+".svg";
                                       let path22=encodeURI(spindlesshadow2);
                                       $("#upper_newel_shadow2").load(path22, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("upper_newel_shadow2").setAttribute('data-url', spindlesshadow2);
                                            }
                                      });
							  }
							  
							  }
							  
							}else if (typename=="NEWEL" && designid=="4") {
								let targetvalue="BOTTOM POST";
								   let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
								
                                let path=encodeURI(thisurl);
                                droptarget="newelpost1";
                              // alert(thisurl);
                               //alert(droptarget);
							   $('#'+droptarget).html('');
							   $('#'+droptarget).attr('data-url', '');
							   $('#'+droptarget).attr('data-color', '');
							   $('#'+droptarget).attr('data-designcode', '');
                                try {
                                  $("#"+droptarget).load(path, function(response, status, xhr){

                                    if(status=="error"){
                                      $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                    }else{
                                      document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                      document.getElementById(droptarget).setAttribute('data-color', colorname);
                                      document.getElementById(droptarget).setAttribute('data-url', thisurl);
							     // alert(thisurl);
                                    }
                                    });
                                } catch (error) {
                                  $.ambiance({
                                        message:"Sorry! You cannot place this newel post here.",
                                        type:"error",
                                        fade:true
                                      })
                                }
							}
								else if (typename=="HANDRAILFOOTRAIL" && designid=="2") {
									let handrailul="";
									let   svgurlu="";
                var postcolor=designmaterialname;
               if (cy=="VI B FOOTRAIL") {
                     let droptarget="footrail";
                     let targetvalue="FOOTRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                let svgurluf=thisurl;
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }
						  
							  if(svgurluf){
								//  alert(svgurlu);
                                       let spliturl=svgurluf.split("/");
									   let spindlecategory=spliturl[4];
									   
									   let svgurl2=document.getElementById("treads").getAttribute('data-url');
									   if(svgurl2 != null){
										 
									   }else{
										  svgurl2="Stairs with Landing/TREADS/TREADS light.svg";
									   }
									   
									    let temp1=svgurl2.split("/");
									   temp1=temp1[2].split(".");
									  temp1=temp1[0].split(" ");
									  temp1=temp1[1]; 
									  
									 // alert(temp1);
									   let spindlesshadow="Stairs with Landing/"+spindlecategory+"/SHADOW "+temp1+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#footrail_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("footrail_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
									  
									   let svgurlnp=document.getElementById("newelpost2").getAttribute('data-url');
									
							  if(svgurlnp){
								//  alert(svgurlu);
                                       let spliturl=svgurlnp.split("/");
									   let spindlecolor=spliturl[3];
									 
									  if(spindlecolor=="Dark Mahogany"){
										 spindlecolor="DarkMahogany"; 
									  }else if(spindlecolor=="Dark Grey"){
										  spindlecolor="DarkGrey";
									  }else if(spindlecolor=="Light Grey"){
										  spindlecolor="LightGrey";
									  }else{}
									 // alert(temp1);
									   let spindlesshadow="Stairs with Landing/"+spindlecategory+"/SHADOW2 "+spindlecolor+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#footrail_shadow2").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("footrail_shadow2").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
									  
									 
							  
							  } 
							  
							  }
                 }else if (cy=='VI A-1 WOOD STRAIGHT HANDRAIL') {
                    let droptarget="handrailfront";
                     let targetvalue="STRAIGHT HANDRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                  svgurlu=thisurl;
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }
                 }else if (cy=='VI A-1 WOOD VOLUTE HANDRAIL') {
                     let droptarget="handrailfrontV";
                     let targetvalue="VOLUTE HANDRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                     svgurlu=thisurl;
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }

                 }else if (postcolor=="Stainless Steel") {
                    let droptarget="handrail";
                     let targetvalue="HANDRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }
                 }
				 
  let checkfsvgurl=document.getElementById("newelpost2").getAttribute('data-url');
  //let checkfsvgurl2=document.getElementById("newelpost6").getAttribute('data-url');

							  if(checkfsvgurl !="" && svgurlu !=""){
								
                                       let spliturl=checkfsvgurl.split("/");
									   let spindlecategory=spliturl[4];
									   let spindlecolor=spliturl[3];
									     //alert(spcolor);
									
									  if(spindlecolor=="Dark Mahogany"){
										 spindlecolor="DarkMahogany"; 
									  }else if(spindlecolor=="Dark Grey"){
										  spindlecolor="DarkGrey";
									  }else if(spindlecolor=="Light Grey"){
										  spindlecolor="LightGrey";
									  }else{}

									  
									   let spindlesshadow2="Stairs with Landing/"+spindlecategory+"/SHADOW2 "+spindlecolor+".svg";
                                       let path22=encodeURI(spindlesshadow2);
                                       $("#upper_newel_shadow2").load(path22, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("upper_newel_shadow2").setAttribute('data-url', spindlesshadow2);
                                            }
                                      });
							  
							  
							  }

              }else if (typename=="HANDRAILFOOTRAIL" && designid=="3") {
                var postcolor=designmaterialname;
				let  svgurlu="";
                if (cy=="FOOTRAIL") {
                     let droptarget="footrail";
                     let targetvalue="FOOTRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                let svgurluf=thisurl;
				
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }
						  
							  if(svgurluf){
								//  alert(svgurlu);
                                       let spliturl=svgurluf.split("/");
									   let spindlecategory=spliturl[4];
									   
									   let svgurl2=document.getElementById("treads").getAttribute('data-url');
									   if(svgurl2 != null){
										 
									   }else{
										  svgurl2="Stairs with Triangles/TREADS/TREADS light.svg";
									   }
									   
									    let temp1=svgurl2.split("/");
									   temp1=temp1[2].split(".");
									  temp1=temp1[0].split(" ");
									  temp1=temp1[1]; 
									  if(temp1=="light" || temp1=="medium" ){
										  temp1="Oak";
									  }
									  
									  if(colorname=="dark"){
										  colorname="Sienna";
									  }
									 // alert(temp1);
									   let spindlesshadow="Stairs with Triangles/"+spindlecategory+"/SHADOW "+temp1+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#footrail_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("footrail_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });
									  
									 
							  
							  }
                 }else if (cy=='WOOD HANDRAIL STRAIGHT FRONT') {
                    let droptarget="handrailfront";
                     let targetvalue="STRAIGHT HANDRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                 svgurlu=thisurl;
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }
                 }else if (cy=='WOOD HANDRAIL VALUTE FRONT') {
                     let droptarget="handrailfrontV";
                     let targetvalue="VOLUTE HANDRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                svgurlu=thisurl;
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }

                 }else if (postcolor=="Stainless Steel") {
                    let droptarget="handrail";
                     let targetvalue="HANDRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }
                 }
				 
									  let checkfsvgurl=document.getElementById("newelpost2").getAttribute('data-url');

							  if(checkfsvgurl !="" && svgurlu !=""){
								
                                       let spliturl=checkfsvgurl.split("/");
									   let spindlecategory=spliturl[4];
									   let spcolor=spliturl[3];
									     //alert(spcolor);
									 
									  
									   let spindlesshadow2="Stairs with Triangles/"+spindlecategory+"/SHADOW2 "+spcolor+".svg";
                                       let path22=encodeURI(spindlesshadow2);
                                       $("#upper_newel_shadow2").load(path22, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("upper_newel_shadow2").setAttribute('data-url', spindlesshadow2);
                                            }
                                      });
							  
							  
							  }

              }else if (typename=="HANDRAIL" && designid=="4") {
                var postcolor=designmaterialname;
               if (cy=='STRAIGHT HANDRAIL') {
                    let droptarget="handrailfront";
                     let targetvalue="STRAIGHT HANDRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }
                 }else if (cy=='VOLUTE HANDRAIL') {
                     let droptarget="handrailfrontV";
                     let targetvalue="VOLUTE HANDRAIL";
                     let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                
                          let path=encodeURI(thisurl);
                         
                          try {
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                document.getElementById(droptarget).setAttribute('data-color', colorname);
                                document.getElementById(droptarget).setAttribute('data-url', thisurl);
        
                              }
                              });
                          } catch (error) {
                            $.ambiance({
                                  message:"Sorry! You cannot place this newel post here.",
                                  type:"error",
                                  fade:true
                                })
                          }

                 }


              }
              else{
                if (typename=="SPINDLE" && designid=='1') {
                                 let totalspindle='18';
                                 for (let i = 1; i <=totalspindle ; i++) {
                                    let spindleid="spindle"+i;
                                    let svgurl=document.getElementById(spindleid).getAttribute("data-url");
                                    if (svgurl) {
                                       let spliturl=svgurl.split("/");
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+spindleid).load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(spindleid).setAttribute('data-url', makeNewurl);
                                            }
                                      });

                                    }
                                   
                                 }
                              }else if (typename=="SPINDLE" && designid=='2') {
                                 let totalspindleright='16';
                                 for (let i = 1; i <=totalspindleright ; i++) {
                                    let spindleid="spindleR"+i;
                                    let svgurl=document.getElementById(spindleid).getAttribute("data-url");
                                    if (svgurl) {
                                       let spliturl=svgurl.split("/");
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+spindleid).load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(spindleid).setAttribute('data-url', makeNewurl);
                                            }
                                      });

                                    }
                                   
                                 }
                                let totalspindleleft='14';
                                 for (let i = 1; i <=totalspindleleft ; i++) {
                                    let spindleid="spindleL"+i;
                                    let svgurl=document.getElementById(spindleid).getAttribute("data-url");
                                    if (svgurl) {
                                       let spliturl=svgurl.split("/");
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+spindleid).load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(spindleid).setAttribute('data-url', makeNewurl);
                                            }
                                      });

                                    }
                                   
                                 }
                              }else if (typename=="SPINDLE" && designid=='3') {
                                 let totalspindleright='14';
                                 for (let i = 1; i <=totalspindleright ; i++) {
                                    let spindleid="spindleR"+i;
                                    let svgurl=document.getElementById(spindleid).getAttribute("data-url");
                                    if (svgurl) {
                                       let spliturl=svgurl.split("/");
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+spindleid).load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(spindleid).setAttribute('data-url', makeNewurl);
                                            }
                                      });

                                    }
                                   
                                 }
                                let totalspindleleft='14';
                                 for (let i = 1; i <=totalspindleleft ; i++) {
                                    let spindleid="spindleL"+i;
                                    let svgurl=document.getElementById(spindleid).getAttribute("data-url");
                                    if (svgurl) {
										
                                       let spliturl=svgurl.split("/");
                                       let makeNewurl='';
									 //  alert(spliturl[4]);
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+spindleid).load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(spindleid).setAttribute('data-url', makeNewurl);
                                            }
                                      });
									  
									   let spindlecategory=spliturl[4];
									   let spindlesshadow="Stairs with Triangles/"+spindlecategory+"/SHADOW "+colorname+".svg";
                                       let path2=encodeURI(spindlesshadow);
                                       $("#spindle_shadow").load(path2, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById("spindle_shadow").setAttribute('data-url', spindlesshadow);
                                            }
                                      });

                                    }
                                   
                                 }
                              }else if (typename=="SPINDLE" && designid=='4') {
                                 let totalspindle='21';
                                 for (let i = 1; i <=totalspindle ; i++) {
                                    let spindleid="spindle"+i;
                                    let svgurl=document.getElementById(spindleid).getAttribute("data-url");
                                    if (svgurl) {
                                       let spliturl=svgurl.split("/");
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+spindleid).load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(spindleid).setAttribute('data-url', makeNewurl);
                                            }
                                      });

                                    }
                                   
                                 }
                        
                              }else if (typename=="SPINDLE" && designid=='5') {
                                 let totalspindle='31';
                                 for (let i = 1; i <=totalspindle ; i++) {
                                    let spindleid="spindle"+i;
                                    let svgurl=document.getElementById(spindleid).getAttribute("data-url");
                                    if (svgurl) {
                                       let spliturl=svgurl.split("/");
                                       let makeNewurl='';
                                       for (let index = 0; index < spliturl.length; index++) {
                                           if (index==3) {
                                            makeNewurl+=colorname+"/";
                                           }else if (index==spliturl.length-1) {
                                            makeNewurl+=spliturl[index];
                                           }else{
                                            makeNewurl+=spliturl[index]+"/";
                                           }
                                         
                                       }
                                       let path=encodeURI(makeNewurl);
                                       $("#"+spindleid).load(path, function(response, status, xhr){

                                            if(status=="error"){
                                              $.ambiance({
                                                message:"Sorry! You cannot place this part here.",
                                                type:"error",
                                                fade:true
                                              })
                                            }else{
                                              document.getElementById(spindleid).setAttribute('data-url', makeNewurl);
                                            }
                                      });

                                    }
                                   
                                 }
                        
                              }else{}

                              // .......drop on all selected parts...........
                            let getactiveParts=document.getElementById("maindiv").querySelectorAll('.activepart_highlight');
                            // console.log("active parts are "+getactiveParts.length);
                            if (getactiveParts.length>0) {
                            for (let index = 0; index < getactiveParts.length; index++) {
                              let droptarget=getactiveParts[index].getAttribute("data-name");
                              let targetvalue=getactiveParts[index].getAttribute("data-value");
                              let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg";
                              let path=encodeURI(thisurl);
                            
                               
                              $("#"+droptarget).load(path, function(response, status, xhr){

                                if(status=="error"){
                                  $.ambiance({
                                    message:"Sorry! You cannot place this part here.",
                                    type:"error",
                                    fade:true
                                  })
                                }else{
                                   document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                   document.getElementById(droptarget).setAttribute('data-color', colorname);
                                   document.getElementById(droptarget).setAttribute('data-url', thisurl);
                                }
                              });

                              getactiveParts[index].classList.remove('activepart');
                              getactiveParts[index].classList.remove('activepart_highlight');
                             
                            }
                          }
                          else{
                         
                            let droptarget=event.target.getAttribute("data-name");
                            let targetvalue=event.target.getAttribute("data-value");
                            let thisurl="admin/DesignPartImages/"+designname+"/"+colorname+"/"+cy+"/"+subcategory+"/"+targetvalue+".svg"
                            let path=encodeURI(thisurl);
                            
                               
                            $("#"+droptarget).load(path, function(response, status, xhr){

                              if(status=="error"){
                                $.ambiance({
                                  message:"Sorry! You cannot place this part here.",
                                  type:"error",
                                  fade:true
                                })
                              }else{
                                   document.getElementById(droptarget).setAttribute('data-designcode', designcode);
                                   document.getElementById(droptarget).setAttribute('data-color', colorname);
                                   document.getElementById(droptarget).setAttribute('data-url', thisurl);

                                }
                            });
                          }

                          setTimeout(()=>{
                                
                              
                              },200);
                            
                          }

              }
            // }
                       
                        // }
                      });
            }


                       
	
	
	$(".firststepv").click(function(){
	 var pehlastep=$(this).attr('value');
	 firststepvalue=pehlastep;
	var  balustradeid=designtypeid;
	 var firststepurl="";
	 var firststep_treadurl="";
	 var firststep_shadowurl="";
	 var firststep_riserurl="";
	 var firststep_dotsurl="";
	 var firststep_ractanglessurl="";
	 var firststep_shadow2url="";
	 var bg=choosedesign;
	// alert(firststepshedowcolor);
	 if(pehlastep=='1' && bg=='2'){
		 //squre step
		 if(firststepcolor=='Marble'){
		 firststepurl="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE.svg";
		 }else {
		 firststepurl="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE "+firststepcolor+".svg";
		 }
		 firststep_treadurl="Stairs with Landing/TREADS/1ST STEP TREAD SQUARE/1ST STEP sq TREAD "+firststeptreadcolor+".svg";
		 if(firststepshedowcolor=="Marble"){
		 firststep_shadowurl="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1ST STEP square REFLECTION ON  TILE.svg";
		 }else{
		 firststep_shadowurl="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE REFLECTION ON "+firststepshedowcolor+".svg";
		 }
		 
		 if(firststeprisercolor=="Marble"){
		 firststep_riserurl="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER PLAIN.svg";
		 }else if(firststeprisercolor=="white"){
		 firststep_riserurl="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER PLAIN white.svg";
		 }else {
		 firststep_riserurl="Stairs with Landing/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER GRAIN "+firststeprisercolor+".svg";
		 }
		 if(balustradeid=='2'){
		 firststep_dotsurl="Stairs with Landing/glassdots.svg";
		 }else{
		 firststep_dotsurl="Stairs with Landing/dots1.svg";
		 }
		  firststep_ractanglessurl="Stairs with Landing/rectangles1.svg";
		 
	 }else if(pehlastep=='2' && bg=='2'){
		 //round step
		 if(firststepcolor=='Marble'){
		 firststepurl="Stairs with Landing/1ST STEP/1ST STEP ROUND/1ST STEP ROUND.svg";
		  }else {
		 firststepurl="Stairs with Landing/1ST STEP/1ST STEP ROUND/1ST STEP ROUND "+firststepcolor+".svg";
		  }
		 firststep_treadurl="Stairs with Landing/TREADS/1ST STEP TREAD ROUND/1ST STEP TREAD "+firststeptreadcolor+".svg";
		  if(firststepshedowcolor=="Marble"){
		 firststep_shadowurl="Stairs with Landing/1ST STEP/1ST STEP ROUND/1ST STEP ROUND SHADOW ON  TILE.svg";
		 	 }else{
		 firststep_shadowurl="Stairs with Landing/1ST STEP/1ST STEP ROUND/1ST STEP ROUND SHADOW ON "+firststepshedowcolor+".svg";
			 }
			  if(firststeprisercolor=="Marble"){
		 firststep_riserurl="Stairs with Landing/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER PLAIN.svg";
		  }else if(firststeprisercolor=="white"){
		 firststep_riserurl="Stairs with Landing/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER PLAIN white.svg";
		  }else {
		 firststep_riserurl="Stairs with Landing/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER GRAIN "+firststeprisercolor+".svg";
		  }
		 if(balustradeid=='2'){
		 firststep_dotsurl="Stairs with Landing/glassdots.svg";
		 }else{
		  firststep_dotsurl="Stairs with Landing/dots.svg";
		 }
		  firststep_ractanglessurl="Stairs with Landing/rectangles.svg";
	 }else 	 if(pehlastep=='1' && bg=='3'){
		 //squre step
		 if(firststepcolor=='Marble'){
		 firststepurl="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE.svg";
		 }else {
		 firststepurl="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE "+firststepcolor+".svg";
		 }
		 firststep_treadurl="Stairs with Triangles/TREADS/TREADS 1ST STEP SQUARE/TREAD "+firststeptreadcolor+".svg";
		 if(firststepshedowcolor=="Marble"){
		 firststep_shadowurl="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE REFLECTION ON TILE.svg";
		  firststep_shadow2url="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/Shadow.svg";
		 }else{
		 firststep_shadowurl="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1ST STEP SQUARE REFLECTION ON "+firststepshedowcolor+".svg";
		  firststep_shadow2url="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/Shadow "+firststepshedowcolor+".svg";
		 }
		 
		 if(firststeprisercolor=="Marble"){
		 firststep_riserurl="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER PLAIN.svg";
		 }else if(firststeprisercolor=="white"){
		 firststep_riserurl="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER PLAIN white.svg";
		 }else {
		 firststep_riserurl="Stairs with Triangles/1ST STEP/1ST STEP SQUARE/1st STEP RISER/1ST STEP RISER GRAIN "+firststeprisercolor+".svg";
		 }
		 if(balustradeid=='2'){
		 firststep_dotsurl="Stairs with Triangles/glassdots.svg";
		 }else{
		 firststep_dotsurl="Stairs with Triangles/dots1.svg";
		 }
		  firststep_ractanglessurl="Stairs with Triangles/rectangles1.svg";
		 
	 }else if(pehlastep=='2' && bg=='3'){
		 //round step
		 if(firststepcolor=='Marble'){
		 firststepurl="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1ST STEP ROUND.svg";
		  }else {
		 firststepurl="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1ST STEP ROUND "+firststepcolor+".svg";
		  }
		 firststep_treadurl="Stairs with Triangles/TREADS/TREADS 1ST STEP ROUND/TREAD "+firststeptreadcolor+".svg";
		  if(firststepshedowcolor=="Marble"){
		 firststep_shadowurl="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1ST STEP ROUND REFLECTION ON TILE.svg";
		  firststep_shadow2url="Stairs with Triangles/1ST STEP/1ST STEP ROUND/Shadow.svg";
		 	 }else{
		 firststep_shadowurl="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1ST STEP ROUND REFLECTION ON "+firststepshedowcolor+".svg";
		  firststep_shadow2url="Stairs with Triangles/1ST STEP/1ST STEP ROUND/Shadow "+firststepshedowcolor+".svg";
			 }
			  if(firststeprisercolor=="Marble"){
		 firststep_riserurl="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER PLAIN.svg";
		  }else if(firststeprisercolor=="white"){
		 firststep_riserurl="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER PLAIN white.svg";
		  }else {
		 firststep_riserurl="Stairs with Triangles/1ST STEP/1ST STEP ROUND/1st STEP RISER/1ST STEP RISER GRAIN "+firststeprisercolor+".svg";
		  }
		 if(balustradeid=='2'){
		 firststep_dotsurl="Stairs with Triangles/glassdots.svg";
		 }else{
		  firststep_dotsurl="Stairs with Triangles/dots.svg";
		 }
		  firststep_ractanglessurl="Stairs with Triangles/rectangles.svg";
	 }else 	 if(pehlastep=='1' && bg=='4'){
		 //squre step
		
		 firststep_treadurl="Curved Stairs/TREADS/TREADS FIRST STEP SQUARE/FIRST STEP SQUARE "+firststeptreadcolor+".svg";
		
		 
		 if(firststeprisercolor=="Marble"){
		 firststep_riserurl="Curved Stairs/RISERS/RISER FIRST STEP SQUARE/RISER FIRST STEP SQUARE.svg";
		 }else {
		 firststep_riserurl="Curved Stairs/RISERS/RISER FIRST STEP SQUARE/RISER FIRST STEP SQUARE "+firststeprisercolor+".svg";
		 }
		 
		 firststep_dotsurl="Curved Stairs/dots1.svg";
		  firststep_ractanglessurl="Curved Stairs/rectangles1.svg";
		 
	 }else if(pehlastep=='2' && bg=='4'){
		 //round step
	 firststep_treadurl="Curved Stairs/TREADS/TREADS FIRST STEP ROUND/FIRST STEP ROUND "+firststeptreadcolor+".svg";
		
		 
		 if(firststeprisercolor=="Marble"){
		 firststep_riserurl="Curved Stairs/RISERS/RISER FIRST STEP ROUND/RISER FIRST STEP ROUND.svg";
		 }else {
		 firststep_riserurl="Curved Stairs/RISERS/RISER FIRST STEP ROUND/RISER FIRST STEP ROUND "+firststeprisercolor+".svg";
		 }
		  firststep_dotsurl="Curved Stairs/dots.svg";
		  firststep_ractanglessurl="Curved Stairs/rectangles.svg";
	 }
	 let cpath1="";
	 let cpath2="";
	 let cpath3="";
	 let cpaths="";
	 let cpath4="";
	 let cpath5="";
	 let cpath6="";
	   cpath1=encodeURI(firststepurl);
	   cpath2=encodeURI(firststep_treadurl);
	   cpath3=encodeURI(firststep_shadowurl);
	   cpaths=encodeURI(firststep_shadow2url);
	   cpath4=encodeURI(firststep_riserurl);
	   cpath5=encodeURI(firststep_dotsurl);
	   cpath6=encodeURI(firststep_ractanglessurl);
	//   loadRectangles();
	
if(firststepurl !=""){
      $("#maindiv #first_step").load(cpath1, function(response, status, xhr){
           if(status=="error"){
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("first_step").setAttribute('data-url', firststepurl);
           }
           });
	}
	
if(firststep_treadurl !=""){
      $("#maindiv #first_step_tread").load(cpath2, function(response, status, xhr){
           if(status=="error"){
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("first_step_tread").setAttribute('data-url', firststep_treadurl);
           }
           });
	}
	
if(firststep_shadowurl !=""){
      $("#maindiv #first_step_shadow").load(cpath3, function(response, status, xhr){
           if(status=="error"){
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("first_step_shadow").setAttribute('data-url', firststep_shadowurl);
           }
           });
}
if(firststep_shadow2url !=""){
      $("#maindiv #first_step_reflaction").load(cpaths, function(response, status, xhr){
           if(status=="error"){
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("first_step_reflaction").setAttribute('data-url', firststep_shadow2url);
           }
           });
	}
	
if(firststep_riserurl !=""){
      $("#maindiv #first_step_riser").load(cpath4, function(response, status, xhr){
           if(status=="error"){
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("first_step_riser").setAttribute('data-url', firststep_riserurl);
           }
           });	
}
      $("#maindiv #dots").load(cpath5, function(response, status, xhr){
           if(status=="error"){
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("dots").setAttribute('data-url', firststep_dotsurl);
           }
           });	
      $("#maindiv #rectangles").load(cpath6, function(response, status, xhr){
           if(status=="error"){
             $.ambiance({
               message:"Sorry! You cannot change this color here.",
               type:"error",
               fade:true
             })
           }else{
            document.getElementById("rectangles").setAttribute('data-url', firststep_ractanglessurl);
			
           }
           });		   
		   
						 $('#designcolor').css('display', 'none');
						 $('#designcategory').css('display', 'none');
						  $('#designsubcategory').css('display', 'none');
              $("#partsimagediv").html("");   $("#partsimagediv1").html("");
						  $('#designmaterial').css('display', 'none');
    	       // alert($("#catdropdown").val());
		
    	   balustradeid=designtypeid;
        var bgid=choosedesign;
        $('.dynamicparts').html("");
        $('.dynamicparts').attr('data-color', '');
         $('.dynamicparts').attr('data-designcode', '');
         $('.dynamicparts').attr('data-url', '');


         setTimeout(() => {
          document.getElementById("page_loader").style.display="none";
          document.getElementById("design_body").style.removeProperty('position');
          
          loadRectangles();
       
                              
         }, 6000);

        if(balustradeid=='1'){
			$('#designmaterialtext').html('Select Stair Parts...');
			$('#designmaterialvalues').html('<li class="nav-item"> <a class="nav-link designmaterial" value="h1" href="#">Handrails</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="n1" href="#">Newel Posts</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="is1" href="#">Iron Spindles</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="ws1" href="#">Wood Spindles</a></li>');
				$('#designmaterial').css('display', 'block');
		}else if(balustradeid=='2'){
			$('#designmaterialtext').html('Select Accent Material...');
			$('#designmaterialvalues').html('<li class="nav-item"> <a class="nav-link designmaterial" value="w2" href="#">Hardwood</a></li><li class="nav-item"> <a class="nav-link designmaterial" value="ss2" href="#">Stainless Steel</a></li>');
			$('#designmaterial').css('display', 'block');
		}
    });

   window.onresize=loadRectangles;

function loadRectangles(){
                    //  ..................................................

                     var allnewelms='';
                     //$('#designcolor').css('display', 'none');
                   //  $('#designcategory').css('display', 'none');
                    // $('#designsubcategory').css('display', 'none');
                     $("#partsimagediv").html("");  

                     
                     // ...........load divs for each part................
                     $(".dropdiv").remove();
                     var dropdivs=document.getElementsByClassName("ssitems");
                     var parentRect=document.getElementById("maindiv").getBoundingClientRect();
                     var parentleft=parentRect.left;
                     var parenttop=parentRect.top;
                     for (let index = 0; index < dropdivs.length; index++) {
                       var elmid=dropdivs[index].getAttribute("data-name");
                      //  console.log(elmid);
                       var elmvalue=dropdivs[index].getAttribute("data-value");
                       var elmpart=dropdivs[index].getAttribute("data-part");
                       var elmtransform=dropdivs[index].getAttribute("data-transform");
                       var positionInfo=dropdivs[index].getBoundingClientRect();
                       var elementwid = positionInfo.width;
                       var elementht= positionInfo.height;
                       var elmleft=positionInfo.left;
                       var elmtop=positionInfo.top;
                       var elmright=positionInfo.right;
                       var elmbottom=positionInfo.bottom;

                      
                       elmtop=elmtop-parenttop;
                       elmleft=elmleft-parentleft;
                      
                       
                        var newelm='<div class="dropdiv  '+elmpart+'" id="t'+elmid+'" data-name="'+elmid+'" data-value="'+elmvalue+'" style=" position:absolute; left: '+elmleft+'px; top: '+elmtop+'px;  width:'+elementwid+'px; height:'+ elementht+'px;"></div>';
                     //  alert(newelm);
					   allnewelms+=newelm;
                        
                     }
                     document.getElementById("maindiv").innerHTML+=allnewelms;
                     $(".dropdiv").hide();
                    
}

	</script>
	

<?php
$bgid="";
$mydesign="";
  if (isset($_GET['user_design'])) {
      $designid=$_GET['user_design'];
      // echo $designid;
      $sql="SELECT * FROM user_designs WHERE id='$designid' ";
      $subquery=mysqli_query($con, $sql);
      if (mysqli_num_rows($subquery)>0) {
        
        while($rows = mysqli_fetch_array($subquery)){
            $mydesign=$rows['designhtml'];
            $bgid=$rows['type_id'];
            $balustrade=$rows['balustrade'];
            $fs_value=$rows['fs_value'];
            $fs_color=$rows['fs_color'];
            $fs_treadcolor=$rows['fs_treadcolor'];
            $fs_risercolor=$rows['fs_risercolor'];
            $fs_shadowcolor=$rows['fs_shadowcolor'];
            // echo $mydesign;

            ?>
  
            <script>
			
			  document.getElementById("page_loader").style.display="block";
  document.getElementById("design_body").style.position="fixed";
  $('.whenstairchoosed').css('display', 'block');
  $('#dreamid').css('display', 'none');
  $('.card').css('opacity', '1');
  $('.choosebg').css('color', '#6c757d');
  $(this).css('color', 'white');
   var bgid='<?php echo $bgid; ?>';
   choosedesign=bgid;
   firststepvalue='<?php echo $fs_value; ?>';
   firststepcolor='<?php echo $fs_color; ?>';
   firststeptreadcolor='<?php echo $fs_treadcolor; ?>';
   firststeprisercolor='<?php echo $fs_risercolor; ?>';
   firststepshedowcolor='<?php echo $fs_shadowcolor; ?>';
   designtypeid='<?php echo $balustrade; ?>';
  // alert(designtypeid);
  // choosedesigntext=$(this).html();
   designurl='<?php echo $mydesign; ?>';
 console.log(designurl);
   if(bgid=='1'){
     // designurl='designs/straight_stairs.php';
	  $('#firststep').css('display', 'none');
	  $('#headsforwhite').css('display', 'none');
	     $('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
			// alert($('#designtypeddvalues').html());
			 }else if (bgid=='2') {
      //designurl='designs/stairs_with_landing.php';
	  $('#firststep').css('display', 'block');
	  //firststepvalue="2";
	  $('#headsforwhite').css('display', 'block');
	 $('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
		}else if (bgid=='3') {
      //designurl='designs/stairs_with_triangles.php';
	  $('#firststep').css('display', 'block');
	 //firststepvalue="2";
	  $('#headsforwhite').css('display', 'block');
	$('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
		}else if (bgid=='4') {
     // designurl='designs/curved_stairs.php';
	  $('#firststep').css('display', 'block');
	 //firststepvalue="2";
	  $('#headsforwhite').css('display', 'block');
	$('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li>');
		 }else if (bgid=='5') {
     // designurl='designs/balcony.php';
	  $('#firststep').css('display', 'none');
	  $('#treads').css('display', 'none');
	  $('#risers').css('display', 'none');
	  $('#stringers').css('display', 'none');
	
	  $('#tilefloor').css('display', 'none');
	 $('#headsforwhite').css('display', 'block');
	$('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
		}else{
     // designurl='';
    }

   if(bgid !='5'){
	   
	  $('#treads').css('display', 'block');
	  $('#risers').css('display', 'block');
	  $('#stringers').css('display', 'block');
	  $('#tilefloor').css('display', 'block');
	  //alert('done');
   }
 $("#maindiv").html(designurl);
   
         // document.getElementById("page_loader").style.display="none";
     //  console.log($("#maindiv").html());
            var getAll=document.getElementsByClassName("gridpart");
            for (let i = 0; i < getAll.length; i++) {
              thisurl=getAll[i].getAttribute("data-url");
              thisid=getAll[i].id;
              // console.log(thisid);
		
              if (thisurl) {
			
				 //} else{
                let path=encodeURI(thisurl);
                $("#maindiv #"+thisid).load(path, function(response, status, xhr){
			
					   if(status=="error"){
          
             $.ambiance({
               message:"Sorry! You cannot change this part here.",
               type:"error",
               fade:true
             })
           }else{
             document.getElementById(thisid).setAttribute('data-url', thisurl);
		
           }
                      
                      });
					  
					  
			 // }
              }
              
              
            }

            setTimeout(() => {
            document.getElementById("page_loader").style.display="none";
            document.getElementById("design_body").style.removeProperty('position');
            
            loadRectangles();
                            
          }, 6000);
    
  $('#designbase').css('display', 'block'); 
  $('#mybalu').css('display', 'block'); 
  $('#designmaterial').css('display', 'none'); 


           </script>
         <?php
                     }
  }
          }?>
          <script>
          //  loadRectangles();
           </script>
           <?php 
 


  if (isset($_GET['recomend_design'])) {
      $designid=$_GET['recomend_design'];
      // echo $designid;
      $sql="SELECT * FROM recommended_designs WHERE id='$designid' ";
      $subquery=mysqli_query($con, $sql);
      if (mysqli_num_rows($subquery)>0) {
        
        while($rows = mysqli_fetch_array($subquery)){
            $mydesign=$rows['designhtml'];
            $bgid=$rows['type_id'];
            $balustrade=$rows['balustrade'];
            $fs_value=$rows['fs_value'];
            $fs_color=$rows['fs_color'];
            $fs_treadcolor=$rows['fs_treadcolor'];
            $fs_risercolor=$rows['fs_risercolor'];
            $fs_shadowcolor=$rows['fs_shadowcolor'];
            // echo $mydesign;

            ?>

            <script>
           				
			  document.getElementById("page_loader").style.display="block";
  document.getElementById("design_body").style.position="fixed";
  $('.whenstairchoosed').css('display', 'block');
  $('#dreamid').css('display', 'none');
  $('.card').css('opacity', '1');
  $('.choosebg').css('color', '#6c757d');
  $(this).css('color', 'white');
   var bgid='<?php echo $bgid; ?>';
   choosedesign=bgid;
   firststepvalue='<?php echo $fs_value; ?>';
   firststepcolor='<?php echo $fs_color; ?>';
   firststeptreadcolor='<?php echo $fs_treadcolor; ?>';
   firststeprisercolor='<?php echo $fs_risercolor; ?>';
   firststepshedowcolor='<?php echo $fs_shadowcolor; ?>';
   designtypeid='<?php echo $balustrade; ?>';
  // choosedesigntext=$(this).html();
   designurl='<?php echo $mydesign; ?>';
 console.log(designurl);
   if(bgid=='1'){
     // designurl='designs/straight_stairs.php';
	  $('#firststep').css('display', 'none');
	  $('#headsforwhite').css('display', 'none');
	     $('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
			// alert($('#designtypeddvalues').html());
			 }else if (bgid=='2') {
      //designurl='designs/stairs_with_landing.php';
	  $('#firststep').css('display', 'block');
	  //firststepvalue="2";
	  $('#headsforwhite').css('display', 'block');
	 $('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
		}else if (bgid=='3') {
      //designurl='designs/stairs_with_triangles.php';
	  $('#firststep').css('display', 'block');
	 //firststepvalue="2";
	  $('#headsforwhite').css('display', 'block');
	$('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
		}else if (bgid=='4') {
     // designurl='designs/curved_stairs.php';
	  $('#firststep').css('display', 'block');
	 //firststepvalue="2";
	  $('#headsforwhite').css('display', 'block');
	$('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li>');
		 }else if (bgid=='5') {
     // designurl='designs/balcony.php';
	  $('#firststep').css('display', 'none');
	  $('#treads').css('display', 'none');
	  $('#risers').css('display', 'none');
	  $('#stringers').css('display', 'none');
	
	  $('#tilefloor').css('display', 'none');
	 $('#headsforwhite').css('display', 'block');
	$('#designtypeddvalues').html('<li class="nav-item"> <a class="nav-link designtypedd" value="1" href="#">Spindle Design options</a></li><li class="nav-item"> <a class="nav-link designtypedd" value="2" href="#">Glass Design Options</a></li>');
		}else{
     // designurl='';
    }

   if(bgid !='5'){
	   
	  $('#treads').css('display', 'block');
	  $('#risers').css('display', 'block');
	  $('#stringers').css('display', 'block');
	  $('#tilefloor').css('display', 'block');
	  //alert('done');
   }
 $("#maindiv").html(designurl);
   
         // document.getElementById("page_loader").style.display="none";
     //  console.log($("#maindiv").html());
            var getAll=document.getElementsByClassName("gridpart");
            for (let i = 0; i < getAll.length; i++) {
              thisurl=getAll[i].getAttribute("data-url");
              thisid=getAll[i].id;
              // console.log(thisid);
		
              if (thisurl) {
			
				 //} else{
                let path=encodeURI(thisurl);
                $("#maindiv #"+thisid).load(path, function(response, status, xhr){
			
					   if(status=="error"){
          
             $.ambiance({
               message:"Sorry! You cannot change this part here.",
               type:"error",
               fade:true
             })
           }else{
             document.getElementById(thisid).setAttribute('data-url', thisurl);
		
           }
                      
                      });
					  
					  
			 // }
              }
              
              
            }

            setTimeout(() => {
            document.getElementById("page_loader").style.display="none";
            document.getElementById("design_body").style.removeProperty('position');
            
            loadRectangles();
                            
          }, 6000);
    
  $('#designbase').css('display', 'block'); 
  $('#mybalu').css('display', 'block'); 
  $('#designmaterial').css('display', 'none'); 

           </script>
           <?php
            
          }?>
          <script>
          //  loadRectangles();
           </script>
           <?php 
          }
  }
?>
<script>
</script>
  </body>
</html>