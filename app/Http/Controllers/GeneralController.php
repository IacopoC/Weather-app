<?php

namespace App\Http\Controllers;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function __construct(BaseType $basetype)
    {
        $this->basetype = $basetype;
    }


    public function index(Request $request)
    {
        $query = $request->input('q');
        $weather_results = $this->basetype->searchWeather($query);

        $this->store($query);

        return view('search', compact('weather_results','query'));
    }

    public function store($query)
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
