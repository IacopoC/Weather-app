<?php

namespace App\Http\Controllers;

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


    public function search()
    {

    }

}
