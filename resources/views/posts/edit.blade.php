
@extends('app')

@section('content')


    {!! Form::model($posts, ['method' => 'PATCH', 'route' => ['posts.update', $posts->id]]) !!}

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







