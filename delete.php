<?php
include("database.php");
session_start();
 $email=$_SESSION['email'];
 
//To delete the user profile
echo $name;
$sql = "UPDATE profilev2 SET delete_flag=1 WHERE email='$email'";
if(mysqli_query($link,$sql)==TRUE){
    echo "Records were deleted successfully.";
	header("location: home.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
