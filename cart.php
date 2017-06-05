<?php 
session_start();

if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array(
		1 => 0,
		2 => 0,
		3 => 0,
	);
}

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
		<?php 

		// print_r($_POST);

		if(isset($_POST['product'])){
			$_SESSION['cart'][$_POST['product']] = $_POST['quantity'];
		}

		print_r($_SESSION['cart']);

		?>
	</div>
	<?php include('footer.html') ?>
</div>
</body>
</html>