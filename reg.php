<?php

include("database.php");

$sql="create table if not exists profilev2(id int(11) auto_increment primary key, name varchar(20) NOT NULL,email varchar(20) NOT NULL UNIQUE,password varchar(64)NOT NULL,address varchar(50)NOT NULL,telephone int(12)NOT NULL,comment varchar(20),stream varchar(25)NOT NULL,key1 varchar(15)NOT NULL,created_time datetime default current_timestamp,modified_time datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,deleted_flag tinyint(4)NOT NULL)";

if(!mysqli_query($link,$sql))
	echo mysqli_error($link);

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = md5(mysqli_real_escape_string($link, $_REQUEST['password']));
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['telephone']); 
$comment = mysqli_real_escape_string($link, $_REQUEST['comment']);  
$stream = mysqli_real_escape_string($link, $_REQUEST['subject']);
$query = mysqli_real_escape_string($link, $_REQUEST['query']);
$date = date("Y-m-d h:i:s",time());
$date1="NULL";
$flag=0;	
	$sql = "INSERT INTO profilev2 (name, email, password,address,telephone,comment,stream,key1,created_time,deleted_flag) VALUES ('$name' , '$email' , '$password' , '$address' , '$telephone' , '$comment' , '$stream' , '$query' , '$date' , '$flag')";
	if(mysqli_query($link, $sql)){
    	echo "Records added successfully.";
	header("location: login.php");
	} else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>

