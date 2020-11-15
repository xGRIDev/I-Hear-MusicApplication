<?php

namespace App\Http\Controllers;

use SweetAlert;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        
        return view('music_front');
    }
    public function destroy()
    {
    Auth::logout();

    alert()->success('You have been logged out.', 'Good bye!');

    return home();
}
}
