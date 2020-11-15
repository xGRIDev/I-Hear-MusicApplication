<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="icon" href="{{ asset('../rtx/img/icon.ico')}}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('../rtx/css/fonts.min.css') }}"/>
    <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aside.css') }}">
    <link rel="stylesheet" href="{{ asset('css/player.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{--<script src="https://www.gstatic.com/firebasejs/5.8.1/firebase.js"></script>--}}
</head>

<body>
<div class="row app-wrapper">

    <bottom id="toggle"><i class="material-icons">menu</i></bottom>
    <!-- sidebar -->
    <aside class="col-md-3 col-lg-2 col-6 col-sm-4 h-100">
        <div id="bread" class="bread pt-3">Admin</div>
        <ul class="menu pt-0">

            <li><a id="menu-songs" class="row align-items-center" href="{{ route('song.index') }}"><i class="material-icons">music_note</i>Songs</a>
            </li>
            <li><a id="menu-albums" class="row align-items-center" href="{{ route('album.index') }}"><i class="material-icons">library_music
                    </i>Albums</a></li>
            <li><a id="menu-artists" class="row align-items-center" href="{{ route('artist.index') }}"><i class="material-icons">explore</i>Artists</a>
            </li>
        </ul>
    </aside>
    <!-- end of sidebar -->

    <!-- top navbar -->
    <nav id="nav-top" class="navbar col-12 nav-top">
        <div id="search" class="offset-lg-2 offset-md-3 col-12 col-lg-10 col-md-9">
            <!-- <input id="search-input" type="text" placeholder="Search.."> -->
            <h1 id="title" style="margin-top: -7px;" class="text-center app-title">Music App (admin)</h1>
        </div>
    </nav>
    <!-- end of top navbar -->

    {{--Content Section--}}
    @yield('content')
    {{--End content section--}}

<!-- End of content Section-->

</div>

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/crud.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/playAndControl.js') }}"></script>
<script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') }}"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js') }}"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>