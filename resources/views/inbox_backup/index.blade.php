@extends('layouts.inbox')

@section('content')
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>User Inbox <small>user inbox</small></h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            @include('partials.pagetoolbar')
            <!-- END PAGE TOOLBAR -->
        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="#">Home</a><i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li class="active">
                    User Inbox
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <div class="portlet light">
                <div class="portlet-body">
                    <div class="row inbox">
                        <div class="col-md-2">
                            <ul class="inbox-nav margin-bottom-10">
                                <li class="compose-btn">
                                    <a href="javascript:;" data-title="Compose" class="btn green">
                                        <i class="fa fa-edit"></i> Compose </a>
                                </li>
                                <li class="inbox active">
                                    <a href="javascript:;" class="btn" data-title="Inbox">
                                        Inbox(3) </a>
                                    <b></b>
                                </li>
                                <li class="sent">
                                    <a class="btn" href="javascript:;" data-title="Sent">
                                        Sent </a>
                                    <b></b>
                                </li>
                                <li class="draft">
                                    <a class="btn" href="javascript:;" data-title="Draft">
                                        Draft </a>
                                    <b></b>
                                </li>
                                <li class="trash">
                                    <a class="btn" href="javascript:;" data-title="Trash">
                                        Trash </a>
                                    <b></b>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <div class="inbox-header">
                                <h1 class="pull-left">Inbox</h1>
                                <form class="form-inline pull-right" action="index.html">
                                    <div class="input-group input-medium">
                                        <input type="text" class="form-control" placeholder="Password">
										<span class="input-group-btn">
										<button type="submit" class="btn green"><i class="fa fa-search"></i></button>
										</span>
                                    </div>
                                </form>
                            </div>
                            <div class="inbox-loading">
                                Loading...
                            </div>
                            <div class="inbox-content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
@endsection