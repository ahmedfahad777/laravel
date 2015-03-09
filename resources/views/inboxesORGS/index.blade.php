@extends('inboxes')

@section('content')
    <h1>All the Inboxes</h1>

    <!-- will be used to show any messages -->
    {{--@if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif--}}

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Receiver Email</td>
            <td>Subject</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($inboxes as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->receiver_email_id }}</td>
                <td>{{ $value->subject }}</td>
                <td>{{ $value->body_description }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the inbox (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the inbox (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success pull-right" href="{{ URL::to('inboxes/' . $value->id) }}">Show</a>

                    <!-- edit this inbox (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('inboxes/' . $value->id . '/edit') }}">Edit</a>
                    {{--<a class="btn btn-small btn-danger" href="{{ URL::to('inboxes/' . $value->id . '/edit') }}">Delete</a>--}}
                    {!!Form::open(array('url' => 'inboxes/'.$value->id,'class' => 'pull-right'))!!}
                    {!!Form::hidden('_method','DELETE')!!}
                    {!!Form::submit('Delete', array('class' => 'btn btn-danger'))!!}
                    {!!Form::close()!!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

