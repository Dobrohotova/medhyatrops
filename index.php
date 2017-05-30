<!DOCTYPE html>
<html lang="en" class="csstransforms csstransforms3d csstransitions">
<head>
	<title>Medhyatrops</title>
	<meta charset="utf-8">
	<meta name="author" content="Irina Dobrohotova">
	<meta name="description" content="Irina Dobrohotova">
	<meta name="keywords" content="Medhyatrops">
	<meta name="viewport" content="">

	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700|Raleway:300,400,600,700" rel="stylesheet">
	<link href="styles/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="plugins/slider-pro-master/dist/css/slider-pro.min.css">

	<link href="styles/index.css" rel="stylesheet">
	<link href="styles/header.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<?php include('header.html'); ?>
		<section id="main-slider" class="no-margin">
			<div class="slider-pro" id="my-slider">
				<div class="sp-slides">
					<div class="sp-slide">
						<img class="sp-image" src="media/images/sliderimage1.png"/>
						<div class="sp-layer" data-position="centerCenter" data-horizontal="-25%" data-vertical="-40%">
							<p class="sp-layer slider_naslov1">recharge</p>
							<p class="sp-layer slider_naslov2">your mind</p>
							<p class="sp-layer slider_naslovp">Health supplements for mental </p>
							<p class="sp-layer slider_naslovp p2">alertness and clarity</p>
							<a href="products.php">
								<div class="sp-layer slider_naslovbox">
									<p class="sp-layer" style="">buy now</p>
								</div>
							</a>
						</div>
					</div>

					<div class="sp-slide">
						<img class="sp-image" src="media/images/sliderimage2.png"/>
						<div class="sp-layer" data-position="centerCenter" data-horizontal="-25%" data-vertical="-40%">
							<p class="sp-layer slider_naslov1 yellow">recharge</p>
							<p class="sp-layer slider_naslov2">your mind</p>
							<p class="sp-layer slider_naslovp">Health supplements for mental </p>
							<p class="sp-layer slider_naslovp p2">alertness and clarity</p>
							<a href="products.php">
								<div class="sp-layer slider_naslovbox">
									<p class="sp-layer" style="">buy now</p>
								</div>
							</a>
						</div>
					</div>

					<div class="sp-slide">
						<img class="sp-image" src="media/images/sliderimage3.png"/>
						<div class="sp-layer" data-position="centerCenter" data-horizontal="-50%" data-vertical="-40%">
							<p class="sp-layer slider_naslov1 blue">recharge</p>
							<p class="sp-layer slider_naslov2">your mind</p>
							<p class="sp-layer slider_naslovp">Health supplements for mental </p>
							<p class="sp-layer slider_naslovp p2">alertness and clarity</p>
							<a href="products.php">
								<div class="sp-layer slider_naslovbox">
									<p class="sp-layer" style="">buy now</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="products_container">
			<div class="products">
				<h1>Products</h1>
				<div class="line1"></div>
				<div class="line2"></div>
				<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies, ante quis congue ultrices, tortor tellus dictum elit, eu lobortis massa elit nec enim.</h3>
			</div>
			<div class="products_all">
				<div class="products_ind1">
					<img src="media/images/dreamsprice.png">
					<div class="button_more">
						<a href="products.php"><p>more</p></a>
					</div>
				</div>
				<div class="products_ind2">
					<img src="media/images/hpprice.png">
					<div class="button_more">
						<a href="products.php"><p>more</p></a>
					</div>
				</div>
				<div class="products_ind3">
					<img src="media/images/focusprice.png">
					<a href="products.php">
						<div class="button_more">
							<p>more</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="benefits_container">
			<div class="benefits">
				<h1>Benefits</h1>
				<div class="line1"></div>
				<div class="line2"></div>
				<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies, ante quis congue ultrices, tortor tellus dictum elit, eu lobortis massa elit nec enim.</h3>
			</div>
			<div class="benefits_all">
				<div class="benefits_ind">
					<img src="media/images/benefit1.png">
					<p class="benefits_h">100% natural</p>
					<p class="benefits_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et justo viverra, vehicula augue eu, finibus velit. Curabitur et posuere nisi.</p>
				</div>
				<div class="benefits_ind">
					<img src="media/images/benefit2.png">
					<p class="benefits_h">holistic formulas</p>
					<p class="benefits_p">Vestibulum feugiat odio ut eros molestie tempor. Quisque accumsan nunc in nisl suscipit laoreet vitae at felis. </p>
				</div>
				<div class="benefits_ind">
					<img src="media/images/benefit3.png">
					<p class="benefits_h">premium ingredients</p>
					<p class="benefits_p">Proin odio turpis, pharetra vitae lorem vel, mattis aliquam magna. Curabitur venenatis vestibulum massa in viverra.</p>
				</div>
			</div>
		</div>
		<div class="articles">
			
		</div>
		<div class="testemonials">
			
		</div>
		<?php include('footer.html'); ?>
	</div>
	<script src="plugins/slider-pro-master/libs/jquery-1.11.0.min.js"></script>
	<script src="plugins/slider-pro-master/dist/js/jquery.sliderPro.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#my-slider').sliderPro({
				width: '100%',
				height: 840,
				arrows: true,
				buttons: false,
				waitForLayers: false,
				fade: false,
				autoplay: true,
				autoScaleLayers: false
			});
		});
	</script>
</body>
</html>