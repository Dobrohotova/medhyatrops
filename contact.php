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
  <link href="styles/contact.css" rel="stylesheet">
  <link href="styles/header.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<?php include('header.html'); ?>
	<div class="contact">
		<h1>Contact</h1>
		<div class="line1"></div>
		<div class="line2"></div>
		<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies, ante quis congue ultrices, tortor tellus dictum elit, eu lobortis massa elit nec enim.</h3>
	</div>
	<div class="content_holder">
		<div class="contact_form">
			<form action='form.php' method="post">
				<p>Your Name*</p>
				<input type="text" name="name">
				<p>Your Email*</p>
				<input type="email" name="email">
				<p>Phone*</p>
				<input type="number" name="phone">
				<p>Message*</p>
				<textarea></textarea>
				<button class="btn-2" type="submit">SUBMIT</button>
	</form>
		</div>
		<div class="right_info">
			<h4>Get in Touch</h4>
			<p class="paragraf">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum, ipsum ac varius laoreet, turpis nunc tristique lectus, sit amet cursus magna ante a sapien. Donec eu turpis id ligula malesuada faucibus in ut nibh. In mattis consectetur velit a consectetur. Suspendisse egestas ex quis hendrerit pulvinar. Phasellus auctor efficitur aliquam. Donec eget aliquam lectus. Duis dictum condimentum ipsum, ac fringilla justo efficitur sed. </p>
			<h4 class="office">The Office</h4>
			<div>
				<div class="icon_holder">
					<img class="address icon" src="media/images/icons/address.png">
					<span class="bold">Address: </span><span class="text_icons">10-123 1/2 Main Street NW Montreal QC Canada</span>
				</div>
				<div class="icon_holder">
					<img class="icon" src="media/images/icons/phone.png">
					<span class="bold">Phone: </span><span class="text_icons">+1-202-555-0198</span>
				</div>
				<div class="icon_holder">
					<img class="icon" src="media/images/icons/email.png">
					<span class="bold">Email: </span><span class="text_icons">medhyatrops@gmail.com</span>		
				</div>
			<h4 class="social">Social Media</h4>
			<div class="image_holder">
				<img src="media/images/icons/fb.png">
				<img src="media/images/icons/twitter.png">
				<img src="media/images/icons/linkedin.png">
			</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>