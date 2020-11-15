<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('../rtx/img/ihear.png')}}" rel="icon">
    <link href="{{ asset('../rtx/css/welcome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('../vendor/custom/remixicon/remixicon.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
<header class="showcase">

    <div class="content">
      <img src="{{ asset('../rtx/img/ihear.png')}}" class="logo" style="width:100px height:100px" alt="ihear">
      <div class="title">
        {{ config('app.name')}}
      </div>
      <div class="text">
        Music App For Software Testing
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="services">
    <div class="container grid-3 center">
      <div>
        <img src="{{ asset('../rtx/img/target.png')}}" alt="logo" style="height:150px;">
        <h3>Goals</h3>
        <p>Improve Our Skills To Be A Good Personality</p>
      </div>
      <div>
      <img src="{{ asset('../rtx/img/workspace.png')}}" alt="logo" style="height:150px;">
        <h3>Make It easier</h3>
        <p>With New Fresh UI We'll make it Responsive interface</p>
      </div>
      <div>
      <img src="{{ asset('../rtx/img/github.png')}}" alt="logo" style="height:150px;">
        <h3>Sharing To Carrying</h3>
        <p>All stuff on this project we'll give you our repository</p>
        <a class="waves-effect waves-light btn" href="https://github.com/ZufarNaufal/music_app"><i class="material-icons left">assignment</i>Github</a>
      </div>
    </div>
  </section>

  <!-- About 
  <section class="about bg-light">
  <center><h3>Participants</h3></center>
    <div class="container">
      <div class="grid-2">
        <div class="center">
        <img src="{{ asset('../rtx/img/pp_2.jpg')}}" alt="image" style="width:300px; border-radius:50px 50px; box-shadow=">
        </div>
        <div>
          <h3>Heru Prunama</h3>
          <h5>Web Designer / Front-End Web</h5>
          <p>Program Studi Ilmu Komputer</p>
          <p>065118168</p>
          <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about bg-light">
    <div class="container">
      <div class="grid-2">
        <div class="center">
        <img src="{{ asset('../rtx/img/wit.jpg')}}" alt="image" style="width:300px; border-radius:50px 50px; box-shadow=">
        </div>
        <div>
          <h3>Wita Setianingsih</h3>
          <p>Program Studi Ilmu Komputer</p>
          <p>065118168</p>
          <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
        </div>
      </div>
    </div>
  </section>-->

  <section class="about bg-light">
    <div class="container">
      <div class="row">
        <div class="col 16 s12">
    <div class="card medium col-s12" style="width:300px; height:300px;">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="https://images.unsplash.com/uploads/1411419483615fdf87d0c/9a2d8cf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  </div>
</section>

  
  <!--dynamic button-->  
<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>上傳
    </a>
    <ul>
      <li><a class="btn-floating red" href="{{ url('about') }}"><i class="material-icons">info</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">create</i></a></li>
      <li><a class="btn-floating green" href="{{ url('login')}}"><i class="material-icons">exit_to_app</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li> 
    </ul>
  </div> 
        
 
  <footer class="center bg-dark">
    <p>{{ config('app.name')}} &copy; 2020</p>
    <p>For Reference, Download This Project On Github Page <a href="https://github.com/ZufarNaufal/music_app">
        <strong>Music-App-For-Software-Testing</strong></a></p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>