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
  <script type="text/javascript" src="scripts/slider.js"></script>

	
</head>
<body>
<div class="container">
	<?php include('header.html'); ?>

  <div class="carousel">
    <div class="carousel-inner">
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item">
            <img class="mySlides" src="media/images/sliderimage1.png">
            <div class="carouselDivCloser">
              <p></p>
              <p></p>
              <div><span></span></div>
            </div>
        </div>
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
            <img class="mySlides" src="media/images/sliderimage2.png">
            <div class="carouselDivCloser">
              <p></p>
              <p></p>
              <div><span></span></div>
            </div>
        </div>
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
            <img class="mySlides" src="media/images/sliderimage3.png">
            <div class="carouselDivFurther">
              <p></p>
              <p></p>
              <div><span></span></div>
            </div>
        </div>
        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
        <label for="carousel-2" class="carousel-control next control-1">›</label>
        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
        <label for="carousel-3" class="carousel-control next control-2">›</label>
        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
        <label for="carousel-1" class="carousel-control next control-3">›</label>
        <ol class="carousel-indicators">
            <li>
                <label for="carousel-1" class="carousel-bullet">•</label>
            </li>
            <li>
                <label for="carousel-2" class="carousel-bullet">•</label>
            </li>
            <li>
                <label for="carousel-3" class="carousel-bullet">•</label>
            </li>
        </ol>
    </div>
  </div>





	<div class="products">
		
	</div>
	<div class="benefits">
		
	</div>
	<div class="articles">
		
	</div>
	<div class="testemonials">
		
	</div>
	<!-- <?php include('footer.html'); ?> -->

  </div>
</body>
</html>