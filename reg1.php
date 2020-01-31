<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Welcome*123", "reg");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['telephone']); 
// Attempt insert query execution
if(isset($submit))
{
	$rs=mysqli_query($link,"select * from sample where name='$name'");
	if(mysqli_num_rows($rs)==0)
	{
	$sql = "INSERT INTO sample (name, email, password,address,telephone) VALUES ('$name', '$email', '$password','$address','$telephone')";
	if(mysqli_query($link, $sql)){
    	echo "Records added successfully.";
	header("location: login.html");
	} else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}
else{
	echo "already username existed";
	<a href="http://localhost/pro/registration.html">REGISTRATION</a>
     }

 
// Close connection
mysqli_close($link);
?>
