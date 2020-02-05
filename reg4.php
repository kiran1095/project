<?php

include("database.php");
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = md5(mysqli_real_escape_string($link, $_REQUEST['password']));
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['telephone']); 
$comment = mysqli_real_escape_string($link, $_REQUEST['comment']);  
$stream = mysqli_real_escape_string($link, $_REQUEST['subject']);
$query = mysqli_real_escape_string($link, $_REQUEST['query']);
$date = date("Y-m-d h:i:s",time());
$flag=1;
// Attempt insert query execution
$rs=mysqli_query($link,"select * from user where email='$email'");
	if(mysqli_num_rows($rs)>0)
	{
		echo '<script>alert("already email existed")</script>';
	}
else
{	
	$sql = "INSERT INTO profile (name, email, password,address,telephone,comment,stream,query_ans,create_time,modified_time,delete_flag) VALUES ('$name', '$email', '$password','$address','$telephone','$comment','$stream','$query','$date','$date','$flag')";
	if(mysqli_query($link, $sql)){
    	echo "Records added successfully.";
	header("location: login.html");
	} else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}
 

?>
