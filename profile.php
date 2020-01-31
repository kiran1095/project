
<?php

$link = mysqli_connect("localhost", "root", "Welcome*123", "reg");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
$name=$_SESSION["name"];
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
echo $phone;

$sql = "UPDATE sample SET telephone='$phone' WHERE name='$name'";

if (mysqli_query($link, $sql)==TRUE) {
    echo "Record updated successfully";
	header("location: inside.html");
} 
else {
    echo "Error updating record: " . mysqli_error($link);
}

mysqli_close($link);
?>

