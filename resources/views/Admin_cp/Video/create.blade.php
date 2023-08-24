@extends('Admin_cp.Layout.master')
@section('title',trans('video.title-add'))
@section('content')
    <style>
        video
        {
            border: 1px solid black;
            display: block;
        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{trans('video.add')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('video.add')}}</li>
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
                            <h2 class="card-title">{{trans('video.add')}}</h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a href="{{route('video')}}" class="btn  btn-flat btn-default"
                                       title="List"><i class="fa fa-list"></i><span class="hidden-xs"> {{trans('home.back')}}</span></a>
                                </div>
                            </div>
                        </div>

                        @include('Error.message')
                        <form action="{{route('post-video-create')}}" method="post" accept-charset="UTF-8"
                              class="form-horizontal" id="form-main" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group  row ">
                                    <label for="name" class="col-sm-2  control-label">{{trans('video.name')}}</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control name"
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  row ">
                                    <label for="username" class="col-sm-2  control-label">{{trans('video.status')}}</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input id="file-input" type="file" name="video" accept="video/*">

                                            <video id="video" width="300" height="300" controls></video>
                                        </div>
                                    </div>
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

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        const input = document.getElementById('file-input');
        const video = document.getElementById('video');
        const videoSource = document.createElement('source');

        input.addEventListener('change', function() {
            const files = this.files || [];

            if (!files.length) return;

            const reader = new FileReader();

            reader.onload = function (e) {
                videoSource.setAttribute('src', e.target.result);
                video.appendChild(videoSource);
                video.load();
                video.play();
            };

            reader.onprogress = function (e) {
                console.log('progress: ', Math.round((e.loaded * 100) / e.total));
            };

            reader.readAsDataURL(files[0]);
        });
    </script>
@endsection
