@extends('layout-search')

@section('title')
    Risultati ricerca per {{ $query }} - Weather app
@endsection

@section('content')
    <!-- Header -->
    @if($weather_results->currently->summary == 'Sereno'):
    <header class="bg-primary py-5 mb-5 gradient-secondary">
        @else
        <header class="bg-primary py-5 mb-5 gradient-primary">
     @endif
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
                    <p><strong>Fuso orario: {{ $weather_results->timezone }}</strong></p>
                </div>
                <div class="mt-4 mb-4">
                    <div class="p-4">
                        <h2> Il tempo adesso</h2>
                        <canvas class="{{ $weather_results->currently->icon }}" width="64" height="64"></canvas>
                        <p class="font-weight-bold pt-2">{{ $weather_results->currently->summary }}</p>
                        <div class="row">
                            <div class="col-md-6 pt-2">
                                <div class="pt-3 pb-3">
                                <h5>Pioggia: {{ $weather_results->currently->precipProbability }} %</h5>
                                <h5>Temperatura: {{ $weather_results->currently->temperature }} C°</h5>
                                <h5>Temperatura percepita: {{ $weather_results->currently->apparentTemperature }} C°</h5>
                            </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="pt-3 pb-3">
                                <h5>Umidità: {{ substr($weather_results->currently->humidity,2) }} %</h5>
                                <h5>Pressione: {{ $weather_results->currently->pressure }} mb</h5>
                                <h5>Vento: {{ $weather_results->currently->windSpeed }} km/h</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <h2>Il tempo della settimana</h2>
                    <p class="font-weight-bold">{{ $weather_results->daily->summary }}</p>
                    <div class="row">
                    @foreach($weather_results->daily->data as $weather_day)
                            <div class="col-md-3 pt-4">
                                <div class="pt-3 pb-3 pr-3 h-350">
                        <p class="pb-2"><strong>{{ gmdate("d-m-Y", $weather_day->time) }}</strong></p>
                                <canvas class="{{ $weather_day->icon }}" width="64" height="64"></canvas>
                                    <p><strong>{{ $weather_day->summary }}</strong></p>
                                <p>Pioggia: {{ $weather_day->precipProbability }} %</p>
                                <p>Temp: {{ $weather_day->temperatureMin }} / {{ $weather_day->temperatureMax }} C°</p>
                                <p>Umidità: {{ $weather_day->humidity }} %</p>
                                <p>Pressione: {{ $weather_day->pressure }} mb</p>
                            </div>
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
            @if(!empty($weather_results->alerts))
            <div class="col-md-12">
                <div class="row">
                    <div class="p-4">
                        <h2 class="pb-3">Allerte meteo</h2>
                            @foreach($weather_results->alerts as $weather_alerts)
                                <p class="font-weight-bold">{{ $weather_alerts->title }}</p>
                                <p class="font-weight-bold">{{ $weather_alerts->description }}</p>
                             @endforeach
                        </div>
                    </div>
            </div>
                @endif
            @else
            <p>Risultati non disponibili per il termine cercato</p>
    @endif

    </div>
    <!-- /.container -->
@endsection
