<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/welcome', function () {
    Auth::logout();
    return view('welcome');
})->name('welcome');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/welcome');
})->name('logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/listings', 'ListingController@index')->name('listings');
Route::get('/listings/create', 'ListingController@create')->name('listingCreate');
Route::post('/listings', 'ListingController@store')->name('listingCreateStore');
Route::get('/listings/{id}', 'ListingController@show')->name('listingShow');



