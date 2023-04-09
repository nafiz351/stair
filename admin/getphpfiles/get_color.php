<?php
include('../include/config.php');
if(!empty($_POST["material_id"])) 
{
 $id=$_POST['material_id'];
$query=mysqli_query($con,"SELECT * FROM materialcolors  WHERE material_name='$id'");
?>
<option value="" selected disabled>Select Color...</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['color_name']); ?></option>
  <?php
 }
}
?>