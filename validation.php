<?php
session_start();
$con = mysqli_connect('localhost','root', '123456');

mysqli_select_db($con, 'fakeshop');

$name = $_POST['user'];
$pass = $_POST['password'];
$secrnumb = $_POST['secrnumb'];

$s = " select * from usertable where name = '$name' && password = '$pass' && secrnumb = '$secrnumb'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['name'] = $name;
	header('location:shop.php');
	
}else{
	echo "Invalid credentials <br>";
	echo "<a href='login.php'> Click here to go back </a>";
	
}



?>
