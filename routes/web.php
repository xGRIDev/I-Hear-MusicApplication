<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return redirect()->route('page.index');
    return view('welcome');
});

Auth::routes(['verify' => true]);

//Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/music_front','dashboard@index');

//GENRES

Route::get('/pop','genre@index_pop');
Route::get('/rock','genre@index_rock');


//Route::get('/artist/songs','Song_ctrl@index');

Route::get('/page/index', 'Page_ctrl@index')->name('user');

Route::get('/crud/artist/index', 'Artist_ctrl@index')->name('artist');

//Route::post('');


Route::get('/page/explore/explore_page', 'Page_ctrl@explore');

Route::get('/page/play', 'Page_ctrl@play')->name('page.play');

Route::post('/song/count/{id}', 'Song_ctrl@updateCount');

Route::get('/song/all', 'Page_ctrl@allSongs');

Route::get('/album/all', 'Page_ctrl@allAlbums');
Route::get('/album/song/{id}', 'Page_ctrl@getAlbum');

Route::get('/artist/all', 'Page_ctrl@allArtists');
Route::get('/artist/song/{id}', 'Page_ctrl@getArtist');

Route::get('/song/index', 'Song_ctrl@index');

Route::get('/album/index', 'Album_ctrl@index');

//Route::get('/crud/artist/index', 'Artist_ctrl@index')->name('artists');

//Route::get('/explore', 'Page_ctrl@explore');

//Profile
Route::get('/user/edit', 'User_profile@edit_index');

Route::get('/user/profile', 'User_Profile@profile');

Route::post('/page/index', 'User_Profile@update');

//About-Page

Route::get('/about', 'About_Ctrl@about_index');

Route::resources([
    'page' => 'Page_ctrl',
    'artist' => 'Artist_ctrl',
    'album' => 'Album_ctrl',
    'song' => 'Song_ctrl',
    ]);