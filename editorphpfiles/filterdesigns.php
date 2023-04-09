<?php
require_once '../includes/config.php';
//session_start();
$json = file_get_contents('php://input');
$params = json_decode($json);
$filterby=$params->filterby;
$spindle=$params->spindle;
$handrails=$params->handrails;
$newel=$params->newel;
$backgrounds=$params->backgrounds;
$status=$params->status;
$userid=$params->userid;

/*

$spindle=$_POST['spindle'];
$handrails=$_POST['handrails'];
$newel=$_POST['newel'];
$backgrounds=$_POST['backgrounds'];
$status=$_POST['status'];
$userid=$_POST['userid'];
*/

/*
$spindle='0';
$handrails='0';
$newel='0';
$backgrounds='Curved Stairs';
$status='recommended';
$userid='1';
$did='9';
$uid='10';
$dtype='recommended';*/
//class Room {}
//$resultg = new Room();
if($status == "recommended" ){
		//	$resultg->status="recommended design";
$choosedesign="";
	         if($spindle=='0'){
				  if($handrails=='0'){
					   if($newel=='0'){
						  //all has all done 
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `recommended_designs`"; 
						  }else{
							  $choosedesign="SELECT * FROM `recommended_designs` INNER JOIN`stairdesigns` on design_name=recommended_designs.Name WHERE recommended_designs.Name='$backgrounds'";
						  }
						}else{
				          // spindal all , handrails all newel not all done
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `recommended_designs`  WHERE tags LIKE '%$newel%'";
						  }else{
							  $choosedesign="SELECT * FROM `recommended_designs` INNER JOIN`stairdesigns` on design_name=recommended_designs.Name WHERE recommended_designs.tags LIKE '%$newel%'  AND recommended_designs.Name='$backgrounds'";
						  }
			           } 
				  }else{
					  if($newel=='0'){
						  // spindal all hanrails not newel all done
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `recommended_designs`  WHERE tags LIKE '%$handrails%'";
						  }else{
							  $choosedesign="SELECT * FROM `recommended_designs` INNER JOIN`stairdesigns` on design_name=recommended_designs.Name WHERE recommended_designs.tags LIKE '%$handrails%'  AND recommended_designs.Name='$backgrounds'";
						  }
					  }else{
					      // spindal all handrails not newel not done
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `recommended_designs`  WHERE tags LIKE '%$handrails%' OR tags LIKE '%$newel%'";
						  }else{
							  $choosedesign="SELECT * FROM `recommended_designs` INNER JOIN`stairdesigns` on design_name=recommended_designs.Name WHERE recommended_designs.tags LIKE '%$newel%' OR recommended_designs.tags LIKE '%$handrails%'  AND recommended_designs.Name='$backgrounds'";
						  }
					  } 
			      }
			 }else{
				if($handrails=='0'){
					 if($newel=='0'){
						 // spindal not handrails all newel all done
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `recommended_designs`  WHERE tags LIKE '%$spindle%'";
						  }else{
							  $choosedesign="SELECT * FROM `recommended_designs` INNER JOIN`stairdesigns` on design_name=recommended_designs.Name WHERE recommended_designs.tags LIKE '%$spindle%'  AND recommended_designs.Name='$backgrounds'";
						  }
					 }else{
				         // spindal not handrails all newel not  done
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `recommended_designs`  WHERE tags LIKE '%$spindle%' OR tags LIKE '%$newel%'";
						  }else{
							  $choosedesign="SELECT * FROM `recommended_designs` INNER JOIN`stairdesigns` on design_name=recommended_designs.Name WHERE recommended_designs.tags LIKE '%$newel%' OR recommended_designs.tags LIKE '%$spindle%'  AND recommended_designs.Name='$backgrounds'";
						  }
			          } 
				}else{
					 if($newel=='0'){
						 // spindal not handrails not newel all done 
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `recommended_designs`  WHERE tags LIKE '%$spindle%' OR tags LIKE '%$handrails%'";
						  }else{
							  $choosedesign="SELECT * FROM `recommended_designs` INNER JOIN`stairdesigns` on design_name=recommended_designs.Name WHERE recommended_designs.tags LIKE '%$spindle%' OR recommended_designs.tags LIKE '%$handrails%'  AND recommended_designs.Name='$backgrounds'";
						  }
					 }else{
					     // all has not all  done 
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `recommended_designs`  WHERE tags LIKE '%$spindle%' OR tags LIKE '%$handrails%' OR tags LIKE '%$newel%'";
						  }else{
							 $choosedesign="SELECT * FROM `recommended_designs` INNER JOIN`stairdesigns` on design_name=recommended_designs.Name WHERE recommended_designs.tags LIKE '%$newel%' OR recommended_designs.tags LIKE '%$handrails%' OR recommended_designs.tags LIKE '%$spindle%'  AND recommended_designs.Name='$backgrounds'"; 
						  }
					 } 
			    } 
			 }
} else if($status == "user" ){
	
//$resultg->status="customer design";
	          $choosedesign="";
	         if($spindle=='0'){
				  if($handrails=='0'){
					   if($newel=='0'){
						  //all has all done 
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`"; 
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.Name='$backgrounds'";
						  }
						}else{
				          // spindal all , handrails all newel not all done
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$newel%'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$newel%'  AND user_designs.Name='$backgrounds'";
						  }
			           } 
				  }else{
					  if($newel=='0'){
						  // spindal all hanrails not newel all done
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$handrails%'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$handrails%'  AND user_designs.Name='$backgrounds'";
						  }
					  }else{
					      // spindal all handrails not newel not done
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$handrails%' OR tags LIKE '%$newel%'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$newel%' OR user_designs.tags LIKE '%$handrails%'  AND user_designs.Name='$backgrounds'";
						  }
					  } 
			      }
			 }else{
				if($handrails=='0'){
					 if($newel=='0'){
						 // spindal not handrails all newel all done
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$spindle%'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$spindle%'  AND user_designs.Name='$backgrounds'";
						  }
					 }else{
				         // spindal not handrails all newel not  done
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$spindle%' OR tags LIKE '%$newel%'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$newel%' OR user_designs.tags LIKE '%$spindle%'  AND user_designs.Name='$backgrounds'";
						  }
			          } 
				}else{
					 if($newel=='0'){
						 // spindal not handrails not newel all done 
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$spindle%' OR tags LIKE '%$handrails%'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$spindle%' OR user_designs.tags LIKE '%$handrails%'  AND user_designs.Name='$backgrounds'";
						  }
					 }else{
					     // all has not all  done 
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$spindle%' OR tags LIKE '%$handrails%' OR tags LIKE '%$newel%'";
						  }else{
							 $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$newel%' OR user_designs.tags LIKE '%$handrails%' OR user_designs.tags LIKE '%$spindle%'  AND user_designs.Name='$backgrounds'"; 
						  }
					 } 
			    } 
			 }
			
} else if($status == "meuser" ){
	
			//$resultg->status="my design and my id is: ".$userid;
			$choosedesign="";
	         if($spindle=='0'){
				  if($handrails=='0'){
					   if($newel=='0'){
						  //all has all done 
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs` WHERE userid='$userid'"; 
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.Name='$backgrounds'  AND user_designs.userid='$userid'";
						  }
						}else{
				          // spindal all , handrails all newel not all done
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$newel%' AND userid='$userid'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$newel%'  AND user_designs.Name='$backgrounds'  AND user_designs.userid='$userid'";
						  }
			           } 
				  }else{
					  if($newel=='0'){
						  // spindal all hanrails not newel all done
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$handrails%' AND userid='$userid'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$handrails%'  AND user_designs.Name='$backgrounds'  AND user_designs.userid='$userid'";
						  }
					  }else{
					      // spindal all handrails not newel not done
						  if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$handrails%' OR tags LIKE '%$newel%' AND userid='$userid'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$newel%' OR user_designs.tags LIKE '%$handrails%'  AND user_designs.Name='$backgrounds'  AND user_designs.userid='$userid'";
						  }
					  } 
			      }
			 }else{
				if($handrails=='0'){
					 if($newel=='0'){
						 // spindal not handrails all newel all done
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$spindle%' AND userid='$userid'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$spindle%'  AND user_designs.Name='$backgrounds'";
						  }
					 }else{
				         // spindal not handrails all newel not  done
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE  userid='$userid' AND tags LIKE '%$spindle%' OR tags LIKE '%$newel%'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.Name='$backgrounds'  AND user_designs.userid='$userid' AND user_designs.tags LIKE '%$newel%' OR user_designs.tags LIKE '%$spindle%'";
						  }
			          } 
				}else{
					 if($newel=='0'){
						 // spindal not handrails not newel all done 
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE tags LIKE '%$spindle%' OR tags LIKE '%$handrails%' AND userid='$userid'";
						  }else{
							  $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE user_designs.tags LIKE '%$spindle%' OR user_designs.tags LIKE '%$handrails%'  AND user_designs.Name='$backgrounds'  AND user_designs.userid='$userid'";
						  }
					 }else{
					     // all has not all  done 
						 if($backgrounds=='0'){
							  $choosedesign="SELECT * FROM `user_designs`  WHERE userid='$userid' AND tags LIKE '%$spindle%' OR tags LIKE '%$handrails%' OR tags LIKE '%$newel%' ";
						  }else{
							 $choosedesign="SELECT * FROM `user_designs` INNER JOIN`stairdesigns` on design_name=user_designs.Name WHERE   user_designs.Name='$backgrounds' AND user_designs.userid='$userid' AND user_designs.tags LIKE '%$newel%' OR user_designs.tags LIKE '%$handrails%' OR user_designs.tags LIKE '%$spindle%'"; 
						  }
					 } 
			    } 
			 }
}
			$query=mysqli_query($con,$choosedesign);
			$countcol=0;
			 while($row=mysqli_fetch_array($query))
			 {
	?>
		
		
		
		
		
	
			
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex align-items-center align-self-start">
						<?php  if($status == "recommended"){ ?>
                         <img src="recommendeddesigns/<?php echo $row['image'];?>" alt="recommendeddesigns/<?php echo $row['image'];?>"  width="100%" height="225" />
						   <?php }else{ ?>
						     <img src="userdesigns/<?php echo $row['image'];?>" alt="userdesigns/<?php echo $row['image'];?>"  width="100%" height="225" />
						  
						   <?php } ?>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-light font-weight-normal">ID: <span style="color:red;"><?php echo $row['id'];?></span></h6>
                    <h6 class="text-muted font-weight-normal"><?php echo $row['Name'];?></h6>
                    <div class="row">
                      <div class="col-10">
                        <div class="d-flex align-items-left align-self-start">
						
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" onclick="like(this.id);" id="<?php echo $row['id'];?>" class="btn btn-outline-secondary">
					  <?php $thisstatus=""; if($status == "recommended"){ 
				  $thisstatus="recommended";
				  }else{
					 $thisstatus="user"; 
				  }?>
				    	<?php
						$firstid=$row['id'];
						$thisid=$row['id'];
$retl=mysqli_query($con,"select * from likes WHERE design_id='$thisid' AND user_id='$userid' AND design_type='$thisstatus'");
if(mysqli_fetch_array($retl)>0){

?>

							<i class="mdi mdi-heart"></i>
 <?php

}else{
	
	?>
							
							<i class="mdi mdi-heart-outline"></i>
							
							
							<?php
} ?>
							</button>
                            <button type="button"  onclick="edit(<?php echo $thisid ;?>)" class="btn btn-outline-secondary"><i class="mdi mdi-pencil-box-outline"></i></button>
                            <button type="button"  class="btn btn-outline-secondary sharer" id="s<?php echo $thisid ;?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="mdi mdi-share-variant"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="d-flex align-items-center align-self-start">
                              <i class="mdi mdi-heart"></i>
                            <?php	$retc=mysqli_query($con,"select * from likes WHERE design_id='$thisid' AND design_type='recommended'");
			$likecount=0;
	
	while ($rowc=mysqli_fetch_array($retc)) 
{
	$likecount=$likecount+1;
	// echo $likecount;
}?>
				<span>  <?php echo $likecount;?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>	
		
	 
			<?php 
			  }

//header('Content-Type: application/json');
//echo json_encode($resultg);
?>