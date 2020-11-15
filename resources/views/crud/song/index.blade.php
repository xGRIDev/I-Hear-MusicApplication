@extends('crud.template')

@section('content')

    <div class="app">
        <div id="content" style="overflow: auto; margin-bottom: 75px; padding-bottom: 75px;"
             class="content p-3 col-lg-10 offset-lg-2 col-md-9 offset-md-3 col-12 p-0">
            <div class="container-fluid">

                <div style="z-index: 1000">
                    @if ($errors->any())
                        <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br/>
                    @endif
                </div>

                <div class="row">
                    <h1><b>Songs</b></h1>
                    <a class="btn btn-primary my-2 mx-3" href="{{ route('song.create') }}">Add</a>
                </div>

                <!-- weekly chart -->
                <div id="weekly-chart" class="">
                    <div class="row list-songs">
                        <table class="table table-hover tab-nowrap col-12">
                            <thead>
                            <tr class="col-12">
                                <th style="width: 60px;">#</th>
                                <th style="width: 40%;">Title</th>
                                <th style="width: 20%;">Artist</th>
                                <th style="width: 20%;">Album</th>
                                <th style="width: 10%;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($songs as $song)
                                <tr src="{{ $song->url }}">
                                    <th scope="row">
                                        <div class="artwork">
                                        <span class="no-border-radius"
                                              style='background-image: url("{{ $song->album->album_cover }}");'></span>
                                        </div>
                                    </th>
                                    <td class="td-nowrap">{{ $song->title }}</td>
                                    <td>{{ $song->artist->career_name }}</td>
                                    <td>{{ $song->album->title }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form method="POST" action="{{ route('song.destroy', $song->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><i class="fas fa-trash-alt text-danger"></i></button>
                                            </form>
                                            <form method="GET" action="{{ route('song.edit', $song->id) }}">
                                                @csrf
                                                {{--@method('PUT')--}}
                                                <button type="submit"><i class="fas fa-edit text-info"></i></button>
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
    </div>

@endsection