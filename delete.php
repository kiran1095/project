<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Welcome*123", "user");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
 $name=$_SESSION['name'];
 
//To delete the user profile
echo $name;
$sql = "DELETE FROM user WHERE name='$name'";
if(mysqli_query($link,$sql)==TRUE){
    echo "Records were deleted successfully.";
	header("location: home.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
