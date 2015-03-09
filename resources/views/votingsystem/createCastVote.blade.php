@extends('voting')

@section('content')
    <h1 class="text-center">Cast Your Vote</h1>

    {!! Form::open(array('url' => 'castVote')) !!}
    {{--{!! Form::model($inbox, array('route' => array('inboxes.update', $inbox->id), 'method' => 'PUT')) !!}--}}
    {{--{!! Form::model (($voter,$candidate), array('route' => array('castVote.update', ($voter->id, $candidate->id), 'method' => 'PUT')) !!}--}}

    <div class="form-group col-md-6 col-md-offset-3">
        <div class="col-md-3">
            {!! Form::label('voterId', 'Voter ID: ') !!}
        </div>
        <div class="col-md-9">
            {!! Form::text('voterId', Input::old('voterId'), array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group col-md-6 col-md-offset-3">
        <div class="col-md-3">
        {!! Form::label('symbol', 'Select Symbol of Candidate: ') !!}
        </div>
        <div class="col-md-9">
       {{-- {{$candidates = \App\Candidate::lists('symbol','id')}}--}}
       {{--@foreach(\App\Candidate::all() as $key => $value)--}}
        {!! Form::select('symbol', \App\Candidate::lists('symbol', 'id'),Input::old('symbol'), array('class' => 'form-control')) !!}

        {{--{!! Form::select('symbol',  [{{$candidates->symbol}}],Input::old , array('class' => 'form-control')) !!}--}}
        {{--@endforeach--}}
        </div>
    </div>
    <div class="col-md-6 col-md-offset-3">
    {!! Form::submit('Cast', array('class' => 'btn btn-primary pull-right')) !!}
    </div>

    {!! Form::close() !!}
@endsection