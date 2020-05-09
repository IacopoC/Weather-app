<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home' , array('user'=>Auth::user()));
    }

    public function updateUser()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
        }
        $user = User::find($id);

        $this->validate(request(), [
            'country' => 'nullable|max:255',
            'hometown' => 'nullable|max:255',
            'address' => 'nullable|max:255',
            'zip' => 'nullable|max:255'
        ]);

        $user->country = request('country');
        $user->hometown = request('hometown');
        $user->address = request('address');
        $user->zip = request('zip');

        $user->save();

        return view('home', compact('user'));
    }
}
