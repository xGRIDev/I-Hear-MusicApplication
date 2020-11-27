@extends('crud.template')

@section('content')

<div class="app">
        <div id="content" style="overflow: auto; margin-bottom: 75px; padding-bottom: 75px;"
             class="content p-3 col-lg-10 offset-lg-2 col-md-9 offset-md-3 col-12 p-0">
            <div class="col-12 col-md-8 offset-md-2">

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

                <div class="card">

                    <div class="card-header">Add New Artist</div>
                    <div class="card-body">

                        <form action="{{ url('page.index') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="title">Title: </label>
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="album_id">Album: </label>
                                    <select name="album_id" id="album_id" class="form-control">
                                        @foreach($albums as $album)
                                            <option value="{{ $album->id }}">{{ $album->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="url">Artists: </label>
                                    <select name="artist_id" id="artist_id" class="form-control">
                                        @foreach($artists as $artist)
                                            <option value="{{ $artist->id }}">{{ $artist->career_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="url">Song URL: </label>
                                    <input name="url" type="text" class="form-control" id="url" placeholder="Song URL">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection