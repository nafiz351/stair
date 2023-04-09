<?php
include('../include/config.php');
if(!empty($_POST["subcat_id"])) 
{
 $id=intval($_POST['subcat_id']);
$query=mysqli_query($con,"SELECT * FROM subcategory  WHERE id=$id");
?>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
<input type="text"    name="designcode" id="designcodeinput"  placeholder="Design Code" value="<?php echo htmlentities($row['design_code']); ?>"class="span8 tip" required readonly>
  <?php
 }
}
?>