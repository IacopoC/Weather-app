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
                        <div class="list-group-item bg-light m-2">
                            <h5><strong>{{ $location->location }}</strong></h5>
                            <form id="history-form" class="d-inline" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="location_id" id="location-id" value="{{ $location->id }}">
                                <button type="submit" id="location-submit" class="btn btn-danger float-right">Cancella</button>
                            </form>
                            <p>{{ $location->created_at }}</p>
                        </div>
                    @endforeach
                </div>
                @else
                    <h3>Le località cercate verranno aggiunte alla tua cronologia</h3>
                @endif
            </div>
        </div>
    </div>
    <script>

       document.getElementById('location-submit').addEventListener('onclick', deleteHistory);


        function deleteHistory() {

           const axios = require('axios');

           const token = document.head.querySelector('meta[name="csrf-token"]');
           window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

           let id = document.getElementById('location-id').value;

             axios.delete('/delete-history', {
               data: {id: id}
           }).then((response) => {
               console.log(response)
           }).catch((error) => {
               console.log(error.response.data)
           });
       }
    </script>
@endsection
