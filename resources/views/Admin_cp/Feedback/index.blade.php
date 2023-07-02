@extends('Admin_cp.Layout.master')
@section('title',trans('feedback.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> Danh sách phản hồi khách hàng
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách phản hồi khách hàng</li>
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
                                        <th></th>
                                        <th>Họ và tên</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Nội dung</th>
                                        <th>Trạng thái</th>
                                        <th>Thời gian</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($feedbacks)

                                        @foreach($feedbacks as $feedback)
                                            <tr>
                                                <td>{{$feedback->fullname}}</td>
                                                <td>{{$feedback->email}}</td>
                                                <td>{{$feedback->contents}}</td>
                                                <td>
                                                    @if($feedback->status == 1)
                                                        <span class="badge badge-info">Đã xử lý</span>
                                                    @else
                                                        <span class="badge badge-warning">Chưa xử lý</span>
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
