<?php
session_start();

$con = mysqli_connect('localhost','root', '123456');

mysqli_select_db($con, 'fakeshop');
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css1.css">
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
<!--OVO JE TELO -->
	<div class="container" style="width:60%;">
	<h2 align="center">"AVAILABLE NOW: "</h2>
    <?php
	if(isset ($_SESSION['name'])){
		$name = $_SESSION['name'];
	}
		
	$query = "SELECT * FROM products ORDER BY id ASC";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			?>
            <div class="col-md-3">
            <form method="post" action="bag.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="<?php echo $row["image"]; ?>">
            <h5 class="text-info"><?php echo $row["p_name"]; ?></h5>
            <h5 class="text-danger">$ <?php echo $row["price"]; ?></h5>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
            </div>
            </form>
            </div>
            <?php
		}
	}
	?>
    <div style="clear:both"></div>
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
    
    </div>
<!--OVO JE KRAJ TELA -->
<div id= "footer">

</div> 
</div>
</body>
</html>