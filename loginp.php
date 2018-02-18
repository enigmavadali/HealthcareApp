<?php

session_start();
$l_uname=$_POST['l_uname'];
$l_pass=$_POST['l_pass'];

$conn = mysqli_connect('localhost','root','','healthbuddy');
$sql="select * from patient where email='$l_uname' and pass='$l_pass' ";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
{
	$_SESSION['username']=$l_uname;
	$row=mysqli_fetch_array($result);
	header("location:patient-dashboard.php");
}
else
{
	echo "	<!DOCTYPE html>
			<html>
			<body>
			<script> 
			 	window.alert('Invalid Credentials! Please Login again!!');
			</script>
			</body>
			</html>";

	include("patient-login.php");
}

	?>