<?php

namespace App\Http\Controllers;

use App\Location;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function __construct(BaseType $basetype)
    {
        $this->basetype = $basetype;
    }


    public function index()
    {

        $weather_data = $this->basetype->getDefaultWeather();

        return view('forecast', compact( 'weather_data'));
    }


    public function search(Request $request)
    {
        $query = $request->input('q');
        $weather_results = $this->basetype->searchWeather($query);

        return view('search', compact('weather_results','query'));
    }

    public function store(Request $request)
    {
        $location_data = new Location;

        $location_data->location = request('location');
        $location_data->user_id = request('user_id');

        $location_data->save();

        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

}
