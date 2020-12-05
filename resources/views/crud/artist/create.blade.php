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

                        <form action="{{ route('artist.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="first_name">First Name: </label>
                                    <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="last_name">Last Name: </label>
                                    <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="career_name">Name Musician : </label>
                                    <input name="career_name" type="text" class="form-control" id="career_name" placeholder="Career Name">
                                </div>
                                
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="image_url" name="image_url">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
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