<!DOCTYPE html>
<html>
<head>
	<title >ICE</title>
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
<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Contact Us</h2>
      </div>
      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="user" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Email Id</label>
            <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Mobile No</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Comment</label>
            <textarea class="form-control" name="comment"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
</section>
</body>
<div class="jumbotron">
</div>
<footer>
  <p class="p-3 text-black text-center">Copyright 2020 by @Iroko_Consolidated_Enterprises. All Rights Reserved.</p>
</footer>
</html>