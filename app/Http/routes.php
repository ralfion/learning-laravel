<?php
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('/posts', 'PostsController');

Route::get('/dates', function() {

    $date = new DateTime('+1 week');

    echo $date->format('Y-m-d');

    echo '<br>';

    echo Carbon::now()->addDays(7)->diffForHumans();

    echo '<br>';

    echo Carbon::now()->subMonths(5)->diffForHumans();

    echo '<br>';

    echo Carbon::now()->addMonths(5)->diffForHumans();

    echo '<br>';

    echo Carbon::now()->yesterday();

});