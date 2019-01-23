@extends('layouts.app')


@section('content')

    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]])!!}

        <div class="form-group">

            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' =>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}

        </div>


    {!! Form::close() !!}

    <hr>

    {!! Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]])!!}

        <div class="form-group">

            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}

        </div>

    {!! Form::close() !!}

@endsection