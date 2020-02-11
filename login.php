<html>
  <head>
    <title>forms</title>
<style>
div {
  background-color: lightgray;
  width: 400px;
  height:200px;
  border: 400px;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
   <body>
<center>
<div>

     <h1>LOGIN</h1> <hr>
      <form method="post" action=" ">

	<table>
	<tr>
         <tr><td>Email-ID:</td><td><input type="text" name="email"/></td></tr>
           <tr><td>Password:</td><td><input type="password" name="password"/></td></tr><br>
 
          <tr><td> </td><td><input type="submit" name="submit" value="Submit"/></td> 
         </tr>
	</tr>
	</table>

     
    </form>
 	<a href="./query.php">Forgot Password</a>&emsp;&emsp;&emsp;&emsp;&emsp;
	  <a href="./registration.html">New User</a>&emsp;&emsp;&emsp;&emsp;&emsp;
</div>  </center>
  </body>

<?php

include("database.php");
extract($_POST);
session_start();
if(isset($_POST['submit']))
{
	$rs=mysqli_query($link,"select * from profilev2 where email='$email' and password=md5('$password') and deleted_flag=0");
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
