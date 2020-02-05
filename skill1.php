<?php
include("database.php");
session_start();
$email=$_SESSION["email"];
$skill = mysqli_real_escape_string($link, $_REQUEST['skill']);
$time=date("y-m-d H:i:s");
		$sql = "INSERT INTO skillset (email,skill,update_time) VALUES ('$email','$skill','$time')";
			if(mysqli_query($link, $sql)){
    			echo "Records added successfully.";
			header("location: inside.html");
			} else{
    				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
	
?>
