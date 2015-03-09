@extends('inboxes')

@section('content')
    {{--{!! Form::open(array('url' => 'inboxes/')) !!}--}}
    {!! Form::open(array('method' => 'DELETE', 'route' => array('inboxes.destroy',1))) !!}
    <table class="table table-striped table-advance table-hover">

        <thead>
        <tr>
            <th colspan="3">
                <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                <div class="btn-group">
                    <a class="btn btn-sm blue dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                        More <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-pencil"></i> Mark as Read </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-ban"></i> Spam </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="javascript:;">
                                {{--<i class="fa fa-trash-o"></i> Delete--}}
                                <i class="fa fa-trash-o"></i>

                                {{--{!! Form::hidden('_method','DELETE') !!}--}}
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                            </a>
                        </li>
                    </ul>
                </div>
            </th>
            <th class="pagination-control" colspan="3">
		<span class="pagination-info">
		1-30 of 789 </span>
                <a class="btn btn-sm blue">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="btn btn-sm blue">
                    <i class="fa fa-angle-right"></i>
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($trashes as $key => $value)
            <tr class="unread" data-messageid="{{$value->status}}">
                <td class="inbox-small-cells">

                    {{--{!! Form::checkbox('cbox[]', 1, null, ['class' => 'mail-checkbox']) !!}--}}
                    {{--<input class="field" name="agree" type="checkbox" value="1">--}}
                    {!! Form:: checkbox('cbox[]',$value->id,null,['class' => 'mail-checkbox']) !!}

                    {{--<input type="checkbox" name="cbox[]" value="" class="mail-checkbox">--}}
                </td>
                <td class="inbox-small-cells">
                    <i class="fa fa-star"></i>
                </td>
                <td class="view-message hidden-xs">
                    <a href="{{ URL::to('inboxes/trash/' . $value->status) }}">{{$value->subject}}</a>
                </td>
                <td class="view-message">
                    <a href="{{ URL::to('inboxes/trash/' . $value->status) }}">{{substr($value->body_description,0,50)}}</a>
                </td>
                <td class="view-message inbox-small-cells">
                </td>
                <td class="view-message text-right">
                    <a href="{{ URL::to('inboxes/trash/' . $value->status) }}">{{$value->created_at}}</a>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    {{--{!! Form::close() !!}--}}
    {!! Form::close() !!}
@endsection

