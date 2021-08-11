<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;
use App\Http\Requests\ArtistRequest;
use PhpParser\Node\Stmt\Return_;
use Auth;

class Artist_ctrl extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $artist = Artist::all();
        $albums = Album::all();
        return view('crud.artist.index', compact('artist', 'albums'));
    }

    public function create()
    {
        $artists = Artist::all();
        return view('crud.artist.create');
    }

    public function ArtistFormed()
    {
        $artist = Artist::all();
        return view('crud.artist.formedDetail');
    }

    public function store(ArtistRequest $request)
    {
        $request['image'] = $request->image_url;
        unset($request['image_url']);
        Artist::create($request->all());
        return redirect()->route('artist.index')->with('success', 'Category was successfully created.');
    }

    public function show(Artist $artist)
    {
        //
    }

    public function edit(Request $requests, Artist $artists)
    {
        $artists = Artist::where('id', Auth::user()->id)->first();
        //$artist->first_name = $requests->first_name;
        //$artist->career_name = $requests->career_name;
        //$artists->update($requests->all());
        $request['image'] = $requests->image_url;
        return view('crud.artist.edit', compact('artists'));
    }

    public function update(Request $request, Artist $artist)
    {
        
        $artist->update($request->all());
        $request['image'] = $request->image_url;
        $artist->first_name = $request->first_name;
        $artist->career_name = $request->career_name;
        $artist->biography = $request->biography;
        //$artist->update($request->all());
        unset($request['image_url']);
        return view('crud.artist.edit', compact('artist'));
        return redirect()->route('artist.index')->with('success', 'Category was successfully updated.');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artist.index');
    }
}
