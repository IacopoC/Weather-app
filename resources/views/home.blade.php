@extends('layout')

@section('title')
    Area utente {{ Auth::user()->name }} - Weather app
@endsection

@section('content')
    <header class="bg-primary py-5 mb-5 gradient-secondary">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-7">
                    <h1 class="display-4 text-white mt-2 mb-2">Benvenuto {{ $user->name }}</h1>
                    <p class="lead mb-3 text-white">Dashboard</p>
                        </div>
                        <div class="col-md-5">
                            <div class="image-avatar text-right">
                                <img class="img-profile" src="{{ 'https://www.gravatar.com/avatar/' . gravatar_img($user->email) }} . '?s=200'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container">
    <div class="col-md-12">
        <h3>Dati profilo</h3>
        <p class="pt-2">Nome: {{ Auth::user()->name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Iscritto dal: {{ date('d M Y', $user->created_at->timestamp) }}</p>
    </div>
</div>
@endsection
