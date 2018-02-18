<?php
$r_name=$_POST['s_name'];	
$r_email=$_POST['s_email'];
$r_pno=$_POST['s_pno'];
$r_pass=$_POST['s_pass'];
$r_age=$_POST['s_age'];


$conn = mysqli_connect('localhost', 'root' , '', 'healthbuddy');
if(!$conn)
	die("error!");
$sql = "select * from patient where email='$r_email' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>=1){
	echo "	<!DOCTYPE html>
			<html>
			<body>
			<script> 
			 	window.alert('Email Id already exists');
			</script>
			</body>
			</html>";

	include("index.php");
}
else {
	$sql = "insert into patient values('$r_name' , '$r_age' , '$r_email' , '$r_pass' , '$r_pno')";
	$result = mysqli_query($conn,$sql);
	echo "<!DOCTYPE html>
			<html>
			<body>
			<script> 
			 	window.alert('Registration Successful');
			</script>
			</body>
			</html>";
			
	header("location:index.php");

	}
?>
