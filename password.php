
<?php
include("database.php");
extract($_POST);
session_start();
$date=date("y-m-d h:i:s");
if(isset($submit))
{
	$sql = "update profile set password=md5('$password'),update_time='$date' WHERE email='$email'";
	//$rs=mysqli_query($link,"select * from profile where name='$name' and password=md5('$password') and delete_flag=1");
	if(mysqli_num_rows($rs)==1)
	{
		echo '<script>alert("password updated")</script>';
		//header("location: query.html");
	}
	else
	{
		echo "not correct".mysqli_error($link);
	}
}

?>

  
