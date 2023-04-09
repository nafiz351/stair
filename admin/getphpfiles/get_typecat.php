<?php
include('../include/config.php');
if(!empty($_POST["destype_id"])) 
{
 $id=intval($_POST['destype_id']);
$query=mysqli_query($con,"SELECT * FROM category  WHERE designtypeid=$id");
?>
<option value="" selected disabled>Select Category...</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['categoryName']); ?></option>
  <?php
 }
}
?>