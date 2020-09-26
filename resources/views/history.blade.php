@extends('layout')

@section('title')
    Cronologia - Weather app
@endsection

@section('content')
    <header class="bg-primary py-5 mb-5 gradient-secondary">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="display-4 text-white mt-2 mb-2">Cronologia</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(!empty($locations))
                <div class="list-group pt-4 pb-4">
                    @foreach($locations as $location)
                    <p class="list-group-item">{{ $location->location }} | {{ $location->created_at }}</p>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
