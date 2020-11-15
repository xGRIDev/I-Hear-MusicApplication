<!--
    DESIGNED BY - RTX - FALL
-->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>{{ config('app.name')}}</title>

  <link href="../vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../rtx/css/rtx-bio2.css" rel="stylesheet">
  <link href="../rtx/css/custom.css" rel="stylesheet">
  <link href="../fontawesome/css/solid.css" rel="stylesheet">
  <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">

  <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 10px 0 4px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="{{ url('music_front')}}">{{ config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <hr>
      <a class="btn btn-outline-success" href="{{ url('register') }}" role="button">
        <i class="fas fa-user-plus"></i>Sign Up</a>
        <hr>
        <a href="{{ url('music_front') }}" class="btn btn-outline-info" role="button">
          <i class="fas fa-home">
              Music home
              </i>
            </a>
            <hr>
       <button onclick="document.getElementById('id01').style.display='block'" a class="btn btn-outline-primary ml-3" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate"  method="POST" action="{{ route ('login') }}">
  @csrf
  @include('sweet::alert')
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../rtx/img/boy-3.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

      <label for="psw"><b>Password</b></label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw ml-3">Forgot <a href="#">password?</a></span>
      <span class="register">Don't Have Account ?<a href="{{ route('register') }}"> Register Here</a></span>
    </div>
  </form>
</div>
    </nav>
  </header>

  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../rtx/img/wss.jpg" class="img-fluid" alt="Responsive image">
          <div class="container">
            <div class="carousel-caption text-center">
              <h1>Hi, I'm Zufar Mahasin Naufal </h1>
              <p>I was Born in westjava which grow city it was called Bandung (Paris Van Java) at 21 august 1998 </p>
              <p><a class="btn btn-lg btn-primary" href="" role="button">Back to Main</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../rtx/img/bmth1.jpg" class="img-fluid" alt="Responsive image">
          <div class="container">
            <div class="carousel-caption">
              <h1> 065118167 </h1>
              <p>NIM / NPM </p>
            </div>
          </div>
        </div>
        
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

 
    <div class="container marketing">

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Make your vibes is well<span class="text-muted"> </span></h2>
          <p class="lead">With our app you can also searching your own music favorite</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="../rtx/img/mitch.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h4 class="featurette-heading">Why did you choose Music also programming ? And What a kind music of yours?</h4>
          <span class="text-muted">
            <p class="lead">"They are both are same. the concept are similar which mean implemented & deploying with your project"</p>
          </span>
        </div>
        <div class="col-md-7 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="../rtx/img/bg.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Did You have A Group Music ?</h2>
          <p class="lead">"Sure, I Got A band which called Laravel... Haha yeah sounds like framework don't you. I'd started band since 2018,
            with a couple friend another class in my college, and the band genre is a ROCK / POST-HARDCORE in couple weeks we've start to writing music"</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="../rtx/img/mitch.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">


    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!--<script>
    window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js">
  </script>')</script>
  <!--<script src="../../assets/js/vendor/popper.min.js"></script> -->
  <script src="../vendor/bootstrap/assets/js/vendor/popper.min.js"></script>
  <script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="../vendor/bootstrap/assets/js/vendor/holder.min.js"></script>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>

</html>