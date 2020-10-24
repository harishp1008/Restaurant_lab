<?php
session_start();
$con=mysqli_connect('localhost','root','12345');
mysqli_select_db($con,'userregistration');
$first=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['user'];
$pass=$_POST['passw'];
$mobile=$_POST['mobile'];
$s="select * from usetable where email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
	echo"username already taken";
}
else
{
	$reg="insert into usetable(firstname,lastname,email,password,mobile) values('$first','$lastname','$email','$pass','$mobile')";
	mysqli_query($con,$reg);
	echo "Registration Successful";
}

?>