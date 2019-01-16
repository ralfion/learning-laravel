@extends('layouts.app')


@section('content')

<form method="post" action="/post">

    <input type="text" name="title" placeholder="Enter title">

    <input type="submit" name="submit">

</form>

@endsection