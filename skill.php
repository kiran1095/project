<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
*/
$link = mysqli_connect("localhost", "root", "Welcome*123", "user");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
$name=$_SESSION["name"];
//echo $name;
 
// Escape user inputs for security
$skill = mysqli_real_escape_string($link, $_REQUEST['skill']);
	
	$sql = "INSERT INTO skillset (name,skill) VALUES ('$name','$skill')";
	if(mysqli_query($link, $sql)){
    	echo "Records added successfully.";
	//header("location: login.html");
	} else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}	
// Close connection
mysqli_close($link);
?>
