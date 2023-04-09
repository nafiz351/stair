<?php
include('../include/config.php');
if(!empty($_POST["destype_id"])) 
{
 $id=intval($_POST['destype_id']);
$query=mysqli_query($con,"SELECT * FROM designpositiontypes  WHERE designtypeid=$id");
?>
<option value="" selected disabled>Select Position Type...</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['position_name']); ?></option>
  <?php
 }
}
?>