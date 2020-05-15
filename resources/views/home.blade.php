@inject('countries', 'App\Http\Utilities\Country')
@extends('layout')

@section('title')
    Area utente {{ $user->name }} - Weather app
@endsection

@section('content')
    <header class="bg-primary py-5 mb-5 gradient-secondary">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-7">
                    <h1 class="display-4 text-white mt-2 mb-2">Benvenuto {{ $user->name }}</h1>
                    <p class="lead mb-3 ml-1 text-white">Dashboard</p>
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
    <div class="row">
    <div class="col-md-6">
        <h3>Dati profilo</h3>
        <p class="pt-2">Nome: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Iscritto dal: {{ date('d M Y', $user->created_at->timestamp) }}</p>
        <p>Aggiornato al: {{ date('d M Y', $user->updated_at->timestamp) }}</p>
    </div>
        <div class="col-md-6">
            @if(!empty($user->address))
                <h3>Indirizzo</h3>
                <p class="pt-2">{{ $user->address }},
            @endif
            @if(!empty($user->zip))
               {{ $user->zip }}</p>
            @endif
             @if(!empty($user->hometown))
                <p>{{ $user->hometown }},
             @endif
             @if(!empty($user->province))
                 {{ $user->province }}</p>
             @endif
        </div>
        <div class="col-md-12 pt-4 pb-4">
            <button data-toggle="modal" data-target="#userModal" class="btn btn-primary">Modifica profilo</button>
        </div>
    </div>
</div>

    <!-- Modal user -->
    <div id="userModal" class="modal fade" role="dialog">
        <div class="modal-dialog mw-100 w-75">
            <div class="modal-content">
                <div class="modal-header card-header-title">
                    <h4 class="modal-title card-element-title">Aggiungi informazioni profilo</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label-p">Indirizzo</label>
                            <div class="col-md-9">
                                <input id="address" type="text" class="form-control" name="address" value="@if(!empty($user->address)){{ $user->address }} @endif">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="zip" class="col-md-6 control-label-p">CAP</label>
                            <div class="col-md-9">
                                <input id="zip" type="text" class="form-control" name="zip" value="@if(!empty($user->zip)){{ $user->zip }} @endif">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-md-6 control-label-p">Provincia</label>
                            <div class="col-md-9">
                                <input id="province" type="text" class="form-control" name="province" value="@if(!empty($user->province)){{ $user->province }} @endif">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hometown" class="col-md-4 control-label-p">Città</label>

                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3"></span>
                                    <input id="hometown" type="text" class="form-control" name="hometown" value="@if(!empty($user->hometown)){{ $user->hometown }} @endif" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="country" class="col-md-4 control-label-p">Stato</label>

                            <div class="col-md-9">
                                <select id="country" class="form-control" name="country">

                                    <!--See blade inject for Country class-->
                                    @foreach( $countries::all() as $country => $code)
                                        <option <?php if (isset($user->country) && $user->country == $code): echo "selected"; endif;?> value="{{ $code }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9">
                            <p>Vuoi cambiare l'immagine del profilo? La prendiamo da <a href="https://www.gravatar.com" target="_blank">gravatar.com</a></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Aggiorna profilo
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal user -->
@endsection
