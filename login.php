<!DOCTYPE html>

<html>
<head>
</head>

<body>

<form name="reg" method="POST"  onsubmit="return validate()">
<h5>LOGIN FORM</h5>
<label>Username:</label><input type="text" name="uname"/><br><br>
<label>password:</label><input type="password" name="pswd"/><br><br>
<input type="submit" value="Submit" name="submit"/>
</form>

<?php

include("connection.php");
session_start();
if(isset($_POST['submit']))
{
	
$uname=$_POST['uname'];
$pswd1=md5($_POST['pswd']);

$sql="select * from registration where uname='$uname' &&  password='$pswd1'";

	$r=$conn->query($sql);
if($r->num_rows>0)
{

if($conn->query($sql)==TRUE){
	echo " <script> alert('login successful $uname'); 
	window.location='welcome.html';
	</script>";
}
else{
	echo "<script> alert('invalid login');
	window.location='login.php';
	
	</script>";
}
}
}
?>
</body>
</html>