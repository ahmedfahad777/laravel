
@extends('app')

@section('content')


<div class="container">

    <h1>All the Posts</h1>


    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID No.</td>
            <td>Title</td>
            <td>Body</td>
            <td>Published On</td>
            <td><a class="btn btn-small btn-success" href="{{ URL::to('posts/create') }}">Create a New Post</a></td>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->body }}</td>
                <td>{{ $value->published_at }}</td>


                <td>

        <a class="btn btn-small btn-success" href="{{ URL::to('posts/'.$value->id) }}">View post</a>
        <a class="btn btn-small btn-success" href="{{ URL::to('posts/'.$value->id.'/edit/') }}">Edit Post</a>

           {!! Form::open(array('method'=> 'DELETE', 'route' => array('posts.destroy', $value->id))) !!}
             {!! Form::submit('Delete', array('class'=> 'btn btn-danger')) !!}
              {!! Form::close() !!}

                 </td>

            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@endsection
