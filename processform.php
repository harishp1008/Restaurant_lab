<?php
$msg="";
$css_class="";
$conn=mysqli_connect('localhost','root','12345','userregistration');
if(isset($_POST['Login'])){
	echo "<pre>",print_r($_FILES['profileimage']['name']),"</pre>";
	$first=$_POST['firstname'];
$lastname=$_POST['lastname'];
$pass=$_POST['passw'];
$mobile=$_POST['mobile'];
	$email=$_POST['user'];
	session_start();
 $fname=$_POST['firstname'];
$_SESSION["fname"] = $fname;
	$profileimage=time() . '_' .$_FILES['profileimage']['name'];
	$target='images/' .$profileimage;
if(move_uploaded_file($_FILES['profileimage']['tmp_name'], $target)){
	$sql="insert into usertable(firstname,lastname,email,password,mobile,profileimage) values('$first','$lastname','$email','$pass','$mobile','$profileimage')";
	if(mysqli_query($conn,$sql)){
     $msg="Registered Successfully!";
	$css_class="alert-success";
	header('location:registrationsuccess.php');
	}else{
		#$msg="Database error: Failed";
	    $css_class="alert-danger";
header('location:registrationsuccess.php');
	}
	

}else
{
	$msg="Failed to upload to upload";
	$css_class="alert-danger";
}
	
}
?>