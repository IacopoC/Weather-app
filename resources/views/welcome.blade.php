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
                    <p class="lead mb-5 text-white-50">Scopri che tempo fa nella tua zona</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-12 mb-5">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                <hr>
                <div class="pl-4">
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
                    <p>{{ $weather_day->summary }}</p>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
    @endsection
