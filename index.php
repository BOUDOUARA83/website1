<!DOCTYPE html>
<html>
<head>
    <title>Adventures Activities website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=" css/style.css">  
</head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Activities</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="booking.php">Book Now</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="registration.php">Sign up</a>
      </li>
  

    </ul>
  </div>
  </nav>

  <div id="demo" class="carousel slide" data-ride="carousel">
   
   <ul class="carousel-indicators">
 <li data-target="#demo" data-slide-to="0" class="active"></li>
 <li data-target="#demo" data-slide-to="1"></li>
 <li data-target="#demo" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
 <div class="carousel-item active">
   <img src="images/background.jpg" alt="webdev" style="width:100%;">
   <div class="carousel-caption">
       <h3>It's Adventure time!</h3>
       <p>Wakeup and challenge yourself! there is no time to waste</p>
 </div>
 <div class="carousel-item">
   <img src="images/image1.jpg" alt="webdev" style="width:100%;">
   <div class="carousel-caption">
        <h3>put in the hardwork and invest in your health</h3>
       <p>"Exercise not only changes your body,
            it changes your mind, your attitude and your mood."
           "Exercise should be regarded as a tribute to the heart."
           Good things come to those who sweat. 
           "Of all the paths you take in life, make sure a few of them are dirt."</p>
 </div>
</div>
 <div class="carsousel-item">
   <img src="images/image2.jpg" alt="webdev" style="width:100%;">
   <div class="carousel-caption">
        <h3></h3>
       <p></p>
 </div>
</div>

<a class="left carousel-control" href="#myCarousel" data-slide="prev">
 <span class="glyphicon glyphicon-chevron-left"></span>
 <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
 <span class="glyphicon glyphicon-chevron-right"></span>
 <span class="sr-only">Next</span>
</a>
</div>
</div>
<section class="my-5">
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Services</h2>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
<div class ="card" >
        <img class="card-img-top" src="images/r.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">Restraunts and cafe's</h4>
        
            <a href="booking.php" class="btn btn-primary">Book Now</a>
        </div>
    </div>
</div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class ="card" >
        <img class="card-img-top" src="images/h.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">Accomidations</h4>
            <a href="booking.php" class="btn btn-primary">Book Now</a>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class= "card" >
    <img class="card-img-top" src="images/e.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">Equipments</h4>
            <a href="booking.php" class="btn btn-primary">Book Now</a>
        </div>
    </div>
            </div>
        </div>
    </div>

</section>
<section class="my-5">
<div class="py-5">
   <h2 class="text-center">Contact Us</h2>
</div>
<div class="w-50 m-auto">
       <form action="userinfo.php" method ="post>
           <div class="form-group">
               <label>Username</label>
               <input type="text" name="user" autocomplete="off" class="form-control">
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method ="post>
<div class="form-group">
               <label>Email id</label>
               <input type="text" name="email" autocomplete="off" class="form-control">
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method ="post>
<div class="form-group">
               <label>Mobile Number</label>
               <input type="text" name="Mobile" autocomplete="off" class="form-control">
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method ="post>
<div class="form-group">
               <label>Comments</label>
               <textarea class="form-control" name="comment"></textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>
       </form>
</div>
</section>
<footer>
<p class="p-3 bg-dark text-white text-center">Adventures</p>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnis.cloudflare.com/ajax/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
