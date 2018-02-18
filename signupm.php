<?php
$r_sname=$_POST['s_name'];	
$r_oname=$_POST['s_oname'];
$r_email=$_POST['s_email'];
$r_pass=$_POST['s_pass'];
$r_pin=$_POST['s_pin'];
$r_pno=$_POST['s_pno'];


$conn = mysqli_connect('localhost', 'root' , '', 'healthbuddy');
if(!$conn)
	die("error!");
$sql = "select * from medicalshop where email='$r_email' ";
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
	$sql = "insert into medicalshop values('$r_sname' , '$r_oname' , '$r_email' , '$r_pass' , '$r_pin', '$r_pno')";
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
