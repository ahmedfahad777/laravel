@extends('voting')

@section('content')

    <!-- will be used to show any messages -->
   {{-- @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif--}}
    {{--{{ HTML ::ul($errors->all(), array('class'=>'errors')) }}--}}
    <h1 class="text-center">Voter Entry</h1>

    {!! Form::open(array('url' => 'voters')) !!}

    <div class="form-group col-md-8 col-md-offset-2">
        <div class="col-md-2">
            {!! Form::label('voterName', 'Voter Name:') !!}
        </div>
        <div class="col-md-10">
            {!! Form::text('voterName', Input::old('voterName'), array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group col-md-8 col-md-offset-2">
        <div class="col-md-2">
            {!! Form::label('voterId', 'Voter ID') !!}
        </div>
        <div class="col-md-10">
            {!! Form::text('voterId', Input::old('voterId'), array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-md-8 col-md-offset-2">
        {!! Form::submit('Save', array('class' => 'btn btn-primary pull-right')) !!}
    </div>

    {!! Form::close() !!}
@endsection