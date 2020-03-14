@extends('layout')

    @section('title')
    Homepage - Weather app
    @endsection

    @section('content')
    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Benvenuto su Weather app</h1>
                    <p class="lead mb-5 text-white-50">Scopri che tempo fa nella <a class="text-white" href="#">tua zona</a></p>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="pt-2 pl-4">
                    <p>Timezone: {{ $weather_data->timezone }}</p>
                </div>
                <div class="mt-4 mb-4">
                    <div class="p-4">
                        <h3> Weather now:</h3>
                            <p>Summary of today: {{ $weather_data->currently->summary }}</p>
                        <hr>
                        <div class="row">
                        <div class="col-md-6">
                        <p>Rain probability: {{ $weather_data->currently->precipProbability }} %</p>
                        <p>Temp: {{ $weather_data->currently->temperature }} C°</p>
                         <p>Uv Index: {{ $weather_data->currently->uvIndex }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Humidity: {{ $weather_data->currently->humidity }} %</p>
                            <p>Pressure: {{ $weather_data->currently->pressure }} mb</p>
                            <p>Visibility: {{ $weather_data->currently->uvIndex }}</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                <h3>Weather for the week:</h3>
                    <p>Summary of the week: {{ $weather_data->daily->summary }}</p>
                <hr>
                @foreach($weather_data->daily->data as $weather_day)
                        <p class="pb-2"><strong>{{ gmdate("d-m-Y", $weather_day->time) }}</strong></p>
                        <p>{{ $weather_day->summary }}</p>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Rain probability: {{ $weather_day->precipProbability }} %</p>
                                <p>Temp: {{ $weather_day->temperatureMin }} / {{ $weather_day->temperatureMax }} C°</p>
                            </div>
                            <div class="col-md-6">
                                <p>Humidity: {{ $weather_day->humidity }} %</p>
                                <p>Pressure: {{ $weather_day->pressure }} mb</p>
                            </div>
                        </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
    @endsection
