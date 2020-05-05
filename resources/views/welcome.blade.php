@extends('layout-search')

    @section('title')
    Homepage - Weather app
    @endsection

    @section('content')
    <!-- Header -->
    <header class="bg-primary py-5 mb-5 gradient-secondary">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <div class="row">
                    <div class="col-md-7">
                    <h1 class="display-4 text-white mt-5 mb-2">Benvenuto in Weather app</h1>
                    <p class="lead mb-5 text-white">Scopri il tempo nella tua località</p>
                    </div>
                    <div class="col-md-5">
                    <div class="text-right pt-5 pr-5">
                        <div class="pt-3">
                            <div class="icons">
                                <canvas class="icon1" height="60" width="60"></canvas>
                            </div>
                            <p class="text-white temperature-description"></p>
                            <p class="text-white temperature-degree"></p>
                            <p class="text-white location-date"></p>
                            <p class="text-white location-data"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                    @include('layouts/search-bar')
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row featurette">
            <div class="col-md-5">
                <h2 class="featurette-heading">Una semplice applicazione per le <span class="text-muted">previsioni meteo</span></h2>
                <p class="lead">Piccola applicazione web per le previsioni del tempo, utile per sapere che tempo fa nella tua zona e nel resto del mondo</p>
            </div>
            <div class="col-md-7 text-right">
                <img class="img-fluid" src="{{ asset('img/rain.jpg') }}">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette pb-4 mb-4">
            <div class="col-md-5 order-md-2">
                <h2 class="featurette-heading">Tutte le funzionalità che <span class="text-muted">ti piaceranno</span></h2>
                <p class="lead">Il meteo nella tua zona, previsioni dettagliate per la settimana, ricerca le previsioni del tempo in tutto il mondo, registrati per far parte della community di weatherapp</p>
            </div>
            <div class="col-md-7 order-md-1">
                <img class="img-fluid" src="{{ asset('img/rain-night.jpg') }}">
            </div>
        </div>
    </div>
    <!-- /.container -->
    <script src="{{ asset('js/current-weather.js') }}"></script>
    @endsection
