@extends('inboxes')

@section('content')
    <h1>Edit {{ $inbox->id }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{--{{ HTML::ul($errors->all()) }}--}}

    {!! Form::model($inbox, array('route' => array('inboxes.update', $inbox->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('receiver_email_id', 'Receiver Email ID') !!}
        {!! Form::email('receiver_email_id', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('subject', 'Subject') !!}
        {!! Form::text('subject', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body_description', 'Message') !!}
        {!! Form::textarea('body_description',null,array('class' => 'form-control')) !!}

    </div>

    {!! Form::submit('Edit!', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
@endsection