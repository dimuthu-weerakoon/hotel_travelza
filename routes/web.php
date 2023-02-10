<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HotelController;
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
Route::get('/index',[PagesController::class,'index']);




Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');




Route::controller(PagesController::class)->group(function () {
    Route::get('/places','places' );
    Route::get('/hotel','hotel' );
    Route::get('/gallery','gallery' );
    Route::get('/contact','contact' );
    Route::get('/travel','travel');
    Route::get('/payment','payment');

});

Route::controller(HotelController::class)->group(function () {

    Route::post('/save_hotel','store');
    // Route::view('/img','img');

});
