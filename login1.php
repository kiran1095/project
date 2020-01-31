
<?php
  $link = mysqli_connect("localhost", "root", "Welcome*123", "reg");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
extract($_POST);
session_start();

if(isset($submit))
{
	$rs=mysqli_query($link,"select * from sample where name='$name' and password='$password'");
	if(mysqli_num_rows($rs)==1)
	{
		echo "login completed";
		$_SESSION["name"] = $name;
		echo $_SESSION["name"];
		header("location: inside.html");
		}
	else
	{
		echo "not correct";
	}
}

mysqli_close($link);
?>

  
