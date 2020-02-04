
<?php
include("database.php");
extract($_POST);
session_start();
if(isset($submit))
{
	$rs=mysqli_query($link,"select * from profile where email='$email' and password=md5('$password') and delete_flag=1");
	if(mysqli_num_rows($rs)==1)
	{
		echo '<script>alert("login completed")</script>';
		$_SESSION["email"] = $email;
		echo $_SESSION["email"];
		header("location: query.html");
	}
	else
	{
		$_SESSION["email"]=$email;
		echo '<script>alert("mysqli_error($link)")</script>';
		
	}
}

?>

  
