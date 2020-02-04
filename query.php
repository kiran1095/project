<?php
include("database.php");
session_start();
 $name=$_SESSION['name'];
 
//To delete the user profile
echo $name;
$sql = "UPDATE user SET flag=0 WHERE name='$name'";
if(mysqli_query($link,$sql)==TRUE){
    echo "Records were deleted successfully.";
	header("location: home.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
