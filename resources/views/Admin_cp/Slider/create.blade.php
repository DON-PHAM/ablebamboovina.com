@extends('Admin_cp.Layout.master')
@section('title',trans('slider.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i> Thêm mới banner
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm mới banner</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header with-border">
                            <h2 class="card-title"></h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a href="{{route('slider-list')}}" class="btn  btn-flat btn-default"
                                       title="List"><i class="fa fa-list"></i><span
                                            class="hidden-xs"> Trở lại danh sách</span></a>
                                </div>
                            </div>
                        </div>

                        @include('Error.message')
                        <form action="{{route('post-slider-create')}}" method="post"
                              accept-charset="UTF-8" class="form-horizontal" id="form-main"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="fields-group">
                                    <div class="form-group  row ">
                                        <label for="image" class="col-sm-2 col-form-label">Hình ảnh</label>

                                        <label for="fileField" class="attachment">
                                            <input name="image" type="file" id="image">
                                        </label>

                                    </div>
                                    <div class="form-group  row ">
                                        <label for="url" class="col-sm-2 col-form-label">URL</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                                    </div>
                                                </div>
                                                <input type="text" id="url" name="url" value="" class="form-control"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group  row ">
                                        <label for="title" class="col-sm-2 col-form-label">Tiêu đề</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                                    </div>
                                                </div>
                                                <input type="text" id="name" name="name" value="" class="form-control"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group  row ">
                                        <label for="title" class="col-sm-2 col-form-label">Mô tả</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">

                                                <textarea class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row ">
                                    <label for="status" class="col-sm-2 col-form-label">Trạng thái</label>
                                    <div class="col-sm-8">
                                        <input class="status" type="checkbox" name="status"/>
                                    </div>
                                </div>

                                <div class="card-footer row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="btn-group float-right">
                                            <button type="submit" class="btn btn-primary">Gửi</button>
                                        </div>
                                        <div class="btn-group float-left">
                                            <button type="reset" class="btn btn-warning">Làm lại</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')

@endsection
