@extends('app')

@section('content')
    <h1>New Post {{ $newtimeline->id }}  </h1>

    <div class="jumbotron text-center">
        <h2> {{ $newtimeline->id }}</h2>
        <p>
            <strong>Post Title:</strong> {{ $newtimeline->title }}<br>
            <strong>Body:</strong> {{ $newtimeline->body }}<br>
            <strong>Published On:</strong> {{ $newtimeline->published_at }}<br>
        </p>
    </div>
@endsection