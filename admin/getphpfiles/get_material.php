<?php
include('../include/config.php');
if(!empty($_POST["destype_id"])) 
{
 $id=intval($_POST['destype_id']);
$query=mysqli_query($con,"SELECT * FROM designmaterial  WHERE designtypeid=$id");
?>
<option value="" selected disabled>Select Material Type...</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['material_name']); ?>"><?php echo htmlentities($row['material_name']); ?></option>
  <?php
 }
}
?>