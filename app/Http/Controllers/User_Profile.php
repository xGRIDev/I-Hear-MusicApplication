<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class User_Profile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit_index()
    {
        //$users = User::where('id', Auth::user()->id)->first();
        $users = User::where('id', Auth::user()->id)->first();
        return view('user.edit', compact('users'));
    }

    public function profile()
    {
        $users = User::where('id', Auth::user()->id)->first();
        return view('user.profile', compact('users', $users));
    }

    public function update(Request $requests)
    {
        $requests->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $users = User::where('id', Auth::user()->id)->first();
        $users->name = $requests->name;
        $users->email = $requests->email;
        $users->address = $requests->address;
        $avatarName = $users->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
        $requests->avatar->storeAs('avatars', $avatarName);
        $users->avatar = $avatarName;
        $users->update();

        return redirect('/page/index');
    }

}
