<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;

class About_Ctrl extends Controller
{
    
    //Templating
    public function about_index()
    {
        return view('about');
    }

}
