<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name')}}</title>
    <link href="{{ asset('../rtx/img/ihear.png')}}" rel="icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('source/font/proxima-nova-web-fonts-master/proxima-nova-web-fonts-master/fonts/fonts.min.css') }}"/>
    <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aside.css') }}">
    <link rel="stylesheet" href="{{ asset('css/player.css') }}">
    
    {{--<script src="https://www.gstatic.com/firebasejs/5.8.1/firebase.js"></script>--}}
</head>

<body>
<div class="row app-wrapper">

    <bottom id="toggle"><i class="material-icons">menu</i></bottom>
    <!-- sidebar -->
    <aside class="col-md-3 col-lg-2 col-6 col-sm-4 h-100">
        <div id="bread" class="bread pt-3">
            <img src="{{ asset('../rtx/logo/logo.png')}}" alt="logo" style="width:80px;">
        </div>
        <ul class="menu pt-0">

            <li><a id="menu-explore" class="row align-items-center active-menu" href="#"><i class="material-icons active-menu">explore</i>Explore</a></li>
            <li><a id="menu-songs" class="row align-items-center" href="#"><i class="material-icons">music_note</i>Songs</a>
            </li>
            <li><a id="menu-albums" class="row align-items-center" href="#"><i class="material-icons">library_music</i>Albums</a></li>
            <li><a id="menu-artists" class="row align-items-center" href="#"><i class="material-icons">explore</i>Artists</a>
            </li>
            
          
            <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>
            <button class="custom-btn btn-14">
                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">logout</a>
             </button>
            </li>
            <li>
            <button class="custom-btn btn-14">
            
                <a href="{{ url('song/index')}}">UpdateTrack</a>
             </button>
            </li>
        </ul>
        <li>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </li>
        
    </aside>
    <!-- end of sidebar -->

    <!-- top navbar -->
    <nav id="nav-top" class="navbar col-12 nav-top">
        
        <div id="search" class="offset-lg-2 offset-md-3 col-12 col-lg-10 col-md-9">
            <input id="search-input" type="text" placeholder="Search.."> 
            <h1 id="title" style="margin-top: -30px;" class="text-center app-title">
            

            {{ config('app.name')}}
            
                </h1>
            <!--<h3 id="title" style="margin-top: -30px;" class="text-center app-title">{{ Auth::user()->name }}</h3> -->
            </div>
        </nav>
    <!-- end of top navbar -->

    {{--Content Section--}}
    @yield('content')

    <!-- End of content Section-->

    <!-- bottom navbar -->
    <nav class="navbar col-12 nav-bottom">
        <div class="player-container row">

            <!-- artwork and now playing -->
            <div class="play-info d-flex col-3 col-md-3 my-auto">
                <div class="play-artwork p-0 m-0">
                    <span style='background-image: url("https://pbs.twimg.com/media/BMUUkWWCAAAavOH.jpg");'></span>
                </div>
                <div class="info pl-1 pr-0 m-0 my-auto px-md-2 col-12 col-md-8">
                    <a href="" class="title">
                        <p></p>
                    </a>
                    <a href="" class="artist">
                        <p></p>
                    </a>
                </div>
            </div>

            <!-- control and progress -->
            <div class="play-progress col-7 col-md-7 px-0">
                <div class="control col-12 pt-1">
                    <button class="px-md-2" id="prev"><i class="material-icons">skip_previous</i></button>
                    <button class="px-sm-1 play" id="play"><i class="material-icons">play_arrow</i></button>
                    <button class="px-md-2" id="next"><i class="material-icons">skip_next</i></button>
                </div>
                <div class="row text-center">
                    <div id="startDuration" class="col-2 col-lg-1 duration">0:00</div>
                    <div class="col-8 col-lg-10 my-auto">
                        <div class="progress">
                            <input value="100" type="range" id="song-progress" class="progress-bar" role="progressbar"
                                   style="width: 0%"
                                   aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <div id="duration" class="duration col-1 col-lg-1 mx-0 px-0">0:00</div>
                </div>
            </div>

            <!-- volume -->
            <div id="volume" class="play-control col-2 col-md-2 d-flex m-auto">
                <button id="volume-icon"><i class="material-icons">volume_up</i></button>
                <div id="volume-bar" class="col-7 col-md-9 my-auto .player">
                    <div>
                        <!-- <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div> -->
                        <input id="volume-input" type="range" min="1" max="100" value="100">
                    </div>
                </div>
            </div>
        </div>

    </nav>
<!-- end of bottom navbar -->
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/playAndControl.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') }}"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js') }}"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
@include('page.ajax')
</body>

</html>