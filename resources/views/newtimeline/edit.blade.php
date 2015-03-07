{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>Look! I'm CRUDding</title>--}}
    {{--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}

{{--<nav class="navbar navbar-inverse">--}}
    {{--<div class="navbar-header">--}}
        {{--<a class="navbar-brand" href="{{ URL::to('newtimeline') }}">Nerd Alert</a>--}}
    {{--</div>--}}
    {{--<ul class="nav navbar-nav">--}}
        {{--<li><a href="{{ URL::to('newtimeline') }}">View All Posts</a></li>--}}
        {{--<li><a href="{{ URL::to('newtimeline/create') }}">Create a New Post</a>--}}
    {{--</ul>--}}
{{--</nav>--}}

{{--<h1>Edit {{ $newtimeline->title }}</h1>--}}

{{--<!-- if there are creation errors, they will show here -->--}}
{{--{{ HTML::ul($errors->all()) }}--}}

{{--{{ Form::model($newtimeline, array('route' => array('newtimeline.newtimeline', $newtimeline->id), 'method' => 'PUT')) }}--}}

    {{--<div class="form-group">--}}
        {{--{{ Form::label('title', 'title') }}--}}
        {{--{{ Form::text('title', null, array('class' => 'form-control')) }}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{{ Form::label('body', 'Body') }}--}}
        {{--{{ Form::textarea('body', null, array('class' => 'form-control')) }}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{{ Form::label('nerd_level', 'Nerd Level') }}--}}
        {{--{{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}--}}
    {{--</div>--}}

    {{--{{ Form::submit('Edit the Post', array('class' => 'btn btn-primary')) }}--}}

{{--{{ Form::close() }}--}}

{{--</div>--}}
{{--</body>--}}
{{--</html>--}}




@extends('app')

@section('content')


    {!! Form::model($newtimeline, ['method' => 'PATCH', 'route' => ['newtimeline.update', $newtimeline->id]]) !!}

<div class="container">

<h2>Edit Post</h2>

        <div class="form-group">
            {!! Form::label('title') !!}
            {!! Form::text('title', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'title')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body') !!}
            {!! Form::textarea('body', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your post')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Published_at','Published On:') !!}
            {!! Form::input('date','published_at', date('Y-m-d'),
                ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Post',
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
</div>

@endsection









