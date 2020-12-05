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
                <center><img class="rounded-image" src="" /></center>
                <center class="mt-5 mb-5">Your Profile</center>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Career Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody>
                </table>

                <div class="card">

                    <div class="card-header">Profile</div>
                    <div class="card-body">
                    <div class="row justify-content-center">

                    <div class="profile-header-container">
                        <div class="profile-header-img">
                           
                            <!-- badge -->
                            <div class="rank-label-container">
                                <span class="label label-default rank-label"></span>
                            </div>
                        </div>
                    </div>

                </div>

                        <form method="POST" action="{{ url('page/index') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="name">Name: </label>
                                    <!--<input name="name" type="text" class="form-control" id="name" placeholder="Name" required complete="name" autofocus>-->
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="title">first name</label>
                                    <input name="first_name" type="text" class="form-control" id="first_name" value="" placeholder="Title" required autocomplete="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="mb-2" for="address">Address</label>
                                    <textarea name="address" class="form-control" placeholder="address"></textarea>
                                </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Profile</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection