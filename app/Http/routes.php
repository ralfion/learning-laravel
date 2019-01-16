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

Route::get('/read', function () {

    $post = Post::findOrFAil(1);

    foreach ($post->tags as $tag)
    {
        echo $tag;
    }

});

Route::get('/update', function () {

    $post = Post::findOrFail(1);

    // foreach ($post->tags as $tag)
    // {
    //     return $tag->whereName('PHP')->update(['name'=>'PHP 7.2']);
    // }

    $tag = Tag::find(3);

    // $post->tags()->save($tag);

    // $post->tags()->attach($tag);

    $post->tags()->sync([2,1]);

});

Route::get('/delete', function () {

    $post = Post::findOrFail(1);

    foreach ($post->tags as $tag)
    {
        $tag->whereId(1)->delete();
    }

});