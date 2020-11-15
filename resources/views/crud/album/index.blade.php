@extends('crud.template')

@section('content')

    <div class="app">
        <div id="content" style="overflow: auto; margin-bottom: 75px; padding-bottom: 75px;"
             class="content p-3 col-lg-10 offset-lg-2 col-md-9 offset-md-3 col-12 p-0">

            <div class="row">
                <h1><b>Album</b></h1>
                <a class="btn btn-primary my-2 mx-3" href="{{ route('album.create') }}">Add</a>
            </div>


            <ul style="overflow: scroll;" class="track-list mx-0 row">
                @foreach($albums as $album)

                    <li id="{{ $album->title }}" class="track-card p-2">
                        <div class="artwork">
                            <span style='background-image: url("{{ $album->album_cover }}");'></span>
                        </div>
                        <div class="info">


                            <a href="" class="title">
                                <p>{{ $album->title }}</p>
                            </a>

                            <a href="" class="artist">
                                <p>
                                    @foreach ($artists as $artist)
                                        @if ($album->artist_id == $artist->id)
                                            {{ $artist->career_name }}
                                        @endif
                                    @endforeach
                                </p>
                            </a>

                        </div>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>

@endsection