@extends('crud.template')

@section('content')

    <div class="app">
        <div id="content" style="overflow: auto; margin-bottom: 75px; padding-bottom: 75px;"
             class="content p-3 col-lg-10 offset-lg-2 col-md-9 offset-md-3 col-12 p-0">
            <div class="container-fluid">

                <div class="row">
                    <h1><b>Artist</b></h1>
                    <a class="btn btn-primary my-2 mx-5" href="{{ route('artist.create') }}">Add</a>
                </div>

                <ul style="overflow: scroll;" class="track-list mx-0 row">
                    @foreach($artist as $artist)

                        <li id="{{ $artist->career_name }}" class="track-card p-2">
                            <div class="artwork">
                                <span style='background-image: url("{{ $artist->image }}");'></span>
                            </div>
                            <div class="info">
                                <a href="{{ url('crud/artist/edit')}}" class="title">
                                    <p>{{ $artist->career_name }}</p>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection