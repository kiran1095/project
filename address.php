
<?php

include("database.php");
session_start();
$email=$_SESSION["email"];
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$date = date("Y-m-d h:i:s",time());

$sql = "UPDATE profile SET address='$address',update_time='$date' WHERE email='$email'";

if (mysqli_query($link, $sql)==TRUE) {
    echo "Record updated successfully";
	header("location: inside.html");
} 
else {
    echo "Error updating record: " . mysqli_error($link);
}
?>

