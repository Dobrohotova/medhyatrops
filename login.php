<?php
session_start();

$config = 'mysql:host=127.0.0.1;dbname=login';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);


if (isset($_POST['email']) && $_POST['password']) {
	$post_mail = trim(strip_tags($_POST['email']));
	$vemail = filter_var($post_mail, FILTER_VALIDATE_EMAIL);
	$post_password = trim(strip_tags($_POST['password']));

	if(strlen($post_password) > 0 && $vemail){
		$sql = 'select * from users where email = :email and password = :password'; 
		$table_query = $db->prepare($sql);
		$table_query->bindValue(':email', $vemail);
		$table_query->bindValue(':password', $post_password);
		$table_query->execute();
		$table_res = $table_query->fetchAll(PDO::FETCH_ASSOC);	

		if (count($table_res) > 0) {
			echo "Successful Log in";
			$_SESSION['logged in'] = true;
			$_SESSION['user_email'] = $table_res[0]['email'];
			$_SESSION['user_id'] = $table_res[0]['id'];

			header('location: admin.php');
		} else {
			header('location: login.php');
		//echo "Unsuccessful Log in";
		}	
	}
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
  <link href="styles/login.css" rel="stylesheet">
  <link href="styles/header.css" rel="stylesheet">
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
		<input type="email" name="email" class="input">
		<input type="password" name="password" class="input">
		<button type="submit" class="button">log in</button>
	</form>
</div>
</body>
</html>