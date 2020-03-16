@extends('layout')

    @section('title')
    Homepage - Weather app
    @endsection

    @section('content')
    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Welcome to Weather app</h1>
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
            <div class="col-lg-12">
                <h2 class="pt-2">A simple weather application</h2>
                <div class="pt-4 pb-4">
                    <ul>
                <li>Current weather in you area</li>
                <li>Daily prevision with details and data of every single day of the last week</li>
                <li>Search weather in any part of the world</li>
                <li>Register to unlock more features and save your weather locations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    @endsection
