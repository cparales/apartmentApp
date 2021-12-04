@extends('layouts.app')

@section('content')
@include('navbar')
<div class = "container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class = "card">
                <div class = "card-header text-center" style = "font-size:20px">
                    @if(session()->exists('message') && Session::get('message') == 'SUCCESS')
                    <b>Listing succesful.</b>
                    @else
                    <b>Listing failed.</b>
                    @endif
                </div>
                <div class = "card-body" style = "font-size:20px">
                @if(session()->exists('message') && Session::pull('message') == 'SUCCESS')
                Your listing has been succesfully inserted and now can be seen by other users.
                <div class = "col-md-12" style = "margin-top: 5%">
                    <div class = "row justify-content-between">
                        <div>
                            <a class = "btn btn-outline-primary" href = "{{ route('listingShow', ['id' => Session::pull('houseId')]) }}">View listing</a>
                            <a class = "btn btn-outline-primary" href = "{{ route('listingCreate') }}">Create another listing</a>
                        </div>
                        <div>
                            <a class = "btn btn-danger" href = "{{ route('home') }}">Go home</a>
                        </div>
                    </div>
                </div>
                @else
                There was an error inserting your listing. Please check if the data You have inserted is correct or try again later.
                <div class = "col-md-12" style = "margin-top: 5%">
                    <div class = "row justify-content-between">
                        <div>
                            <a class = "btn btn-outline-primary" href = "{{ route('listingCreate') }}">Create another listing</a>
                        </div>
                        <div>
                            <a class = "btn btn-danger" href = "{{ route('home') }}">Go home</a>
                        </div>
                    </div>
                </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection