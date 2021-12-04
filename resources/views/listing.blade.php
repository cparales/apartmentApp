@extends('layouts.app')

@section('content')
@include('navbar')
<div style = "margin-top: -5%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class = "card">
                <div class = "card-header text-center" style = "font-size:30px">
                    <b>{{ $house->title }}</b>
                </div>
                <div class = "card-body">
                    <div class = "row">
                        <div class = "col-md-6">
                            <div style = "font-size:20px">
                                <b>Address:</b>
                            </div>
                            <div class = "row" style = "padding-top:3%" >
                                <div class = "col-md-5">
                                    Locality: {{ $house->locality }}
                                </div>
                                <div class = "col-md-5">
                                    Country: {{ $house->country }}
                                </div>
                            </div>
                            <div class = "row col-md-12" style = "padding-top:3%">
                                    Address Line: {{ $house->address }}
                            </div>
                            <div style = "font-size:20px; padding-top:10%">
                                <b>Specification:</b>
                            </div>
                            <div class = "row" style = "padding-top:3%" >
                                <div class = "col-md-5">
                                    Number of floors: {{ $house->floors_nr }}
                                </div>
                                <div class = "col-md-5">
                                    Number of rooms: {{ $house->rooms_nr }}
                                </div>
                            </div>
                            <div class = "row col-md-12" style = "padding-top:3%">
                                    Housing type: {{ $house->type }}
                            </div>
                            <div style = "padding-top:10%">
                                <div style = "font-size:20px">
                                    <b>Price:</b>
                                </div>
                                <div style = "padding-top:3%">
                                {{ $house->price }} €
                                </div>
                            </div>
                            <div style = "padding-top:10%">
                                <div style = "font-size:20px">
                                    <b>Contact:</b>
                                </div>
                                <div style = "padding-top:3%">
                                {{ $userName }}: {{ $house->contact_nr }}
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            @if(!empty($house->photo_url))
                            <img style = "max-width:100%;max-height:100%;" src="{{ $house->photo_url }}" alt="House photo">
                            @endif
                        </div>
                    </div>
                    @if(!empty($house->description))
                    <div style = "font-size:20px; padding-top:8%">
                        <b>Description:</b>
                    </div>
                    {{ $house->description }}
                    @endif
                    <div class = "row justify-content-center" style = "padding-top:3%">
                        <a type="button" class="btn btn-outline-danger" href = "{{ route('listings') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection