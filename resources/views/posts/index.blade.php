@extends('layouts.app')

@section('content')

<ul>
    @foreach ($posts as $post)

        <div class="image-container">
            <img width="100" src="{{$post->path}}" alt="{{$post->title}}" class="img-fluid">
        </div>

        <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a> <a href="{{route('posts.edit', $post->id)}}">edit</a></li>

    @endforeach
</ul>

@endsection