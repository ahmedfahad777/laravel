@extends('layouts/voters')

@section('content')


    {!! Form::open(['url' => 'voters']) !!}

    <div class="container">

        <h2>Cast your vote</h2>

        <div class="form-group">
            {!! Form::label('Voter Id') !!}
            {!! Form::text('title', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>'voter id')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Symbol') !!}
            {!! Form::text('body', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>'Symbol')) !!}
        </div>

        <div>
        <h1>Select symbol of candidate</h1>
        <select id="make" name="make">
        <option>Select Car Make</option>
        <option value="1">Boat</option>
        <option value="2">Honda</option>
        <option value="3">Mercedes</option>
        </select>
        <br>
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
