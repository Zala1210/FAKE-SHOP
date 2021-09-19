<html>
<body>
<div id="Box">
<?php
session_start();

$con = mysqli_connect('localhost','root', '123456');

mysqli_select_db($con, 'fakeshop');
    //session_start();
    $maxOrder_id_SQL = "SELECT COUNT(order_id) as max FROM orders";
    $result = mysqli_query($con, $maxOrder_id_SQL);
    while($row = mysqli_fetch_assoc($result)){
        $maxOrder_id= $row['max'];
    }
    $list = $_SESSION["cart"];
    $user_id = $_SESSION['user_id'];
    $counter = count($_SESSION["cart"]);
	$total = $_SESSION['total'];
    $currentOrder_id = $maxOrder_id+1;
    $counter2 = 0;
        $Insert_order_SQL = "INSERT INTO orders (order_id, user_id)
        VALUES ($currentOrder_id,$user_id)";

    $sum = 0;
	?>


            <p>Transaction Information: </p>
            <div class="alert alert-success">
                <strong>Success!</strong>
            </div>
            <dl class="dl-horizontal">
                <dt>Order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID:</dt>
                <dd><?php echo $currentOrder_id; ?></dd>


                <dt>Order&nbsp;&nbsp; Date:</dt>
                <dd><?php


                    echo date("d/m/Y");

                ?>
                </dd>
				<dt>Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
				<dd>$<?php echo $total; ?></dd>
                <dt>Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd>Success</dd>

                <dt>&nbsp;&nbsp; <b>Continue shoping</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</dt>
                <dd><a href="home.php"> HOME</a></dd>


            </dl>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js%22%3E</script>

<style>
        #Box {
            border: 1px solid red;
            width:400px;
            margin-left: 40%;
            margin-top: 10%;
        }

        p {
            width:200px;
            margin-left: 40%;
            display: block;
        }

        dl dt {
            margin-left: 0;
        }
</style>
</body>
</html>