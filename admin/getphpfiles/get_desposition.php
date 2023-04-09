<?php
include('../include/config.php');
if(!empty($_POST["destypepos_id"])) 
{
 $id=intval($_POST['destypepos_id']);
$query=mysqli_query($con,"SELECT * FROM designpositions  WHERE positiontypeid=$id");
?>
<option value="" selected disabled>Select Design Position...</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['designposition']); ?></option>
  <?php
 }
}
?>