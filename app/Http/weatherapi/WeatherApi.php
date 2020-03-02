<?php

namespace App\Http\weatherapi;

use GuzzleHttp\Client;


class WeatherApi
{
    protected $client;
    protected $baseUrl;

    public function __construct() {

        $this->baseUrl = 'https://api.darksky.net/';
        $this->SetUpClient();

    }

    private function SetUpClient() {
        $this->client = new Client(['base_uri' => $this->baseUrl]);
    }

    public function callWeather($method, $url)
    {
        $results_pages = $this->client->request($method, $url);
        $body_results_pages = $results_pages->getBody();
        return json_decode($body_results_pages);
    }


    public function callSearchWeather($method, $url, $search_res)
    {
       /*
        $body_results = $results->getBody();
        return json_decode($body_results); */
    }
}

