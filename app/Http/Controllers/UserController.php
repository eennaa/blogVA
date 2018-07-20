<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show(User $user)
    {   
        return view('users.show', ['user'=>$user] );
    }

    // public function show($id)                   /// ovo je sa Eager Load ali iz nekog razloga ne radi verovatno zbog rute
    // {   
    //     $user = User::with('post')->find($id);
    //     return view('users.show', ['user'=>$user] );
    // }
    //
}
