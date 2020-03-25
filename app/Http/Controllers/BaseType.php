<?php

namespace App\Http\Controllers;

use App\Http\weatherapi\WeatherApi;

use Illuminate\Support\Facades\Input;

class BaseType extends Controller
{
    private $service;
    protected $api_key;
    protected $baseUrl;

    public function __construct()
    {

        $this->api_key = env('WEATHER_DATABASE_KEY');
        $this->service = new WeatherApi();
    }

    private function buildCall($lat, $long)
    {
        $string = $this->baseUrl . '/forecast/' . $this->api_key . '/' . $lat . ',' . $long . '?units=si&lang=it';

        return $this->service->callWeather('get', $this->baseUrl . $string);
    }

    public function getDefaultWeather()
    {
        return $this->buildCall('42.3601', '-71.0589');
    }

    public function searchWeather($query)
    {
         $weather_coordinates = $this->service->callSearchWeather($query);

         return $this->buildCall($weather_coordinates['lat'], $weather_coordinates['lng']);
    }
}
