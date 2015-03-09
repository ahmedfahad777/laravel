@extends('inboxes')

@section('content')
    <h1>Create a Message</h1>

    <!-- if there are creation errors, they will show here -->
   {{-- {!! HTML::ul($errors->all()) !!}--}}

    {!! Form::open(array('url' => 'inboxes')) !!}

    <div class="form-group">
        {!! Form::label('receiver_email_id', 'Receiver Email ID') !!}
        {!! Form::email('receiver_email_id', Input::old('receiver_email_id'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('subject', 'Subject') !!}
        {!! Form::text('subject', Input::old('subject'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body_description', 'Message Body') !!}
        {!! Form::textarea('body_description', Input::old('body_description'), array('class' => 'form-control')) !!}
        {{--{{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) }}--}}
    </div>

    {!! Form::submit('Create the Message!', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
@endsection