@extends('layout')

@section('title')
    Località cancellata - Weather app
@endsection

@section('content')
    <header class="bg-primary py-5 mb-5 gradient-secondary">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="display-4 text-white mt-2 mb-2">Località cancellata</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pt-4 pb-4">
             <p>Località cancellata</p>
                <button type="button" class="btn btn-primary"><a class="text-white" href="{{ url('/history') }}">Torna a cronologia</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
