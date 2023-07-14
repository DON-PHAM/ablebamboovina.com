@extends('Admin_cp.Layout.master')
@section('title',trans('feedback.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> {{trans('feedback.list-feedback')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('feedback.title')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header with-border">
                            <div class="card-tools">
                            </div>
                            <div class="float-left">
                            </div>

                        </div>
                        <div class="card-body p-0" id="pjax-container">
                            <div id="url-sort" data-urlsort=""
                                 style="display: none;"></div>

                            <div class="table-responsive">
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <thead>
                                    <tr>
                                        <th>{{trans('feedback.name')}}</th>
                                        <th>{{trans('feedback.email')}}</th>
                                        <th>{{trans('feedback.phone')}}</th>
                                        <th>{{trans('feedback.content')}}</th>
                                        <th>{{trans('feedback.status')}}</th>
                                        <th>{{trans('feedback.time')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($feedbacks)

                                        @foreach($feedbacks as $feedback)
                                            <tr>
                                                <td>{{$feedback->fullname}}</td>
                                                <td>{{$feedback->email}}</td>
                                                <td>{{$feedback->phonenumber}}</td>
                                                <td>{{$feedback->contents}}</td>
                                                <td>
                                                    @if($feedback->status == 1)
                                                        <span class="badge badge-info">{{trans('feedback.message.handle')}}</span>
                                                    @else
                                                        <span class="badge badge-warning">{{trans('feedback.message-un-handle')}}</span>
                                                    @endif
                                                </td>
                                                <td>{{$feedback->created_at}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            {{$feedbacks->links("pagination::bootstrap-4")}}

                        </div>

                        <div class="card-footer clearfix">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
