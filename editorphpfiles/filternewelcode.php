<?php
require_once '../includes/config.php';

$filterby=$_POST['des_id'];
$query=mysqli_query($con,"SELECT * FROM `subcategory`, `category`, `designtype` WHERE 
subcategory.categoryid=category.id AND 
category.designtypeid=designtype.id AND 
designtype.design_type='NEWEL POST';");
?>
                <li class="nav-item"> <a class="nav-link nwl" value="0" href="#">All</a></li>
<?php
 while($row=mysqli_fetch_array($query))
 {$code=$row['design_code'];
 $name=$row['subcategory'];
  ?>
 <li class="nav-item"> <a class="nav-link nwl" value="<?php echo htmlentities($code); ?>" href="#"><?php echo htmlentities($code); ?></a></li>
  <?php
 }
?>