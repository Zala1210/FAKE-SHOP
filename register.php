<?php
session_start();

$con = mysqli_connect('localhost','root', '123456');

mysqli_select_db($con, 'fakeshop');

$name = $_POST['user'];
$pass = $_POST['password'];
$realname = $_POST['forename'];
$surname = $_POST['surname'];
$secrnumb = $_POST['secrnumb'];

$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "Username is already in use! <br>";
	echo "<a href='login.php'> Click here to go back </a>";
}else{
	$reg = " insert into usertable(name,password,realname,surname,secrnumb) values ('$name', '$pass', '$realname', '$surname','$secrnumb')";
	mysqli_query($con, $reg);
	echo " Registration was successful";
}



?>
