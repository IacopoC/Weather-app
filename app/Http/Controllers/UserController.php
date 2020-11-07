<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Location;

class UserController extends Controller
{

    public function show()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $searched = Location::where('user_id', $id)->orderBy('created_at', 'desc')->take(3)->get();
            return view('welcome', compact('searched'));
        } else {
            return view('welcome');
        }
    }

}
