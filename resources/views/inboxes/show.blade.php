@extends('inboxes')

@section('content')
    <div class="inbox-header inbox-view-header">
        <h1 class="pull-left">{{$inbox->subject}} <a href="javascript:;">
                Inbox </a>
        </h1>
        <div class="pull-right">
            <i class="fa fa-print"></i>
        </div>
    </div>
    <div class="inbox-view-info">
        <div class="row">
            <div class="col-md-7">
                <img src="/assets/admin/layout3/img/avatar2.jpg" class="img-circle" style="height: 30px;">
                <span class="bold">	Petronas IT </span>
                <span> &#60;{{ $inbox->receiver_email_id }}&#62; </span>
                to
                <span class="bold"> me </span>
                on {{--08:20PM 29 JAN 2013--}}{{$inbox->created_at}}
            </div>
            <div class="col-md-5 inbox-info-btn">
                <div class="btn-group">
                    <a class="btn btn-small btn-info" href="{{ URL::to('inboxes/' . $inbox->id . '/edit') }}">Reply</a>
                    <button data-messageid="23" class="btn blue reply-btn">
                        <i class="fa fa-reply"></i> Reply
                    </button>
                    <button class="btn blue dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;" data-messageid="23" class="reply-btn">
                                <i class="fa fa-reply"></i> {{--Reply--}} </a>
                        </li>
                        {{--<li>
                            <a href="javascript:;">
                                <i class="fa fa-arrow-right"></i> Forward </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-print"></i> Print </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-ban"></i> Spam </a>
                        </li>--}}
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-trash-o"></i> Delete </a>
                        </li>
                        <li>
                </div>
            </div>
        </div>
    </div>
    <div class="inbox-view">
        <p>
            <strong>{{substr($inbox->body_description,0,10)}}</strong> {{substr($inbox->body_description,10)}}
        </p>
    </div>
    <hr>
    <div class="inbox-attached">
        <div class="margin-bottom-15">
				<span>
				3 attachments — </span>
            <a href="javascript:;">
                Download all attachments </a>
            <a href="javascript:;">
                View all images </a>
        </div>
        <div class="margin-bottom-25">
            <img src="/assets/admin/pages/media/gallery/image4.jpg">
            <div>
                <strong>image4.jpg</strong>
					<span>
					173K </span>
                <a href="javascript:;">
                    View </a>
                <a href="javascript:;">
                    Download </a>
            </div>
        </div>
        <div class="margin-bottom-25">
            <img src="/assets/admin/pages/media/gallery/image3.jpg">
            <div>
                <strong>IMAG0705.jpg</strong>
					<span>
					14K </span>
                <a href="javascript:;">
                    View </a>
                <a href="javascript:;">
                    Download </a>
            </div>
        </div>
        <div class="margin-bottom-25">
            <img src="/assets/admin/pages/media/gallery/image5.jpg">
            <div>
                <strong>test.jpg</strong>
					<span>
					132K </span>
                <a href="javascript:;">
                    View </a>
                <a href="javascript:;">
                    Download </a>
            </div>
        </div>
    </div>

@endsection