<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;
use App\Http\Requests\ArtistRequest;
use PhpParser\Node\Stmt\Return_;

class Artist_ctrl extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $artist = Artist::all();
        return view('crud.artist.index', compact('artist'));
    }

    public function create()
    {
        $artists = Artist::all();
        return view('crud.artist.create');
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

    public function edit(Artist $artist)
    {
        return view('crud.artist.edit');
    }

    public function update(Request $request, Artist $artist)
    {
        $request['image'] = $request->image_url;
        unset($request['image_url']);
        $artist->update($request->all());
        return redirect()->route('artist.index')->with('success', 'Category was successfully updated.');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();
    }
}
