@extends('voting')

@section('content')

    <!-- will be used to show any messages -->
   {{-- @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif--}}
    {{--{{ HTML ::ul($errors->all(), array('class'=>'errors')) }}--}}
    <h1>Voter Entry</h1>

    {!! Form::open(array('url' => 'voters')) !!}

    <div class="form-group">
        {!! Form::label('voterName', 'Voter Name') !!}
        {!! Form::text('voterName', Input::old('voterName'), array('class' => 'form-control')) !!}

    </div>

    <div class="form-group">
        {!! Form::label('voterId', 'Voter ID') !!}
        {!! Form::text('voterId', Input::old('voterId'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Save', array('class' => 'btn btn-primary pull-right')) !!}

    {!! Form::close() !!}
@endsection