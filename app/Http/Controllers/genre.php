<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class genre extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index_pop()
    {
        return view('genres.pop');
    }

    function index_rock()
    {
        return view('genres.rock');
    }
}
