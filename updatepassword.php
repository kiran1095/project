
<?php
include("database.php");
extract($_POST);
session_start();
$email=$_SESSION["email"];
$date=date("y-m-d h:i:s");
	$sql = "update profile set password=md5('$password'),modified_time='$date' WHERE email='$email'";
	if (mysqli_query($link, $sql)==TRUE) 
	{
    		echo "Record updated successfully";
		header("location: login2.php");
	} 
	else {
    		echo "Error updating record: " . mysqli_error($link);
	}

?>

  
