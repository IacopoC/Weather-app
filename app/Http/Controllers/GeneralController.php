<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Location;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function __construct(BaseType $basetype)
    {
        $this->basetype = $basetype;
    }


    public function forecast()
    {
        $weather_data = $this->basetype->getDefaultWeather();
        return view('forecast', compact( 'weather_data'));
    }

    public function searched()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $searched = Location::where('user_id', $id)->orderBy('created_at', 'desc')->take(3)->get();
            return view('welcome', compact('searched'));
        } else {
            return view('welcome');
        }
    }


    public function search(Request $request)
    {
        $query = $request->input('q');
        $weather_results = $this->basetype->searchWeather($query);

        $this->storeLocation($query);

        return view('search', compact('weather_results','query'));
    }


    public function storeLocation($query)
    {
        if (Auth::check()) {
            $id = Auth::user()->id;

            $locations = new Location;
            $locations->location = $query;
            $locations->user_id = $id;
            $locations->save();
        }
    }

    }
