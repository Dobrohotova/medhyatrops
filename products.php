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
	<title>Medhyatrops</title>
	
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600,700|Raleway:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/header.css">
  <link href="styles/products.css" rel="stylesheet">
  
</head>
<body>
<div class="container">
	<?php include('header.html'); ?>
	<div class="products">
		<h1>Products</h1>
		<div class="line1"></div>
		<div class="line2"></div>
		<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies, ante quis congue ultrices, tortor tellus dictum elit, eu lobortis massa elit nec enim.</h3>
	</div>
	<div class="left">
		<div class="dreams">
			<img class="product" src="media/images/dreams.png">
		</div>
		<div class="hp">
			<img class="product" src="media/images/hp.png">
		</div>
		<div class="focus">
			<img class="product" src="media/images/focus.png">
		</div>
	</div>
	<div class="right">
		<div class="right_box">
			<h2 class="dreams_title">Dreams</h2>
			<p class="price">$10</p>
			<p class="text"><span class="dreams_span">DREAMS </span>does not contain:</p>
			<p class="text">Wheat, gluten, dairy, added sugars, artificial flavours, colours, 
sweeteners or animal products. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies, ante quis congue ultrices, tortor tellus dictum elit, eu lobortis massa elit nec enim.</p>
			<div class="be_contain">
				<p class="be">be <span class="uppercase">CALM</span></p>
				<p class="be">be <span class="uppercase">RESTFUL</span></p>
			</div>
			<p class="text">Select Quantity</p>
			
			<form action="cart.php" method="post">
				<input type="hidden" name="product" value="1">

				<div class="product-cart__number number ispin">
				     <span class="minus">&ndash;</span>
				     <input class="count" type="text" value="<?=$_SESSION['cart'][1] == 0 ? 1 :  $_SESSION['cart'][1]?>" name="quantity">
				     <span class="plus">+</span>
				</div>

				<button class="dreams_add text">Add to cart</button>
			</form>

			<!-- <div class="dreams_add"><p class="text">Add to cart</p></div> -->
		</div>
		<div class="right_box">
			<h2 class="hp_title">HP</h2>
			<p class="price">$10</p>
			<p class="text"><span class="hp_span">HP </span>does not contain:</p>
			<p class="text">Wheat, gluten, dairy, added sugars, artificial flavours, colours, 
sweeteners or animal products. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies, ante quis congue ultrices, tortor tellus dictum elit, eu lobortis massa elit nec enim.</p>
			<div class="be_contain">
				<p class="boost">BOOST ENERGY</p>
				<p class="boost">+ METABOLISM</p>
			</div>
			<p class="text">Select Quantity</p>
			
			<form action="cart.php" method="post">
				<input type="hidden" name="product" value="2">

				<div class="product-cart__number number ispin">
				     <span class="minus">&ndash;</span>
				     <input class="count" type="text" value="<?=$_SESSION['cart'][2] == 0 ? 1 :  $_SESSION['cart'][2]?>" name="quantity">
				     <span class="plus">+</span>
				</div>

				<button class="hp_add text">Add to cart</button>
			</form>


			<!-- <div class="hp_add"><p class="text">Add to cart</p></div> -->
		</div>
		<div class="right_box">
			<h2 class="focus_title">Focus</h2>
			<p class="price">$10</p>
			<p class="text"><span class="focus_span">FOCUS </span>does not contain:</p>
			<p class="text">Wheat, gluten, dairy, added sugars, artificial flavours, colours, 
sweeteners or animal products. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies, ante quis congue ultrices, tortor tellus dictum elit, eu lobortis massa elit nec enim.
</p>
			<div class="be_contain">
				<p class="be_focus">be <span class="uppercase">CLEAR</span></p>
				<p class="be_focus">be <span class="uppercase">ALERT</span></p>
			</div>
			<p class="text">Select Quantity</p>
			
			<form action="cart.php" method="post">
				<input type="hidden" name="product" value="3">
				
				<div class="product-cart__number number ispin">
				     <span class="minus">&ndash;</span>
				     <input class="count" type="text" value="<?=$_SESSION['cart'][3] == 0 ? 1 :  $_SESSION['cart'][3]?>" name="quantity">
				     <span class="plus">+</span>
				</div>

				<button class="focus_add text">Add to cart</button>
			</form>
			<!-- <div class="focus_add"><p class="text">Add to cart</p></div> -->
		</div>
	</div>

</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/quantity.js"></script>
</body>
</html>