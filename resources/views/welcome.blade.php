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
        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="80%" viewBox="0 0 1014.536 597.436"><defs><style>.a{fill:#605d82;}.b{fill:#f2f2f2;}.c{fill:none;stroke:#3f3d56;stroke-miterlimit:10;}.d{fill:#f86b75;}.e{fill:#fad375;}.f{fill:#8bcc55;}.g{fill:#6c63ff;}.h{fill:#46455b;}.i{opacity:0.1;}.j{fill:#fbbebe;}.k{fill:#a8a8a8;}.l{opacity:0.2;}.m{fill:#726f6f;font-size:30px;font-family:Roboto-Regular, Roboto;}</style></defs><g transform="translate(-133 -1509.5)"><g transform="translate(133 1509.5)"><path class="a" d="M503.734,747.032h-6.016a4.984,4.984,0,0,1-4.984-4.984V725.032h11l4.421,16.211a4.583,4.583,0,0,1-4.421,5.789Z" transform="translate(-92.734 -151.032)"/><rect class="b" width="710" height="270" rx="13.224" transform="translate(79.5 187.5)"/><rect class="c" width="962" height="523" rx="13.638" transform="translate(2.5 0.5)"/><line class="c" x2="962" transform="translate(0 37.039)"/><line class="c" x2="962" transform="translate(0 100.5)"/><circle class="d" cx="10" cy="10" r="10" transform="translate(14.5 12.5)"/><circle class="e" cx="10" cy="10" r="10" transform="translate(45.5 12.5)"/><circle class="f" cx="10" cy="10" r="10" transform="translate(76.5 12.5)"/><circle class="c" cx="10" cy="10" r="10" transform="translate(17.5 8.5)"/><circle class="c" cx="10" cy="10" r="10" transform="translate(48.5 8.5)"/><circle class="c" cx="10" cy="10" r="10" transform="translate(79.5 8.5)"/><circle class="b" cx="20" cy="20" r="20" transform="translate(205 54)"/><circle class="c" cx="20" cy="20" r="20" transform="translate(210 49)"/><rect class="g" width="99" height="27" rx="5.423" transform="translate(505 63.5)"/><rect class="g" width="99" height="27" rx="5.423" transform="translate(646 63.5)"/><rect class="c" width="99" height="27" rx="4.222" transform="translate(512 55.5)"/><rect class="c" width="99" height="27" rx="4.222" transform="translate(653 55.5)"/><rect class="c" width="710" height="270" rx="16.004" transform="translate(115.5 165.5)"/><path class="c" d="M544.636,516.122a68.2,68.2,0,1,0-78.523-110.186m32.62,31.016v-11.61l40.92,30.69-9.42,6.5" transform="translate(-92.734 -151.032)"/><path class="g" d="M502.374,394.832a68.2,68.2,0,1,0,68.2,68.2A68.2,68.2,0,0,0,502.374,394.832Zm-13.64,98.89v-61.38l40.92,30.69-40.92,30.69Z" transform="translate(-92.734 -151.032)"/><path class="h" d="M475.833,581.736s-12.249,42.606-12.782,61.246-2.663,48.464-1.065,55.92,6.391,22.368,6.391,22.368,10.119-12.249,13.847-5.326c0,0-.533-14.38-3.2-18.64,0,0,1.065-22.368,1.065-30.357s13.314-44.736,14.379-45.269,4.261,10.119,1.6,33.552-4.793,64.453-4.793,68.714,6.391,12.782,10.651,10.119,6.923-25.575,6.923-25.575,3.728-47.932,5.858-53.258,13.314-66.572,4.793-71.365S475.833,581.736,475.833,581.736Z" transform="translate(-92.734 -151.032)"/><path class="a" d="M484.887,720.206c-.533,2.13-2.663,12.249-2.663,15.445s2.13,9.054-6.923,11.184c-8.819,2.077-7.531-3.43-8.937-6.668-.037-.085-.075-.17-.117-.256-1.6-3.2,2.13-19.705,2.663-19.705.313,0,2.832-4.228,4.857-7.716a5.663,5.663,0,0,1,8.791-1.33,8.693,8.693,0,0,1,2.644,6.277,10.7,10.7,0,0,1-.314,2.769Z" transform="translate(-92.734 -151.032)"/><path class="i" d="M484.887,720.206c-.533,2.13-2.663,12.249-2.663,15.445s2.13,9.054-6.923,11.184c-8.819,2.077-7.531-3.43-8.937-6.668,1.529-3.973,5.241-12.51,7.871-19.961,2.322-6.583,8.031-4.436,10.966-2.769a10.7,10.7,0,0,1-.314,2.769Z" transform="translate(-92.734 -151.032)"/><circle class="j" cx="11.184" cy="11.184" r="11.184" transform="translate(396.414 325.787)"/><path class="j" d="M491.278,490.133l-1.6,17.575,19.173,3.2s-2.13-15.445-.533-18.64S491.278,490.133,491.278,490.133Z" transform="translate(-92.734 -151.032)"/><path class="a" d="M506.19,503.98s-15.977-1.6-17.042,0a9.151,9.151,0,0,0-1.065,4.261s-6.391,2.663-7.456,1.6-2.13-4.261-5.326-3.2-9.586,20.238-9.586,20.238,1.6-5.858,4.261,16.51,2.13,36.215,2.663,37.813-2.663,11.184,16.51,11.184,33.02-1.065,33.02-4.793-3.2-19.705,0-31.422,7.989-27.694,7.989-27.694l-6.391-20.77s-6.391-1.6-7.989,1.065-5.858,2.13-5.858,2.13S509.385,504.512,506.19,503.98Z" transform="translate(-92.734 -151.032)"/><path class="a" d="M475.833,507.708l-13.314-5.858s-25.031-19.173-23.966-36.215c0,0-8.521-7.989-9.054.533s2.13,27.694,8.521,34.085,28.227,26.629,31.422,27.161S475.833,507.708,475.833,507.708Z" transform="translate(-92.734 -151.032)"/><path class="j" d="M430.564,467.232S420.445,439.538,429.5,440.6s6.923,12.782,6.923,12.782v13.847Z" transform="translate(-92.734 -151.032)"/><path class="a" d="M521.634,508.773l13.314-5.858s25.031-19.173,23.966-36.215c0,0,8.521-7.989,9.054.533s-2.13,27.694-8.521,34.085-28.227,26.629-31.422,27.161S521.634,508.773,521.634,508.773Z" transform="translate(-92.734 -151.032)"/><path class="j" d="M566.9,468.3s10.119-27.694,1.065-26.629-6.923,12.782-6.923,12.782V468.3Z" transform="translate(-92.734 -151.032)"/><path class="h" d="M508.853,474.688l1.6-1.065s-10.119-5.858-14.379-2.663-5.326,5.858-6.391,6.923-3.728,6.923-2.13,9.054,1.065,2.567,2.13,4.479-1.861,9.6,6.259,11.883,14.511-7.308,15.576-9.438S516.309,477.351,508.853,474.688Z" transform="translate(-92.734 -151.032)"/><path class="h" d="M917.9,625.223c0,58.96,36.989,106.67,82.7,106.67" transform="translate(-92.734 -151.032)"/><path class="g" d="M1000.6,731.893c0-59.623,41.277-107.869,92.288-107.869" transform="translate(-92.734 -151.032)"/><path class="g" d="M947.86,630.568c0,56.006,23.587,101.325,52.736,101.325" transform="translate(-92.734 -151.032)"/><path class="h" d="M1000.6,731.893c0-76.185,47.71-137.832,106.67-137.832" transform="translate(-92.734 -151.032)"/><path class="k" d="M983.2,732.645s11.728-.361,15.263-2.878,18.041-5.522,18.918-1.486,17.625,20.076,4.384,20.183S991,746.4,987.469,744.253,983.2,732.645,983.2,732.645Z" transform="translate(-92.734 -151.032)"/><path class="l" d="M1022,747.059c-13.241.107-30.766-2.062-34.294-4.211-2.687-1.637-3.757-7.509-4.115-10.218-.248.011-.392.015-.392.015s.743,9.459,4.271,11.608,21.053,4.318,34.294,4.211c3.822-.031,5.142-1.391,5.07-3.4C1026.3,746.276,1024.84,747.036,1022,747.059Z" transform="translate(-92.734 -151.032)"/><line class="c" x2="237" transform="translate(275 596)"/><line class="c" x2="74" transform="translate(876.888 596.479)"/></g><text class="m" transform="translate(675 1686)"><tspan x="123.732" y="31">Interactive UI</tspan></text></g></svg>
        <h3><p class="center">Welcome, Hope u having a good day</p></h3>
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