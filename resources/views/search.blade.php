@extends('layout-search')

@section('title')
    Risultati ricerca per {{ $query }} - Weather app
@endsection

@section('content')
    <!-- Header -->
    <header class="bg-primary py-5 mb-5 gradient-secondary">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Il tempo a: {{ $query }}</h1>
                    <p class="lead mb-5 text-white-50"></p>
                    @include('layouts/search-bar')
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        @if(!empty($weather_results))
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="pt-2 pl-4">
                    <p>Fuso orario: {{ $weather_results->timezone }}</p>
                </div>
                <div class="mt-4 mb-4">
                    <div class="p-4">
                        <h3> Il tempo adesso</h3>
                        <canvas class="{{ $weather_results->currently->icon }}" width="64" height="64"></canvas>
                        <p>{{ $weather_results->currently->summary }}</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 pt-2">
                                <p>Pioggia: {{ $weather_results->currently->precipProbability }} %</p>
                                <p>Temperatura: {{ $weather_results->currently->temperature }} C°</p>
                                <p>Temperatura percepita: {{ $weather_results->currently->apparentTemperature }} C°</p>
                            </div>
                            <div class="col-md-6 pt-2">
                                <p>Umidità: {{ substr($weather_results->currently->humidity,2) }} %</p>
                                <p>Pressione: {{ $weather_results->currently->pressure }} mb</p>
                                <p>Indice UV: {{ $weather_results->currently->uvIndex }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <h3>Il tempo della settimana</h3>
                    <p>{{ $weather_results->daily->summary }}</p>
                    <hr>
                    <div class="row">
                    @foreach($weather_results->daily->data as $weather_day)
                            <div class="col-md-3 pt-4">
                        <p class="pb-2"><strong>{{ gmdate("d-m-Y", $weather_day->time) }}</strong></p>
                                <canvas class="{{ $weather_day->icon }}" width="64" height="64"></canvas>
                        <p>{{ $weather_day->summary }}</p>
                                <p>Pioggia: {{ substr($weather_day->precipProbability,2) }} %</p>
                                <p>Temp: {{ $weather_day->temperatureMin }} / {{ $weather_day->temperatureMax }} C°</p>
                                <p>Umidità: {{ substr($weather_day->humidity,2) }} %</p>
                                <p>Pressione: {{ $weather_day->pressure }} mb</p>
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
            @else
            <p>Risultati non disponibili per il termine cercato</p>
    @endif

    </div>
    <!-- /.container -->
@endsection
