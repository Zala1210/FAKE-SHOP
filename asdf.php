
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<title> "FAKE SHOP" </title>

</head>
<body>
<div id="every">
<div class= "header"> 
<a href="index.php" class="logo">"FVKE"</a>
  <div class="header-right">
    <a class="active" href="index.php">C0LLABS</a>
	<a href="#aesthetic">VESTHETIC$</a>
	<a href="music.php">MU$IC</a>
    <a href="#reglog">REGI$TER/L0GIN</a>
  </div>
</div>
<!--OVO JE TELO -->
<div id= "box">

	<div class="head">
		<h1 style= "text-align:center"> "BEC0ME 0UR MEMBER" </h1>  
	</div>
	<div class="col-md-6">
	<h2> "L0GIN" </h2>
	<form action="validation.php" method="post">
		<div class="form-group">
			<label> Username </label>
			<input type="text" name="user" class="form-control" required>
			<div class="form-group">
			<label> Password </label>
			<input type="password" name="password" class="form-control" required>
			<label> Secret word </label>
			<input type="password" name="secrnumb" class="form-control" required><br>
			<button type="Submit" class="btn btn-primary"> Login </button>
			</form>
</div>
</div>
</div>
<div class="col-md-6">
	<h2> "REGIST3R" </h2>
	<form action="register.php" method="post">
		<div class="form-group">
			<label> Forename </label>
			<input type="text" name="forename" class="form-control" required>
			<label> Surname </label>
			<input type="text" name="surname" class="form-control" required>
			<label> Username </label>
			<input type="text" name="user" class="form-control" required>
			<div class="form-group">
			<label> Password </label>
			<input type="password" name="password" class="form-control" required>
			<label> Secret word </label>
			<input type="password" name="secrnumb" class="form-control" required>
			<br>
			<button type="Submit" class="btn btn-primary"> Register </button>
			</form>
			</div>
		</div>
	</div>
	
</div>
<!--OVO JE KRAJ TELA -->
<div id= "footer">

</div> 
</div>
</body>
</html>