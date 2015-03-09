@extends('voting')

@section('content')
    <h1 class="text-center">Candidate Entry</h1>

    {!! Form::open(array('url' => 'candidates')) !!}

    <div class="form-group col-md-8 col-md-offset-2">
        <div class="col-md-2">
            {!! Form::label('candidateName', 'Candidate Name') !!}
        </div>
        <div class="col-md-10">
            {!! Form::text('candidateName', Input::old('candidateName'), array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group col-md-8 col-md-offset-2">
        <div class="col-md-2">
            {!! Form::label('symbol', 'Symbol') !!}
        </div>
        <div class="col-md-10">
            {!! Form::text('symbol', Input::old('symbol'), array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-md-8 col-md-offset-2">
        {!! Form::submit('Save', array('class' => 'btn btn-primary pull-right')) !!}
    </div>

    {!! Form::close() !!}
@endsection