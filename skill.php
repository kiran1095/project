<?php
include("database.php");
session_start();
$email=$_SESSION["email"];
$skill = mysqli_real_escape_string($link, $_REQUEST['skill']);
$cr="create table if not exists skills(id int auto_increment primary key,skill varchar(20)NOT NULL,user_email varchar(20)NOT NULL,foreign key(user_email) references profilev2(email))";
if(!mysqli_query($link,$cr))
	echo mysqli_error($link);

$sql = "INSERT INTO skills (skill,user_email) VALUES ('$skill','$email')";
if(mysqli_query($link, $sql))
	{
	echo "Records added successfully.";
	header("location: inside.html");
			} 
	else{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	
?>

