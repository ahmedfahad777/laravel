@extends('layouts/voters')

@section('content')


    {!! Form::open(['url' => 'voters']) !!}

    <div class="container">

        <h2>Voter Entry</h2>

        <div class="form-group">
            {!! Form::label('Voter Name') !!}
            {!! Form::text('title', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>'Voter Name')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Voter Id') !!}
            {!! Form::text('body', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>'write voter id here')) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Save',
            array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
    </div>

    <p>
    <ul>
        @foreach( $errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>
    </p>

@stop
