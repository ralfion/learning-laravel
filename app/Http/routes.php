<?php

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

use App\Post;
use App\Tag;
use App\Video;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function () {

    $post = Post::create(['name' => 'My first Post']);

    $tag1 = Tag::find(1);

    $post->tags()->save($tag1);

    $video = Video::create(['name' => 'video.mp4']);

    $tag2 = Tag::find(2);

    $video->tags()->save($tag2);

});