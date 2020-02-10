
<?php
include("database.php");
extract($_POST);
session_start();
$date=date("y-m-d h:i:s");
$email=$_SESSION["email"];
if(isset($submit))
{
$rs=mysqli_query($link,"select * from profilev2 where email='$email' and password=md5('$password') and delete_flag=1");
	if(mysqli_num_rows($rs)==1)
	{
	$sql = "update profile set password=md5('$npassword'),modified_time='$date' WHERE email='$email'";
	if(mysqli_query($link,$sql)==TRUE)
	   {
	    	echo "password updated";
		header("location: inside.html");
            }
	else{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}
	else
	   {
		echo '<script>alert("entered old password is wrong")</script>';
	   }
}	

?>

  
