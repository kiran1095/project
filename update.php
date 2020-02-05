
<?php

include("database.php");
session_start();
$email=$_SESSION["email"];
$phone = mysqli_real_escape_string($link, $_REQUEST['telephone']);
$c_address = mysqli_real_escape_string($link, $_REQUEST['address']);
$stream = mysqli_real_escape_string($link, $_REQUEST['subject']);
$date = date("Y-m-d h:i:s",time());



if($phone!=""){
$sql = "UPDATE profile SET telephone='$phone',modified_time='$date' WHERE email='$email'";
if (mysqli_query($link, $sql)==TRUE) {
  } 
else {
    echo "Error updating record: " . mysqli_error($link);
	}
}
if($c_address!=""){
$sql = "UPDATE profile SET address='$c_address',modified_time='$date' WHERE email='$email'";
if (mysqli_query($link, $sql)==TRUE) {
  } 
else {
    echo "Error updating record: " . mysqli_error($link);
	}
}
if($stream!=""){
$sql = "UPDATE profile SET stream='$stream',modified_time='$date' WHERE email='$email'";
if (mysqli_query($link, $sql)==TRUE) {
  } 
else {
    echo "Error updating record: " . mysqli_error($link);
	}
}
echo "Record updated successfully";
header("location: inside.html");


?>

