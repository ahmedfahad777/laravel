@extends('inboxes')

@section('content')
    <h1>Inbox Message {{ $inbox->id }}</h1>

    <div class="jumbotron text-center">
        {{--<h2>{{ $inbox->id }}</h2>--}}
        <p>
            <strong>Receiver Email ID:</strong> {{ $inbox->receiver_email_id }}<br>
            <strong>Subject:</strong> {{ $inbox->subject }}<br>
            <strong>Message Body:</strong> {{ $inbox->body_description }}<br>
            <strong>Subject:</strong> {{ $inbox->attachment }}
        </p>
    </div>
@endsection