<?php
session_start();

$con= mysqli_connect("localhost" , "root" , "", "kuiz") or die("could not connect to database");
if(isset($_POST['signup'])){
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$password2 = mysqli_real_escape_string($con, $_POST['password2']);
	$query2 = "SELECT username FROM user where username = '$username'";
	$result = mysqli_query($con,$query2);
	if (mysqli_num_rows($result) > 0){
	echo "<script type='text/javascript'>\n";
	echo "alert('This username is already available! Enter new username.');\n";
	echo"window.location.href = 'signup.php'";
	echo "</script>";
	die();
}

	else if($password==$password2){
		
		$sql = "INSERT INTO user (id , username , email , password) VALUES (NULL , '$username' ,'$email', '$password')";
		mysqli_query($con , $sql) or die(mysqli_error($con));
		echo "<script type='text/javascript'>\n";
		echo "alert('Account created!');\n";
		echo"window.location.href = 'signin.php'";
		echo "</script>";
		
	}
	else{
		echo "<script type='text/javascript'>\n";
		echo "alert('Password does not match!');\n";
		echo"window.location.href = 'signup.php'";
		echo "</script>";
	}
mysqli_close($con);
 }
 ?>