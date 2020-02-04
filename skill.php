<?php
include("database.php");
session_start();
$name=$_SESSION["name"];
//echo $name;
$time=date("y-m-d H:i:s");
 
// Escape user inputs for security
$skill = mysqli_real_escape_string($link, $_REQUEST['skill']);
	
	$sql = "INSERT INTO skillset (name,skill,time) VALUES ('$name','$skill','$time')";
	if(mysqli_query($link, $sql)){
    	echo "Records added successfully.";
	header("location: inside.html");
	} else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}	
?>
