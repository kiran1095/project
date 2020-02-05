<html>
  <head>
    <title>forms</title>
<style>
div {
  background-color: lightgray;
  width: 400px;
  height:100px;
  border: 400px;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
   <body>
<center>
     <h1>LOGIN</h1> <hr>
      <form method="post" action=" ">
<div>
	<table>
	<tr>
         <tr><td>email:</td><td><input type="text" name="email"/></td></tr>
           <tr><td>password:</td><td><input type="password" name="password"/></td></tr>
 
          <tr><td><input type="submit" name="submit" value="submit"/></td> 
          <td><a href="http://localhost/project/query.php">forgot password</a></td>
	  <td><a href="http://localhost/project/registration.html">new user</a></td></tr>
	</tr>
	</table>
</div> 
      </center>
    </form>
  </body>

<?php
include("database.php");
extract($_POST);
session_start();
if(isset($submit))
{
	$rs=mysqli_query($link,"select * from profile where email='$email' and password=md5('$password') and delete_flag=1");
	if(mysqli_num_rows($rs)==1)
	{
		//echo '<script>alert("login completed")</script>';
		$_SESSION["email"] = $email;
		echo $_SESSION["email"];
		header("location: inside.html");
	}
	else
	{
		$_SESSION["email"]='$email';
		echo '<script>alert("entered email and password are incorrect")</script>';
		
	}
}

?>

 </html> 
