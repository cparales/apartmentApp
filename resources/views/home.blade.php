@extends('layouts.app')

@section('content')
@include('navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class = "row justify-content-between">
                        <div style = "padding-left:10px; padding-top:5px; font-size:20px">
                            Hello, {{ Auth::user()->name }}!
                        </div>
                        <div style = "padding-right:10px">
                            <a class = "btn btn-danger" href = "{{ route('logout') }}">
                                Log out
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body" style = "font-size:20px; padding-top:40px">
                    <div class = "d-flex justify-content-center">
                        <b>What do You wish to do today?</b>
                    </div>
                    <div style = "padding-top: 35px" class = "d-flex justify-content-around">
                        <div class="col-md-6" style = "text-align: center">
                            <img src = "/pictures/house_vector.png" height = "200" width = "200">
                            <a class = "btn btn-outline-secondary" href = "{{ route('listings') }}" style = "margin-top:50px">
                                Browse listings
                            </a>
                        </div>
                        <div class="col-md-6" style = "text-align: center">
                            <img src = "/pictures/auction_vector.png" height = "200" width = "200">
                            <a class = "btn btn-outline-secondary" href = "{{ route('listingCreate') }}" style = "margin-top:50px">
                                Create listings
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
