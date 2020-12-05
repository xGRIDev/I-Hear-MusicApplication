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
         <div id="weekly-chart" class="">
                    <div class="row list-songs">
                        <table class="table table-hover tab-nowrap col-12">
                            <thead>
                            <tr class="col-12">
                                <th style="width: 60px;">#</th>
                                <th style="width: 40%;">Album</th>
                                <th style="width: 10%;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($albums as $album)
                                <tr src="{{ $album->url }}">
                                    <th scope="row">
                                        <div class="artwork">
                                        <span class="no-border-radius"
                                              style='background-image: url("{{ $album->album_cover }}");'></span>
                                        </div>
                                    </th>
                                    <td class="td-nowrap">{{ $album->title }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form method="POST" action="{{ route('album.destroy', $album->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><i class="fas fa-trash-alt text-danger"></i></button>
                                            </form>
                                        </div>

                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- weekly chart -->
        </div>
         
    </div>

@endsection