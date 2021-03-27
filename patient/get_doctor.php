<?php
include("../db_connection.php");
if(!empty($_POST["specilizationid"])) 
{

 $sql=mysqli_query($dbcon,"select name,id from doctor where spec='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['name']); ?>"><?php echo htmlentities($row['name']); ?></option>
  <?php
}
}

if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select docFees from doctors where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

?>

