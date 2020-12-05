<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;
use App\Song;
use App\User;
use Auth;
//use DB;

class Page_ctrl extends Controller
{
    //
    public function __construct(){
        $this->middleware(['auth', 'verified']);
    }

    public function show_img(Request $requests)
    {
        $users->name = $request->name;
        $avatarName = $users->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
        $requests->avatar->storeAs('avatars', $avatarName);
        $users->avatar = $avatarName;
        
        return view('page.index', compact('weeklyCharts', 'trendings', 'recentlyAddeds', 'users','avatarName', $users));
    }

    public function index()
    {
        $users = User::where('id', Auth::user()->id)->first();
        $weeklyCharts = Song::orderBy('count', 'DESC')->take(7)->get();
        $trendings = Song::orderBy('count', 'DESC')->take(6)->get();
        $recentlyAddeds = Song::orderBy('created_at', 'DESC')->take(6)->get();
        //$avatarName = $users->id.'_avatar'.time().'.'.request()->avatar;
        //$users->avatar = $avatarName;
        return view('page.index', compact('weeklyCharts', 'trendings', 'recentlyAddeds', 'users', $users));
    }

    public function explore()
    {
        
        $weeklyCharts = Song::orderBy('count', 'DESC')->take(7)->get();
        $trendings = Song::orderBy('count', 'DESC')->take(6)->get();
        $recentlyAddeds = Song::orderBy('created_at', 'DESC')->take(6)->get();
        $views = view('page.explore.explore_page', compact('weeklyCharts', 'trendings', 'recentlyAddeds'))->render();
        return response($views);

    }

    function allSongs()
    {
        $songs = Song::orderBy('title')->get();
        $views = view("page.song.song_page", compact('songs'))->render();
        return response($views);
    }

    //album
    function allAlbums()
    {
        $albums = Album::orderBy('created_at')->get();
        $views = view("page.album.album_page", compact('albums'))->render();
        return response($views);
    }

    function getAlbum(Request $request) {
//        $album = Album::find($request->id)->songs;
        $album = Album::find($request->id);
        $views = view('page.album.sample_album_page', compact('album'))->render();
        return response($views);
    }

    //artist
    function allArtists()
    {
        $artists = Artist::orderBy('created_at')->get();
        $views = view("page.artist.artist_page", compact('artists'))->render();
        return response($views);
    }
    function getArtist(Request $request) {
        $albums = Album::all();
        $artist = Artist::find($request->id);
        $views = view('page.artist.sample_artist_page', compact('artist','albums'))->render();
        return response($views);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
