@extends('layouts/voters')

@section('content')


    {!! Form::open(['url' => 'voters']) !!}

    <div class="container">

        <h2>Candidate Entry</h2>

        <div class="form-group">
            {!! Form::label('Candidate Name') !!}
            {!! Form::text('title', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>'Candidate Name')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Symbol') !!}
            {!! Form::text('body', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>'Symbol')) !!}
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