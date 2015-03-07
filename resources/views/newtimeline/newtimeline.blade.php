{{--<!DOCTYPE html>

<html lang="en">

<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | New Timeline</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../../../assets/admin/pages/css/timeline.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="../../assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="../../assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="../../assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->

	@include('partials-newtimeline.header')

   <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">
            <!-- BEGIN HEADER SEARCH BOX -->
            <form class="search-form" action="extra_search.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->

            <!--START MEGA MENU/NAVBAR -->

             @include('partials-newtimeline.navbar')
                        <!--START MEGA MENU/NAVBAR -->
                    </div>
                </div>
                <!-- END HEADER MENU -->
            </div>--}}





@extends('app')

@section('content')


<div class="container">

    <h1>All the Posts</h1>

    <!-- will be used to show any messages -->
    {{--@if (Session::has('message'))--}}
        {{--<div class="alert alert-info">{{ Session::get('message') }}</div>--}}
    {{--@endif--}}

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID No.</td>
            <td>Title</td>
            <td>Body</td>
            <td>Published On</td>
            <td><a class="btn btn-small btn-success" href="{{ URL::to('newtimeline/create') }}">Create a New Post</a></td>

        </tr>
        </thead>
        <tbody>
        @foreach($newtimeline as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->body }}</td>
                <td>{{ $value->published_at }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>


        <a class="btn btn-small btn-success" href="{{ URL::to('newtimeline/'.$value->id) }}">View post</a>
        <a class="btn btn-small btn-success" href="{{ URL::to('newtimeline/'.$value->id.'/edit/') }}">Edit Post</a>

           {!! Form::open(array('method'=> 'DELETE', 'route' => array('newtimeline.destroy', $value->id))) !!}
             {!! Form::submit('Delete', array('class'=> 'btn btn-danger')) !!}
              {!! Form::close() !!}

                 </td>

            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@endsection
