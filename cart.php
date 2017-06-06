<?php 
session_start();

if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array(
		1 => 0,
		2 => 0,
		3 => 0,
	);

}

if(isset($_POST['product'])){
	$_SESSION['cart'][$_POST['product']] = $_POST['quantity'];
}

$images = array(
	1 => 'dreamssmall.png',
	2 => 'hpsmall.png',
	3 => 'focussmall.png'
);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Irina Dobrohotova">
	<meta name="description" content="Irina Dobrohotova">
	<meta name="keywords" content="Medhyatrops">
	<meta name="viewport" content="">
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600,700|Raleway:300,400,600,700" rel="stylesheet">
	<title>Medhyatrops</title>
  <link href="styles/cart.css" rel="stylesheet">
  <link href="styles/header.css" rel="stylesheet">
  <link href="styles/footer.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<?php include('header.html'); ?>
	<div class="cart">
		<h1>Cart</h1>
		<div class="line1"></div>
		<div class="line2"></div>
		<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies, ante quis congue ultrices, tortor tellus dictum elit, eu lobortis massa elit nec enim.</h3>
	</div>
	<div class="cart_container">
		<table class="table1">
			<tr>
				<th></th>
				<th></th>
				<th>Product</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
			<?php 
				foreach($_SESSION['cart'] as $k => $p){ 
					if($p != 0){
			?>
			<tr>
				<td class="texttable x">&times</td>
				<td><img src="media/images/<?=$images[$k];?>"></td>
				<td class="texttable">Dreams</td>
				<td class="texttable">$10</td>
				<td><form action="cart.php" method="post">
				<input type="hidden" name="product" value="1">

				<div class="product-cart__number number ispin">
				     <span class="minus">&ndash;</span>
				     <input class="count" type="text" value="<?=$_SESSION['cart'][$k] == 0 ? 1 :  $_SESSION['cart'][$k]?>" name="quantity">
				     <span class="plus">+</span>
				</div>
			</form></td>
				<td class="texttable">$<?=$_SESSION['cart'][$k] == 0 ? 10 : $_SESSION['cart'][$k] * 10?></td>
			</tr>
			<?php 
				}
			} 
			?>
		</table>
		<div class="table2_container">
			<p class="table2_h">Cart Totals</p>
			<table class="table2">
				<tr>
					<th>Subtotal</th>
					<td class="texttable">
						$<?php
							$subtotal = 0;
							foreach($_SESSION['cart'] as $p){
								$subtotal += $p;
							}
							echo $subtotal * 10;
						?>
					</td>
				</tr>
				<tr>
					<th>Shipping</th>
					<td class="texttable">$15</td>
				</tr>
				<tr>
					<th>Total</th>
					<td class="texttable">$<?=$subtotal*10+15?></td>
				</tr>
			</table>
			<button type="submit" class="button">Proceed to Checkout</button>
		</div>
	</div>
	<?php include('footer.html') ?>
</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/quantity.js"></script>
	<script>
		var ispins = document.querySelectorAll('.ispin input');
		// console.log(ispins);

		for(var i = 0; i < ispins.length; i++){
			ispins[i].addEventListener('keyup', function(e){
				console.log(this.value);
			});

			ispins[i].addEventListener('change', function(e){
				console.log(this.value);
			});
		}
	</script>
</body>
</html>