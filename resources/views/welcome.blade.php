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
            <div class="col-md-8 mb-5">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                <hr>
                Timezone: {{ $weather_data->timezone }}
                <div class="mt-4 mb-4">
                    <div class="bg-light p-4">
                        <h3> Weather now:</h3>
                            <h4>Summary of the day: {{ $weather_data->currently->summary }}</h4>
                            <p>{{ $weather_data->currently->icon }}</p>
                    </div>
                </div>
                <div class="p-4">
                <h3>Weather for the week:</h3>
                    <p>Summary of the week: {{ $weather_data->daily->summary }}</p>
                <hr>
                @foreach($weather_data->daily->data as $weather_day)
                    <p>Time: {{ $weather_day->time }}</p>
                    <p>Summary: {{ $weather_day->summary }}</p>
                        <p>{{ $weather_day->icon }}</p>
                    <hr>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 mb-5">

            </div>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
    @endsection
