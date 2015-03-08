@extends('voting')

@section('content')
    <h1>Candidate Entry</h1>

    {!! Form::open(array('url' => 'candidates')) !!}

    <div class="form-group">
        {!! Form::label('candidateName', 'Candidate Name') !!}
        {!! Form::text('candidateName', Input::old('candidateName'), array('class' => 'form-control')) !!}

    </div>

    <div class="form-group">
        {!! Form::label('symbol', 'Symbol') !!}
        {!! Form::text('symbol', Input::old('symbol'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Save', array('class' => 'btn btn-primary pull-right')) !!}

    {!! Form::close() !!}
@endsection