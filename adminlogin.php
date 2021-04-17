<?php
$database ="kuiz";
$username = $_POST['username'];
$password = $_POST['password'];

$con = mysqli_connect("localhost","root","");

if(!$con){

  die("Could not connect: ". mysqli_error());
}

mysqli_select_db($con,"$database");
$query = "SELECT * FROM admin where username ='$username' and password='$password'";

$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);

mysqli_close($con);

if($count === 1){

session_start();
$_SESSION['admin'] = $username;
$_SESSION['userLogin'] = "Loggedin";

echo "<script type='text/javascript'>\n";

echo "alert('Login Successful $username');
\n";

echo"window.location.href ='add.php'";

echo "</script>";
}
else{
echo "<script type='text/javascript'>\n";

echo "alert('Invalid Username or Password..Try Again!');\n";

echo"window.location.href ='admin.php'";
echo "</script>";
}

?>