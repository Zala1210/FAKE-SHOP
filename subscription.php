
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css3.css">

	<title> "FAKE SHOP" </title>

</head>
<body>
<div id="every">
<div class= "header"> 
<a href="index.php" class="logo">"FVKE"</a>
  <div class="header-right">
    <a href="home.php">H0ME</a>
	<a href="login.php">$HOP</a>
	<a class="active" href="subscription.php">$UB$CRIPTION</a>
	<a href="about.php">AB0UT</a>
    <a href="registration.php">REGI$TER</a>
	<a href="login.php">L0GIN</a>
  </div>
</div>
<!--OVO JE TELO -->
<div id= "box">

	<form id="maii"action="subscvalid.php" method="POST" onsubmit="javascript: return validate('maii','user','password','secrnumb');">

  <div class="cont">
    <h3>$UB$CRIPTION: </h3>
	<b> Choose the paying option:<b><br>
	<select name="card" required>
	<option value="visa">VISA</option>
	<option value="paypal">PayPal</option>
	<option value="mastercard">MasterCard</option>
	</select>
	<br><br>
	<h3> NOTICE! </h3>
	<p>MONTH OF SUBSCRIPTION = $29.99</p><br>
	<b>CHOOSE FOR HOW MANY MONTHS THE SUBSCRIPTION WILL LAST: <b><br>
	
	<select name="subskr" required>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	</select><br><br>
<b>Choose subscription plan: <b><br>
	
	<select name="plan">
	<option value="10">BRONZE - $10</option>
	<option value="30">GOLD - $30</option>
	<option value="50">DIAMOND - $50</option>
	<option value="70">RUBY - $70</option>
	</select><br><br>	
	
    <input action="subscvalid.php" type="submit" value="Submit">
  </div>

</form>
	
</div>
<!--OVO JE KRAJ TELA -->
<div id= "footer">

</div> 
</div>
</body>
</html>