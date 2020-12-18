<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->id;
        $locations = Location::where('user_id', $id)->orderBy('created_at', 'desc')->simplePaginate(15);

        return view('history' , array('user'=>Auth::user()) , compact('locations'));
    }

    public function destroy(Request $request)
    {
        $location_id = $request->input("location_id");
        Location::where('id',"=",$location_id)->delete();

        return redirect()->route('history');

    }
}
