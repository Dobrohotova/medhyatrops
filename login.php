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
  <link href="styles/login.css" rel="stylesheet">
  <link href="styles/header.css" rel="stylesheet">
  <link href="styles/footer.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<?php include('header.html'); ?>
	<div class="login">
		<h1>Login</h1>
		<div class="line1"></div>
		<div class="line2"></div>
		<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies, ante quis congue ultrices, tortor tellus dictum elit, eu lobortis massa elit nec enim.</h3>
	</div>
	<form action='login.php' method="post" class="form">
		<p>Email: </p>
		<input type="email" name="email" class="input">
		<p>Password:</p>
		<input type="password" name="password" class="input">
		<button type="submit" class="button">log in</button>
	</form>
	<?php include('footer.html'); ?>
</div>
</body>
</html>