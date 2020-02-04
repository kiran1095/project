<?php
	$link = mysqli_connect("localhost", "root", "Welcome*123", "user");
 

	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());	
		}
 

?>
