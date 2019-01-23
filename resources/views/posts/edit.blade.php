@extends('layouts.app')


@section('content')

<form method="post" action="/posts/{{$post->id}}">

    <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="submit" name="submit" value="update">

    {{csrf_field()}}

</form>

<form method="post" action="/posts/{{$post->id}}">

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" name="submit" value="delete">

    {{csrf_field()}}

</form>

@endsection