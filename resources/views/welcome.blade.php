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
                 @foreach($weather_data->daily as $weather_day)
                      {{ var_dump($weather_day) }}
                     @endforeach
            </div>
            <div class="col-md-4 mb-5">

            </div>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
    @endsection
