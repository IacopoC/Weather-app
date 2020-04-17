@extends('layout')

@section('title')
    Area utente {{ Auth::user()->name }} - Weather app
@endsection

@section('content')
    <header class="bg-primary py-5 mb-5 gradient-secondary">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-2 mb-2">Benvenuto {{ Auth::user()->name }}</h1>
                    <p class="lead mb-3 text-white">Dashboard area utente</p>
                </div>
            </div>
        </div>
    </header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-150 mb-150">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            </div>
        </div>
</div>
@endsection
