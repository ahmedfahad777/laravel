@extends('layouts/voters')

@section('content')

        <a class="btn btn-small btn-success" href="{{ URL::to('voters/create1') }}">Voter Entry</a>
        <a class="btn btn-small btn-success" href="{{ URL::to('voters/create2') }}">Candidate Entry</a>

@endsection