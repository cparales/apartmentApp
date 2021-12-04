@extends('layouts.app')

@section('content')
@include('navbar')
<div style = "margin-top: -4%">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class = "card">
                <div class = "card-header text-center" style = "font-size:20px">
                    <b>Create Listing</b>
                </div>
                <div class = "card-body">
                    <form action = "{{ route('listingCreateStore') }}" method = "POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="The title of the listing" name = "title" required>
                        </div>
                        <div class = "form-row">
                            <div class="form-group col-md-4">
                                <label for="floorNo">Number of floors</label>
                                <input type="number" min = "1" class="form-control" id="floorNo" name = "floorNo" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="roomNo">Number of rooms</label>
                                <input type="number" min = "1" class="form-control" id="roomNo" name = "roomNo" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="houseType">Housing type</label>
                                <select id="houseType" class="form-control" name = "houseType" required>
                                    <option value="SFH">Single-Family Home</option>
                                    <option value="Duplex">Duplex</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo URL</label>
                            <input type="url" class="form-control" id="photo" placeholder="The URL of the listing photo" name = "photo">
                        </div>
                        <div class = "form-row">
                            <div class="form-group col-md-3">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name = "country" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="locality">Locality</label>
                                <input type="text" class="form-control" id="locality" name = "locality" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="addressLine">Address Line</label>
                                <input type="text" class="form-control" id="addressLine" name = "addressLine" placeholder = "Street, Nr, etc."required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="10" name = "description"></textarea>
                        </div>
                        <div class = "form-row">
                            <div class="form-group col-md-6">
                                <label for="price">Price</label>
                                <input type="number" min = "1" class="form-control" id="price" name = "price" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone number</label>
                                <input type="tel" class="form-control" id="phone" name = "phone" required>
                            </div>
                        </div>
                        <div style = "padding-top:5%">
                            <button class="btn btn-primary" type="submit">List house</button>
                            <a class = "btn btn-danger" href = "{{ route('home') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection