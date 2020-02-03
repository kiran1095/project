<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
*/
$link = mysqli_connect("localhost", "root", "Welcome*123", "user");
 
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
$comment = mysqli_real_escape_string($link, $_REQUEST['comment']);  
$stream = mysqli_real_escape_string($link, $_REQUEST['subject']);
$date = date("Y-m-d h:i:s",time());
// Attempt insert query execution
//if(isset($submit))
//{
	
	$sql = "INSERT INTO sample (name, email, password,address,telephone,comment,stream,time) VALUES ('$name', '$email', '$password','$address','$telephone','$comment','$stream','$date')";
	if(mysqli_query($link, $sql)){
    	echo "Records added successfully.";
	//header("location: login.html");
	} else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	
//}
//else{
//	echo "already username existed";
//	<a href="http://localhost/pro/registration.html">REGISTRATION</a>
  //   }

 
// Close connection
mysqli_close($link);
?>
