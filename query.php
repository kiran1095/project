<html>
  <head>
    <title>forms</title>
<style>
div {
  background-color: lightgray;
  width: 600px;
  border: 400px;
  padding: 50px;
  margin: 20px;
}
</style>
  </head>
   <body>
<center>
<div>

  <h1>For Password </h1> <hr>
      <form method="post" action=" ">
	<center>	<p>email:<input type="text" name="email"><br><br>
			<p>Please answer the query which will be useful for your password reset</p>
			What is your favourite name?<input type="text" size=20 name="query"><br><br>
			<input type="submit" value="submit" name="submit"><br><br>
	</center>	
    </form>
</div>
</center>
  </body>
<?php
include("database.php");
extract($_POST);
session_start();
if(isset($submit)){
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$query = mysqli_real_escape_string($link, $_REQUEST['query']);

	$rs=mysqli_query($link,"select * from profile where email='$email' and query_ans='$query' and delete_flag=1");
	if(mysqli_num_rows($rs)==1)
	{
		echo '<script>alert("password changed completed")</script>';
		header("location: updatepassword.html");
	}
	else
	{
		$_SESSION["email"]=$email;
		echo '<script>alert("entered mail and query doesnot match")</script>';
		//echo mysqli_error($link);
		
	}
}

?>
</html>
