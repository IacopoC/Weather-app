@extends('layout')

@section('title')
    Search results - Weather app
@endsection

@section('content')
    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Forecast in </h1>
                    <p class="lead mb-5 text-white-50">Discover forecast in your <a class="text-white" href="#">location</a></p>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
                <?php var_dump($weather_results);  ?>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
@endsection
