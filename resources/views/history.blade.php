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
                        <div class="list-group-item">
                            <p> {{ $location->location }}</p>
                            <form id="history-form" class="d-inline">
                                {{ csrf_field() }}
                                <input type="hidden" name="location_id" id="location-id" value="{{ $location->id }}">
                                <button type="submit" id="film-submit" class="btn btn-danger">Cancella</button>
                            </form>
                            <p>{{ $location->created_at }}</p>
                        </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        document.getElementById("film-submit").addEventListener("click", function() {
            let value_delete = document.getElementById("location-id").value;
            const link = '/history/' + value_delete;

            fetch(link, {
                headers: {
                    "Content-Type": "application/json; charset=utf-8",
                    "X-CSFR-TOKEN": "<meta name=\'csrf-token\' content=\'{{ csrf_token() }}\'>"
                },
                method: 'POST',
            })
                .then(res => res.json()) // parse response as JSON (can be res.text() for plain response)
                .then(response => {
                    alert('Cancella dato');
                    console.log(res);
                })
                .catch(err => {
                    console.log(err);
                    alert("sorry, there are no results for your search")
                });
        });
    </script>
@endsection
