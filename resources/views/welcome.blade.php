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
                    <p class="lead mb-5 text-white">Scopri il tempo nella tua località <button type="button" class="btn btn-link text-white p-2" id="geolocation">Geo</button></p>
                    @include('layouts/search-bar')
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pt-2">Una semplice applicazione per il meteo</h2>
                <div class="pt-4 pb-4">
                    <ul>
                <li>Il meteo nella tua zona</li>
                <li>Previsioni meteo dettagliate per la settimana</li>
                <li>Ricerca le previsioni del tempo in tutto il mondo</li>
                <li>Registrati per sbloccare altre funzionalità e salvare le tue ricerche</li>
                    </ul>
                </div>
            </div>
        </div>
             <div class="row">
                 <div class="col-md-12">
            <h3 id="title-currentw" class="d-none">Il tempo adesso</h3>
                <div class="pt-3 location">
                    <h5 class="location-timezone"></h5>
                </div>
            <div class="pt-3">
                <div class="icon">
                </div>
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
            </div>
        <div class="row pt-3">
            <div class="col-md-12">
            <h3 class="title-week"></h3>
            </div>
        </div>
             <div class="row pt-3 daily-summary">

            </div>
    </div>
    <!-- /.container -->
    <script src="{{ asset('js/current-weather.js') }}"></script>
    @endsection
