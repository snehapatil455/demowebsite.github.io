<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sneha</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
          
       
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- The slideshow -->
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/work1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/work1.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/work1.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">
<div class="py-5">
<h1 class="text-center">About us</h1>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
    <img src="images/about.jpg" class="img-fluid">
    </div>

    <div class="col-lg-6 col-md-6 col-12">
    <h2 class="h2">This is Sneha</h2>
    <p class="py-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, repudiandae ab totam velit corrupti, ullam quos necessitatibus beatae inventore id maiores! Voluptate earum a aliquid eveniet modi voluptatibus praesentium dignissimos, dicta, necessitatibus obcaecati sed quidem porro repellat saepe. Blanditiis voluptas maiores, magnam cum quam voluptatibus ullam minus architecto quo at, ducimus libero neque in quos. Minima.</p>
     <a href="about.php"  class="btn btn-success"> Click Here</a>
    </div>
  </div>
</div>
</section>

<section class="my-5">
<div class="py-5">
<h1 class="text-center">Our Services</h1>
</div>

<div class="container-flulid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">

        <div class="card" >
  <img class="card-img-top" src="images/perfil.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">

        <div class="card" >
  <img class="card-img-top" src="images/perfil.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">

        <div class="card" >
  <img class="card-img-top" src="images/perfil.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        </div>

    </div>

</div>
</section>



<section class="my-5">
<div class="py-5">
<h1 class="text-center">Gallery</h1>
</div>

<div class="container-fluid m-auto">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/work2.jpg" class="img-fluid1 m-auto">

        </div>

       


    </div>

</div>
</section>

<section class="my-5">
<div class="py-5">
<h1 class="text-center">Contact Us</h1>
</div>

<div class="w-50 m-auto">
   <form method="post" action="userinfo.php" >
       <div class="form-group">
           <label > Username</label>
           <input type="text" name="user" autocomplete="off" class="form-control">

       </div>

       <div class="form-group">
           <label > Email Id</label>
           <input type="text" name="email" autocomplete="off" class="form-control">

       </div>

       <div class="form-group">
           <label > Mobile No</label>
           <input type="text" name="mobile" autocomplete="off" class="form-control">

       </div>

       <div class="form-group">
           <label > Comment</label>
          <textarea  class="form-control"  name="comment"></textarea>

       </div>

       <button type="submit" class="btn btn-success"> submit

       </button>

</form>
</div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@snehapatil</p>
</footer>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
