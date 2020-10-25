<!DOCTYPE html>
<html>
<head>
	<title>ICE</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Iroko Consolidated Enterprises</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--Carosoul-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Image8.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/d3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--Carousel  Ended-->
<!--About Us Section-->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
			<img src="images/profimg.jpg" class="img-fluid profimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">Uko Oji</h2>
			<p class="py-5">paragraph paragraph paragraph placeholder placeholder placeholder</p>
			<a href="about.php" class="btn btn-success">Check more</a>
		</div>
	</div>
		
	</div>
</section>
	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Our Services</h2>
			</div>
		<div class="container-fluid">
			<div class="row">
			 <div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/7.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Dry</h4>
				    <p class="card-text">Some example text.</p>
				    <a href="contact.php" class="btn btn-primary">Ask Price</a>
				</div>
			</div>	
		</div>
		<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/5.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Dry</h4>
				    <p class="card-text">Some example text.</p>
				    <a href="contact.php" class="btn btn-primary">Ask Price</a>
				</div>
			</div>	
		</div>			
		<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/19.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Dry</h4>
				    <p class="card-text">Some example text.</p>
				    <a href="contact.php" class="btn btn-primary">Ask Price</a>
				</div>
			</div>	
		</div>						
	</div>
</div>
</section>




<!--Script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<footer>
  <p class="p-3 text-black text-center">Copyright 2020 by @Iroko_Consolidated_Enterprises. All Rights Reserved.</p>
</footer>
</html>