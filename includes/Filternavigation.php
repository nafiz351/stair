<?php
require_once 'includes/config.php';
?>
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo/logo-gray.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo/logo-gray-mini.png" style="min-width:100%;" alt="logo" /></a>
        </div>

      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="margin-top: 50px; pointer-events: none;" >
        <a class="sidebar-brand brand-logo" href="#"><img src="admin/images/logo-toolinside.png" alt="logo" /></a>
      </div>

        <ul class="nav" style="margin-top: 50px;">
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-filter-outline"></i>
              </span>
              <span class="menu-title">Choose Filter</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu" id="filterby">
                <li class="nav-item"> <a class="nav-link cf" value="1" href="#">Filter By Name</a></li>
                <li class="nav-item"> <a class="nav-link cf" value="2" href="#">Filter By Code</a></li>
               </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-filter-outline"></i>
              </span>
              <span class="menu-title">Spindles</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu" id="spindle" >
                <li class="nav-item"> <a class="nav-link spi" value="0" href="#">All</a></li>
				 <?php
  $ret=mysqli_query($con,"SELECT * FROM `subcategory`, `category`, `designtype` WHERE 
subcategory.categoryid=category.id AND 
category.designtypeid=designtype.id AND 
designtype.design_type='SPINDLE';");
$countcol=0;
while ($row=mysqli_fetch_array($ret)) 
{ $code=$row['design_code'];
 $name=$row['subcategory'];
	//echo '<option value="'.$code.'">'.$name.'</option>';
	echo '<li class="nav-item"> <a class="nav-link spi" value="'.$code.'" href="#">'.$name.'</a></li>';
  
} 
  ?>
                
               </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-filter-outline"></i>
              </span>
              <span class="menu-title">Handrails</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu" id="handrails">
                <li class="nav-item"> <a class="nav-link hand" value="0" href="#">All</a></li>
                <?php
  $ret=mysqli_query($con,"SELECT * FROM `subcategory`, `category`, `designtype` WHERE 
subcategory.categoryid=category.id AND 
category.designtypeid=designtype.id AND 
designtype.design_type='HANDRAIL/FOOTRAIL'
OR 
subcategory.categoryid=category.id AND 
category.designtypeid=designtype.id AND 
designtype.design_type='HANDRAIL' 
;");
$countcol=0;
while ($row=mysqli_fetch_array($ret)) 
{ $code=$row['design_code'];
 $name=$row['subcategory'];
	echo '<li class="nav-item"> <a class="nav-link hand" value="'.$code.'" href="#">'.$name.'</a></li>';
  
} 
  ?>
               </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-filter-outline"></i>
              </span>
              <span class="menu-title">Newel Posts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu" id="newel">
                <li class="nav-item"> <a class="nav-link nwl" value="0" href="#">All</a></li>
                <?php
  $ret=mysqli_query($con,"SELECT * FROM `subcategory`, `category`, `designtype` WHERE 
subcategory.categoryid=category.id AND 
category.designtypeid=designtype.id AND 
designtype.design_type='NEWEL POST';");
$countcol=0;
while ($row=mysqli_fetch_array($ret)) 
{ $code=$row['design_code'];
 $name=$row['subcategory'];
	echo '<li class="nav-item"> <a class="nav-link nwl" value="'.$code.'" href="#">'.$name.'</a></li>';
  
} 
  ?>
               </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-filter-outline"></i>
              </span>
              <span class="menu-title">Backgrounds</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu" id="backgrounds">
                <li class="nav-item"> <a class="nav-link bkg" value="0" href="#">All</a></li>
				 <?php
  $ret=mysqli_query($con,"SELECT * FROM `stairdesigns`;");
$countcol=0;
while ($row=mysqli_fetch_array($ret)) 
{ $did=$row['id'];
 $name=$row['design_name'];
	echo '<li class="nav-item"> <a class="nav-link bkg" value="'.$did.'" href="#">'.$name.'</a></li>';
  
} 
  ?>
               </ul>
            </div>
          </li>
        </ul>
      </nav>