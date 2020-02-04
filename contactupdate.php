
<?php

include("database.php");
session_start();
$name=$_SESSION["name"];
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
//echo $phone;
$date = date("Y-m-d h:i:s",time());

$sql = "UPDATE user SET telephone='$phone',update_time='$date' WHERE name='$name'";

if (mysqli_query($link, $sql)==TRUE) {
    echo "Record updated successfully";
	header("location: inside.html");
} 
else {
    echo "Error updating record: " . mysqli_error($link);
}
?>

