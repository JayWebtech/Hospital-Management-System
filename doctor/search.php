<?php 
include("../db_connection.php");
$button = $_GET['submit']; 
$search = $_GET ['search']; 
if(!$button) 
	echo "you didn't submit a keyword"; 
else { 
	if(strlen($search) <= 1 ) 
		echo "Search term too short"; 
	else { 
		echo "You searched for <b> $search </b> <hr size='1' > </ br> "; 
	 $search_exploded = explode ( " ", $search );
	  $x = 0; 
	  foreach( $search_exploded as $search_each ) { 
	  	$x++; 
	  	$construct = ""; 
	  	if( $x == 1 ) 
	  		$construct .="symp LIKE '%$search_each%'"; 
	  	else $construct .="AND symp	 LIKE '%$search_each%'"; 
	  	} 
	  	$construct = "SELECT * FROM diagnosis WHERE $construct"; 
	  	$run = mysqli_query($dbcon,$construct); 
	  	$foundnum = mysqli_num_rows($run); 
	  	if ($foundnum == 0) 
	  		echo "Sorry, there are no matching result for <b> $search </b>. </br> </br> 1. Try "; 
	  	else {
	  	 echo "$foundnum results found !<p>"; 
	  	 while($runrows = mysqli_fetch_assoc($run) ) { 
	  	 	$title = $runrows ['symp']; 
	  	 	$desc = $runrows ['sname'];
	  	 	 } } } } ?>