@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <ul>
                        <li><a href="/newtimeline">New Timeline</a></li>
                        {{--<li><a href="/metronic/ftfl02/admin3/fahad_tab_Accordions_&_Navs">My Components</a></li>--}}
                        <li><a href="/ecommerce">My Tasks</a></li>
                        <li><a href="/projects">CRUD Project</a></li>
                        <li><a href="/posts">Journal Management System</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

