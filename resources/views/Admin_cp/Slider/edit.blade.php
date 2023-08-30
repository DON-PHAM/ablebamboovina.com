@extends('Admin_cp.Layout.master')
@section('title',trans('slider.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{trans('slider.edit')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('slide.edit')}}</li>
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
                                            class="hidden-xs"> {{trans('home.back')}}</span></a>
                                </div>
                            </div>
                        </div>

                        @include('Error.message')
                        @if($slider)
                            <form action="{{route('post-slider-edit',$slider->id)}}" method="post"
                                  accept-charset="UTF-8" class="form-horizontal" id="form-main"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="fields-group">
                                        <div class="form-group  row ">
                                            <label for="image" class="col-sm-2 col-form-label">{{trans('slider.image')}}</label>

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
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                    </div>
                                                    <input type="text" id="url" name="url" value="{{$slider->url}}" class="form-control"
                                                           placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group  row ">
                                            <label for="title" class="col-sm-2 col-form-label">{{trans('slider.slider')}}</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                    </div>
                                                    <input type="text" id="name" name="name" value="{{$slider->name}}"
                                                           class="form-control"
                                                           placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group  row ">
                                            <label for="title" class="col-sm-2 col-form-label">{{trans('slider.description')}}</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">

                                                    <textarea class="form-control" name="description">{{$slider->description}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row ">
                                        <label for="status" class="col-sm-2 col-form-label">{{trans('slider.status')}}</label>
                                        <div class="col-sm-8">
                                            <input class="status" type="checkbox" @if($slider->status == 1) checked @endif name="status"/>
                                        </div>
                                    </div>

                                    <div class="card-footer row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="btn-group float-right">
                                                <button type="submit" class="btn btn-primary">{{trans('home.save')}}</button>
                                            </div>
                                            <div class="btn-group float-left">
                                                <button type="reset" class="btn btn-warning">{{trans('home.reset')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')

@endsection
