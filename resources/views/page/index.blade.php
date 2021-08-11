@extends('layouts.template')

@section('content')

    <div class="app">
        <div id="content" style="overflow: auto; margin-bottom: 75px; padding-bottom: 75px;"
             class="content p-3 col-lg-10 offset-lg-2 col-md-9 offset-md-3 col-12 p-0">
    
    <button class="custom-btn btn-14">
            <a href="{{ url('user/profile') }}">My Profile</a></button>
            <img class="rounded-circle" src="/storage/avatars/{{ $users->avatar }}" style="width:80px; height:65px;" alt="me"/>
   
            <div class="jumbotron mt-5" style="background-image: url('../rtx/img/bc.jpg'); background-size:cover;">
                <h1 class="display-4">{{ config('app.name')}}</h1>
                    <p class="lead">Always Make Your Day Is Well.</p>
                        <hr class="my-4">
                     <p>More Info About This App, Click button on button below</p>
                <a class="btn btn-primary btn-lg" href="{{ url('about') }}" role="button">Learn more</a>
            </div>
         
            
          

  
            <!-- <div>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                     <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>
                        logout
                    </a>
                </div>-->
            <!-- explore artist -->
            @include('page.explore.explore_page')
            <!-- end of explore artist -->

            <!-- songs artist -->
            {{--@include('page.song_page')--}}
            <!-- end of songs artist -->

            <!-- album artist -->
            {{--@include('page.album_page')--}}
            <!-- end of album artist -->

            <!-- sample album-info Page -->
            {{--@include('page.album.sample_album_page')--}}
            <!-- end of sample album-info Page -->

            <!-- artists artist -->
            {{--@include('page.artist_page')--}}
            
            <!-- end of artists artist -->
            {{--@include('user.template')--}}
            
            {{--artists-song page--}}
            {{--@include('page.artist.sample_artist_page')--}}
            {{--end of artist-song page--}}

        </div>
    </div>


@endsection