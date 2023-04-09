<?php
include('../include/config.php');
if(!empty($_POST["des_id"])) 
{
 $id=intval($_POST['des_id']);
$query=mysqli_query($con,"SELECT * FROM designtype  WHERE designid=$id");
?>
<option value="" selected disabled>Select Type...</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['design_type']); ?></option>
  <?php
 }
}
?>