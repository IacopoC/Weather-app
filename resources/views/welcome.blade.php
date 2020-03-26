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
                    <h1 class="display-4 text-white mt-5 mb-2">Benvenuto in Weather app <i class="fas fa-cloud-sun-rain"></i></h1>
                    <p class="lead mb-5 text-white-50">Scopri il tempo nella tua <a class="text-white" id="geolocation" href="#">città <span class="ml-1 mt-1 p-1 text-white"><i class="fas fa-location-arrow"></i></span></a></p>
                    @include('layouts/search-bar')
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pt-2">A simple weather application</h2>
                <div class="pt-4 pb-4">
                    <ul>
                <li>Current weather in you area</li>
                <li>Daily prevision with details and data of every single day of the last week</li>
                <li>Search weather in any part of the world</li>
                <li>Register to unlock more features and save your weather locations</li>
                    </ul>
                </div>
            </div>
        </div>
             <div class="row">
                 <div class="col-md-12">
            <h3 id="title-currentw" class="d-none">Il tempo adesso:</h3>
                <div class="pt-3 location">
                    <h5 class="location-timezone"></h5>
                </div>
            <div class="pt-3">
                <p class="temperature-description"></p>
            </div>
                 </div>
             </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="temperature-degree"></p>
                    <p class="rain-prob"></p>
                </div>
                <div class="col-md-6">
                    <p class="pressure-degree"></p>
                    <p class="uvindex-degree"></p>
                </div>
                <div class="col-md-12 pt-3">
                    <div class="daily-summary">
                    </div>
                </div>
            </div>
    </div>
    <!-- /.container -->
    @endsection
