@extends('layouts.app')

@section('content')
@include('navbar')
<div style = "padding-top:8%">
    <div class="row justify-content-center">
        <h1><b>Home Listings</b></h1>
    </div>
    <div class="row justify-content-center" style = "padding-top:5%">
        <div class="col-md-8">
            <div class = "card" style = "height:500px;width:80%;margin:auto">
                <div class = "card-header text-left" style = "font-size:20px">
                    <b>Single-Family Home</b>
                </div>
                <div class = "card-body text-center">
                    @if(!empty($houses['singleFamilyHome']))
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style = "height:100%">
                            @php
                            $firstSFH = array_shift($houses['singleFamilyHome']);
                            @endphp
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ $firstSFH['photo_url'] }}" width = "500" height = "450">
                                <div class="carousel-caption d-none d-md-block" style = "background-color:black;opacity:70%">
                                    <a href = "{{ route('listingShow', ['id' => $firstSFH['id']]) }}">
                                        <p style = "padding-bottom:5%"><b>{{ $firstSFH['title'] }}</b></p>
                                    </a>
                                </div>
                            </div>
                            @foreach($houses['singleFamilyHome'] as $house)
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ $house['photo_url'] }}" width = "500" height = "450">
                                <div class="carousel-caption d-none d-md-block" style = "background-color:black;opacity:70%">
                                    <a href = "{{ route('listingShow', ['id' => $house['id']]) }}">    
                                        <p style = "padding-bottom:5%"><b>{{ $house['title'] }}</b></p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style = "background-color:grey;opacity:20%">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style = "background-color:grey;opacity:20%">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    @else
                    <div style = "margin: 0;position: absolute;top: 50%;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);font-size:20px">
                        There are no listing for this category at the moment.
                    </div>
                    @endif
                </div>
            </div>
            <div style = "padding-top:50px"></div>
            <div class = "card" style = "height:500px;width:80%;margin:auto">
                <div class = "card-header text-right" style = "font-size:20px">
                    <b>Duplex</b>
                </div>
                <div class = "card-body text-center" style = "font-size:20px">
                    @if(!empty($houses['duplex']))
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style = "height:100%">
                            @php
                            $firstDuplex= array_shift($houses['duplex']);
                            @endphp
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ $firstDuplex['photo_url'] }}" width = "500" height = "450">
                                <div class="carousel-caption d-none d-md-block" style = "background-color:black;opacity:70%">
                                    <a href = "{{ route('listingShow', ['id' => $firstDuplex['id']]) }}">       
                                        <p style = "padding-bottom:5%"><b>{{ $firstDuplex['title'] }}</b></p>
                                    </a>
                                </div>
                            </div>
                            @foreach($houses['duplex'] as $house)
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ $house['photo_url'] }}" width = "500" height = "450">
                                <div class="carousel-caption d-none d-md-block" style = "background-color:black;opacity:70%">
                                    <a href = "{{ route('listingShow', ['id' => $house['id']]) }}">        
                                        <p style = "padding-bottom:5%"><b>{{ $house['title'] }}</b></p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev" style = "background-color:grey;opacity:20%">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next" style = "background-color:grey;opacity:20%">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    @else
                    <div style = "margin: 0;position: absolute;top: 50%;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);font-size:20px">
                        There are no listing for this category at the moment.
                    </div>
                    @endif
                </div>
            </div>
            <div style = "padding-top:50px"></div>
            <div class="row justify-content-between" style = "width:80%;margin:auto">
                <a class = "btn btn-primary" href = "{{ route('listingCreate') }}">Create new listing</a>
                <a class = "btn btn-danger" href = "{{ route('home') }}">Back</a>
            </div>
        </div>
    </div>
</div>
