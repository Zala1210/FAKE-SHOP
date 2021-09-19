<?php
session_start(); 
$con = mysqli_connect('localhost','root', '123456');
mysqli_select_db($con, 'userregistration');
	echo $_SESSION['user_id'];
    if(isset($_SESSION['user_id'])){
        $uid =$_SESSION['user_id'];
        $SQL = 
    "SELECT 
        user_id,
        name,
        password,
        realname,
        surname,
        secrnumb
    FROM
        usertable
    WHERE
        user_id = '$uid';";
    $DatabaseResult = mysqli_query($con,$SQL);
    while ($row = mysqli_fetch_assoc($DatabaseResult)){
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['realname'] = $row['realname'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['secrnumb'] = $row['secrnumb'];

    }

    header('location: shop.php');
    }
?>