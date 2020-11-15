<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;
use App\Http\Requests\AlbumRequest;
use Auth;

class Album_ctrl extends Controller
{
    //

    public function __construct(){
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $albums = Album::all();
        $artists = Artist::all();
        return view('crud.album.index', compact('albums', 'artists'));
    }

    public function create()
    {
        $artists = Artist::all();
        return view('crud.album.create', compact('artists'));
    } 

    public function store(AlbumRequest $request)
    {
        Album::create($request->all());
        return redirect()->route(album.index)->with('success', 'Album succesfully added.');
    }

    public function show(Album $album)
    {

    }

    public function edit(Album $album)
    {

    }

    public function update(Request $request, Album $album)
    {
        $album->update($request->all());
        return redirect()->route('album.index')->with('success', 'Album was successfully updated .');
    }


    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('album.index')->with('success', 'Album was successfully deleted.');
    }

}
