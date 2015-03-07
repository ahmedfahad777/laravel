@extends('app')

@section('content')
    <h1>Post View</h1>

    <div class="alert alert-success">
        <h4>Post No. {{ $posts->id }}</h4>
        <p>
            <h2><strong>Post Title:</strong></br> {{ $posts->title }} </h2><br>
            <h2><strong>Body:</strong><br> {{ $posts->body }} </h2><br>
            <h4><strong>Published On:</strong> {{ $posts->published_at }}</h4><br>
        </p>
    </div>
@endsection
