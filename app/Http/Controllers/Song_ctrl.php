<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;
use App\Song;
use Auth;

use Illuminate\Support\Facades\Input;

class Song_ctrl extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $songs = Song::all();
        return view('crud.song.index', compact('songs'));
    }

    public function create()
    {
        $albums = Album::all();
        $artists = Artist::all();
        return view('crud.song.create', compact('albums', 'artists'));
    }
    public function store(Request $request)
    {
        Song::create($request->all());
        return redirect()->route('song.index');
    }

    public function show(Song $song)
    {
        //
    }

    public function edit(Song $song)
    {
        dd($song);
    }

    public function update(Request $request, Song $song)
    {

    }

    public function updateCount(Request $request)
    {
        $song = Song::find($request->id);
        $song->count++;
        $song->save();
    }

    public function destroy(Song $song)
    {
//        dd($song);
        $song->delete();
        return redirect()->route('song.index');
    }
}
