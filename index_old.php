<!DOCTYPE html>
<html>
<head>
  <title>Medhyatrops</title>

  <link rel="stylesheet" type="text/css" href="styles/index.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600,700|Raleway:300,400,600,700" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
  <?php include('header.html'); ?>
  <div class="slider">
      <section class="awSlider">
  <div  class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target=".carousel" data-slide-to="0" class="active"></li>
      <li data-target=".carousel" data-slide-to="1"></li>
      <li data-target=".carousel" data-slide-to="2"></li>
      <li data-target=".carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="media/images/sliderimage1.png">
      </div>
      <div class="item">
        <img src="media/images/sliderimage2.png">
      </div>
      <div class="item">
        <img src="media/images/sliderimage3.png">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    </a>
  </div>
  </section>
  
  </body>
  </html>