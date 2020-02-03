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
//$date = strtotime($current_date); 
$rs=mysqli_query($link,"select * from sample where name='$name'");
	if(mysqli_num_rows($rs)>0)
	{
		echo "already username existed";
		//sleep(10);
		//header("location: registration.html");
	<a href="http://localhost/pro/registration.html">REGISTRATION</a>
		
}
else{
	$sql = "INSERT INTO sample (name, email, password,address,telephone,comment,stream,time) VALUES ('$name', '$email', '$password','$address','$telephone','$comment','$subject','$date')";
	if(mysqli_query($link, $sql))
	{
    	echo "Records added successfully.";

	header("location: login.html");
	} else{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}	
	
     }

 
// Close connection
mysqli_close($link);
?>
