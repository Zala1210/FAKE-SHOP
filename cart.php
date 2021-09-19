<?php
session_start();

$con = mysqli_connect('localhost','root', '123456');

mysqli_select_db($con, 'fakeshop');
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css8.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<title> "FAKE SHOP" </title>

</head>
<body>
<div id="every">
<div class= "header"> 
<a href="cart.php"><?php 
	if(isset ($_SESSION['name'])){
		$name = $_SESSION['name'];
		echo $name;
	};	
	?></a>
  <div class="header-right">
    <a href="home.php">H0ME</a>
	<a class="active" href="shop.php">$HOP</a>
	<a href="subscription.php">$UB$CRIPTION</a>
	<a href="about.php">AB0UT</a>
    <a href="registration.php">REGI$TER</a>
	<a href="login.php">L0GIN</a>
  </div>
</div>

<form id="buy-form" action="trans.php" class='buy' method="post">
<h2>$HOPPING BAG</h2>
    <div class="table-responsive">
    <table class="table table-bordered">
    <tr>
    <th width="40%">Product Name</th>
    <th width="10%">Quantity</th>
    <th width="20%">Price Details</th>
    <th width="15%">Order Total</th>
    <th width="5%">Action</th>
    </tr>
    <?php
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>$ <?php echo $values["product_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="bag.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
            </tr>
            <?php 
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
			$_SESSION['total'] = $total;
		}
		?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
	<input type="submit" value="Buy">
	</form>
	