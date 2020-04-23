@extends('layout')

    @section('title')
    Homepage - Weather app
    @endsection

    @section('content')
    <!-- Header -->
    <header class="bg-primary py-5 mb-5 gradient-secondary">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Benvenuto in Weather app</h1>
                    <p class="lead mb-5 text-white">Scopri il tempo nella tua località <button type="button" class="btn btn-link text-white" id="geolocation"><img src="{{ asset('img/geolocation.png') }}"></button></p>
                    @include('layouts/search-bar')
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container d-none" id="container-current">
        <div class="row">
            <div class="col-md-12">
                <h3 id="title-currentw" class="d-none">Il tempo adesso</h3>
                <div class="pt-3 location">
                    <h5 class="location-timezone"></h5>
                </div>
                <div class="pt-3">
                    <div class="icons">
                        <canvas class="icon1" height="60" width="60"></canvas>
                    </div>
                    <p class="temperature-description"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="temperature-degree"></p>
                <p class="temperature-apparent"></p>
                <p class="rain-prob"></p>
            </div>
            <div class="col-md-6">
                <p class="pressure-degree"></p>
                <p class="uvindex-degree"></p>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-12">
                <h3 class="title-week"></h3>
            </div>
        </div>
        <div class="row pt-4 daily-summary">
        </div>
    </div>
    <div class="container">
        <div class="row featurette">
            <div class="col-md-5">
                <h2 class="featurette-heading">Una semplice applicazione per le <span class="text-muted">previsioni meteo</span></h2>
                <p class="lead">Piccola applicazione web per le previsioni del tempo, utile per sapere che tempo fa nella tua zona e nel resto del mondo</p>
            </div>
            <div class="col-md-7 text-right">
                <img src="{{ asset('img/rain.jpg') }}" width="500px" height="500px">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette pb-4 mb-4">
            <div class="col-md-5 order-md-2">
                <h2 class="featurette-heading">Tutte le funzionalità che <span class="text-muted">ti piaceranno</span></h2>
                <p class="lead">Il meteo nella tua zona, previsioni dettagliate per la settimana, ricerca le previsioni del tempo in tutto il mondo, registrati per far parte della community di weatherapp</p>
            </div>
            <div class="col-md-7 order-md-1">
                <img src="{{ asset('img/rain-night.jpg') }}" width="500px" height="500px">
            </div>
        </div>
    </div>
    <!-- /.container -->
    <script src="{{ asset('js/current-weather.js') }}"></script>
    @endsection
