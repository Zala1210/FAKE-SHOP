
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css1.css">

	<title> "FAKE SHOP" </title>

</head>
<body>
<div id="every">
<div class= "header"> 
<a href="index.php" class="logo">"FVKE"</a>
  <div class="header-right">
    <a href="index.php">H0ME</a>
	<a href="login.php">$HOP</a>
	<a class="active" href="subscription.php">$UB$CRIPTION</a>
	<a href="about.php">AB0UT</a>
    <a href="registration.php">REGI$TER</a>
	<a href="login.php">L0GIN</a>
  </div>
</div>
<!--OVO JE TELO -->
<div id= "box">
	<h2> <b><u>INF0RMATI0N AB0UT THE $UB$CRIPTION: </u></b></h2>
<?php
		session_start();
		$con = mysqli_connect('localhost','root', '123456');

		mysqli_select_db($con, 'fakeshop');
		$user = $_SESSION['name'];
		$SQL = "select * from usertable where name = '$user'";
		$result = mysqli_query($con,$SQL);
		while ($row = mysqli_fetch_assoc($result)){
			$user_id = $row['user_id'];
			
		}
		$card = $_POST['card'];
		$subskr = $_POST['subskr'];
		$plan = $_POST['plan'];
		
		$subpric = $subskr * 29.99 + $plan;
		$dinar = $subpric * 106.70;
		echo "<b>Username: </b>" . $user;
		echo '<br>';
		echo "<b>Chosen card: </b>" . $card;
		echo '<br>';
		echo "<b>Subscription duration: </b>" . $subskr . " months";
		echo'<br>';
		echo "<b>Subscription fee: </b>" . "$" . $subpric. "( " . $dinar . "RSD )";
		echo'<br>';
		echo "<b>Time of transaction: </b>"; 
		$dateoftrans = date("[H:i] - [d/M/Y]"); 
		echo $dateoftrans;
		echo '<br>';
		echo "<b>Unique 6 digit product number: </b>";
		echo "<b><u>" .rand(100000, 999999). "</u></b>";
		echo '<br>';
		echo "<hr>";
		echo $user . "<b> please save your product number and</b>";
		$sub = " insert into subscription(user_id, time) values ('$user_id', '$dateoftrans')";
		mysqli_query($con, $sub);
		
	
		?>
		<a href="home.php"> return to homepage. </a>
	
</div>
<!--OVO JE KRAJ TELA -->
<div id= "footer">

</div> 
</div>
</body>
</html>