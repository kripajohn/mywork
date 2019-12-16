<?php
include("connection.php");
session_start();
$uname=$_POST['uname'];
$name=$_POST['name'];
$phn=$_POST['phn'];
$email=$_POST['email'];
$pswd1=md5($_POST['pswd']);
$pswd2=$_POST['cpswd'];
	
	if($_POST['pswd']==$_POST['cpswd'])
	{
		
		echo "same";
	}
	else
	{
		echo "incorrect";
	}
if(isset($_POST['submit']))
{
	
	 echo "<h1>WELCOME $name </h1>";
	 if ((isset($_POST['uname'])) and (isset($_POST['name']))and (isset($_POST['phn'])) and (isset($_POST['email']))and (isset($_POST['pswd']))) 
	{
		$sql1="select * from registration where email='$email'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "Email or Username already exist, try something else.";
        }
		else{
			
 $sql="insert into registration(uname,name,email,password,phnum)values('$uname','$name','$email','$pswd1','$phn')";
 $s=$conn->query($sql);
		}
		}
 if($conn->query($sql)==TRUE){
	 echo " <script>
	 window.location='login.php';
	 </script>";
     }
	 else{
		 echo " <script>alert('registration error');
		 window.location='index.html';
		 </script>";
	 }


}	
/*print_r($_REQUEST);*/
/*print_r($_POST);*/

?>