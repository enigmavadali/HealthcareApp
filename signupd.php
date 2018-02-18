<?php
$r_name=$_POST['s_name'];
$r_email=$_POST['s_email'];
$r_pno=$_POST['s_pno'];
$r_pass=$_POST['s_pass'];
$r_cname=$_POST['s_cname'];
$r_rno=$_POST['s_regno'];
$r_yrs=$_POST['s_yrs'];
$r_img=$_POST['s_img'];

$conn = mysqli_connect('localhost', 'root' , '', 'healthbuddy');
if(!$conn)
	die("error!");
$sql = "select * from doctor where regno='$r_rno' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>=1){
	echo "	<!DOCTYPE html>
			<html>
			<body>
			<script> 
			 	window.alert('Registration number already exists');
			</script>
			</body>
			</html>";

	include("index.php");
}
else {
	$sql = "insert into doctor values('$r_email' , '$r_pass' , '$r_name' , '$r_rno' , '$r_cname' , '$r_pno' , '$r_yrs', '$r_img')";
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
